<?php

namespace App\DarkLuk42;

use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Yaml;
use ZipArchive;

class ChipValidator
{
    private $warnings = [];
    private $fileName = null;
    private $chip = null;

    /** source: https://en.wikipedia.org/wiki/List_of_integrated_circuit_packaging_types */
    const ALL_AVAILABLE_PACKAGES = 'SIP,DIP,CDIP,CERDIP,QIP,SDIP,ZIP,MDIP,PDIP;CCGA,CGA,CERPACK,CQGP,LLP,LGA,LTCC,MCM,MICRO,SMDXT;BCC,CLCC,LCC,LCC,LCCC,DLCC,PLCC;OPGA,FCPGA,PAC,PGA,CPGA;CFP,CQFP,BQFP,DFN,ETQFP,PQFN,LQFP,QFN,MLF,QFP,MQFP,HVQFN,SIDEBRAZE,TQFP,TQFN,VQFP,ODFN;SOP,CSOP,HSOP,MSOP,PSOP,PSON,QSOP,SOIC,SSOP,TSOP,TSSOP,TVSOP,µMAX,WSON;CSP,TCSP,TDSP,MICRO SMD,COB,COF,COG;FBGA,LBGA,TEPBGA,CBGA,OBGA,TFBGA,PBGA,MAP-BGA,UCSPμBGA,LFBGA,TBGA,SBGA,UFBGA';

    public function __construct($file)
    {
        $chip = $this->parseYamlFile($file);
        $chip = $this->replaceStringRecursive($chip, function($value){
            return html_entity_decode($value, ENT_NOQUOTES | ENT_HTML5);
        });
        $this->chip = $this->validate($chip);
    }

    private function replaceStringRecursive($obj, $callback){
        if (!is_array($obj)) {
            return $callback($obj);
        } else {
            $newArr = array();
            foreach ($obj as $key => $value) {
                $newArr[$key] = self::replaceStringRecursive($value, $callback);
            }
            return $newArr;
        }
    }

    private function throwError($msg) {
        throw new \Exception($this->getFilename().': '.$msg);
    }

    private function logWarning($msg) {
        $this->warnings[] = $msg;
    }

    public function getWarnings() {
        return $this->warnings;
    }

    public function getFilename() {
        return $this->fileName;
    }

    public function getChip() {
        return $this->chip;
    }

    /**
     * @param $file
     * @return array
     */
    private function parseYamlFile($file) {
        $this->fileName = pathinfo($file, PATHINFO_FILENAME);
        $yamlData = file_get_contents($file);

        // fix multiline strings...
        $yamlData = preg_replace_callback('/([:-]\s)"([^"]+)"/', function($matches){
            return $matches[1].'"'.str_replace("\n", '\n', $matches[2]).'"';
        }, $yamlData);

        try {
            return Yaml::parse($yamlData);
        }catch (ParseException $e)
        {
            try {
                $yamlData = str_replace('- * ', '- ', $yamlData);
                $this->logWarning('Fixed broken yaml with \'- * \'');
                return Yaml::parse($yamlData);
            }catch (ParseException $e)
            {
                $this->throwError($e->getMessage().' in '.$file);
            }
        }
    }

    /**
     * See details at: https://github.com/74hc595/chipdb/blob/master/CONTRIBUTING.md
     *
     * @param array $chip
     * @return array
     */
    public function validate(array $chip) {
        // only known keys
        foreach (array_keys($chip) AS $key) {
            if (!in_array($key, ['name', 'description', 'package', 'pincount', 'family', 'datasheet', 'aliases', 'pins', 'specs', 'notes'])) {
                $this->logWarning('Removing unknown key \''.$key.'\'.');
                unset($chip[$key]);
            }
        }

        // name
        if ($this->fileName !== strtoupper($this->fileName)) {
            $this->logWarning('Filename has to be uppercase.');
            $this->fileName = strtoupper($this->fileName);
        }
        if (isset($chip['name'])) {
            if (!is_string($chip['name'])) {
                $this->throwError('Name has to be a string.');
            }
            if ($this->fileName !== strtoupper($chip['name'])) {
                $this->throwError('Uppercase name has to be same as filename.');
            }
        }

        // description
        if (empty($chip['description'])) {
            $this->throwError('Description is required.');
        }
        if (!is_string($chip['description'])) {
            $this->throwError('Description has to be a string.');
        }

        // package
        if (!isset($chip['package'])) {
            $this->throwError('Package is required.');
        }
        if (!is_string($chip['package'])) {
            $this->throwError('Package has to be a string.');
        }
        if ($chip['package'] !== strtoupper($chip['package'])) {
            $this->logWarning('Package has to be a uppercase.');
            $chip['package'] = strtoupper($chip['package']);
        }
        if ($chip['package'] != 'DIP') {
            $this->logWarning('Only package \'DIP\' is supported currently.');
        }
        if (!in_array($chip['package'], explode(',', str_replace(';', ',', self::ALL_AVAILABLE_PACKAGES)))) {
            $this->logWarning('Doesn\'t seem to be a valid package type.');
        }

        // pincount
        if (!isset($chip['pincount'])) {
            $this->throwError('Pincount is required.');
        }
        if (!is_integer($chip['pincount'])) {
            //$this->logWarning('Pincount has to be a integer.');
            $chip['pincount'] = (int)$chip['pincount'];
        }

        // family
        if (isset($chip['family'])) {
            if (!is_string($chip['family'])) {
                $this->throwError('Family has to be a string.');
            }
            if (!in_array($chip['family'], ['7400', '5400', '4000', 'linear', 'Atmel'])) {
                //$this->logWarning('Unknown chip family \''.$chip['family'].'\'.');
            }
        }

        // aliases
        if (isset($chip['aliases'])) {
            if (!is_array($chip['aliases'])) {
                $this->logWarning('Aliases has to be an array.');
                $chip['aliases'] = [$chip['aliases']];
            }
            foreach ($chip['aliases'] AS $alias) {
                if (!is_string($alias)) {
                    $this->throwError('An alias has to be a string.');
                }
            }
        }

        // pins
        if (empty($chip['pins'])) {
            $this->throwError('Pins are required.');
        }
        if (!is_array($chip['pins'])) {
            $this->throwError('Pins have to be an array.');
        }
        if (count($chip['pins']) !== $chip['pincount']) {
            $this->logWarning('Pincount doesn\'t match.');
            $chip['pincount'] = count($chip['pins']);
        }
        foreach ($chip['pins'] AS $pin) {
            // num
            if (!isset($pin['num'])) {
                $this->throwError('Pin-num is required.');
            }
            if (!is_string($pin['num'])) {
                $this->throwError('Pin-num has to be a string.');
            }
            if (trim($pin['num']) === '') {
                $this->throwError('Pin-num must not be empty.');
            }

            // sym
            if (!isset($pin['sym'])) {
                $this->throwError('Pin-sym is required.');
            }
            if (!is_string($pin['sym'])) {
                $this->throwError('Pin-sym has to be a string.');
            }
            if (trim($pin['sym']) === '') {
                $this->throwError('Pin-sym must not be empty.');
            }
            if (preg_match('/^[0-9]+$/', $pin['sym'])) {
                $this->logWarning('Pin-sym should not be numeric.');
            }

            // desc
            if (!isset($pin['desc'])) {
                $this->throwError('Pin-desc is required.');
            }
            if (!is_string($pin['desc'])) {
                $this->throwError('Pin-desc has to be a string.');
            }
            if (trim($pin['desc']) === '') {
                $this->throwError('Pin-desc must not be empty.');
            }
        }

        // specs
        // TODO

        // notes
        if (isset($chip['notes'])) {
            if (!is_array($chip['notes'])) {
                $this->logWarning('Notes has to be an array.');
                $chip['notes'] = [$chip['notes']];
            }
            foreach ($chip['notes'] AS $note) {
                if (!is_string($note)) {
                    $this->throwError('A note has to be a string.');
                }
            }
        }

        return $chip;
    }
}