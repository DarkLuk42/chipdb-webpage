<?php

namespace App\DarkLuk42;

use Exception;
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Yaml;

class Chip
{
    private $warnings = [];
    private $fileName = null;
    private $fileHash = null;
    private $chip = null;

    const PACKAGES_SIP = 'SIP,SIPP';
    const PACKAGES_SIP_Z = 'ZIP';
    const PACKAGES_DIP = 'DFN,DIP,DIL,DIPP,CERDIP,CDIP,PDIP,SPDIP,SDIP,EDIP,FP'
    .',SOIC,SO,MSOIC,SOJ,SOP,SSOP,TSOP,TSSOP';
    const PACKAGES_DIP_Z = 'QIP,QIL,QUIP,QUIL';
    const PACKAGES_Q = 'LCC,PLCC,CLCC,QFN,QFP,MLF';
    const PACKAGES_ARRAY = 'BGA';
    const PACKAGES_TO = 'TO-92,TO-220,TO-247';

    /**
     * TODO keep up to date
     */
    const ALL_PACKAGES = self::PACKAGES_SIP
    .','.self::PACKAGES_DIP
    .','.self::PACKAGES_DIP_Z
    .','.self::PACKAGES_Q
    .','.self::PACKAGES_ARRAY
    .','.self::PACKAGES_TO;

    /**
     * Logs a warning.
     *
     * @param $msg
     */
    private function logWarning($msg) {
        $this->warnings[] = $msg;
    }

    /**
     * @return array
     */
    public function getWarnings() {
        return $this->warnings;
    }

    /**
     * Determines if saved yaml equals yaml how it would be saved.
     * 
     * @return bool
     * @throws Exception
     */
    public function isNormalized() {
        if($this->fileHash === null) {
            throw new Exception('No data loaded...');
        }
        return $this->fileHash === md5($this->dumpYaml());
    }

    /**
     * @return string
     * @throws Exception
     */
    public function getFilename() {
        if($this->fileName === null) {
            throw new Exception('No data loaded...');
        }
        return $this->fileName;
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getChip() {
        if($this->chip === null) {
            throw new Exception('No data loaded...');
        }
        return $this->chip;
    }

    /**
     * Loads data from yaml file.
     *
     * @param $file
     */
    public function load($file) {
        $this->fileName = pathinfo($file, PATHINFO_FILENAME);
        $this->fileHash = md5_file($file);
        $chip = $this->loadYamlFile($file);
        $this->chip = StringUtil::asciiHtmlToUtf8Recursive($chip);
        $this->validate();
    }

    /**
     * Dumps chip as yaml file.
     * 
     * @return string
     */
    public function dumpYaml() {
        $chip = $this->getChip();
        foreach($chip['packages'] AS $package => $pinMap) {
            $chip['packages'][$package] = $this->pinMapToArrayIfPossible($pinMap);
        }
        $yamlData = StringUtil::utf8ToAsciiHtmlRecursive($chip);
        return Yaml::dump($yamlData, 4, 2);
    }

    /**
     * Saves yaml file in given directory.
     *
     * @param $dir
     * @throws Exception
     */
    public function saveYamlFile($dir) {
        if(is_dir($dir.'/data')) {
            $dir .= '/data';
        }
        $file = $dir.'/'.$this->getFilename().'.yaml';

        $yamlData = $this->dumpYaml();

        if(file_exists($file)) {
            unlink($file);
        }

        if(file_put_contents($file, $yamlData) === false) {
            throw new Exception('Failed to write file.');
        }
    }

    /**
     * @param $file
     * @return array
     * @throws Exception
     */
    private function loadYamlFile($file) {
        $yamlData = file_get_contents($file);

        try {
            return Yaml::parse($yamlData);
        }catch (ParseException $e)
        {
            try {
                // quick and dirty fix multiline strings...
                $yamlData = preg_replace_callback('/([:-]\s)"([^"]+)"/', function($matches){
                    return $matches[1].'"'.str_replace("\n", '\n', $matches[2]).'"';
                }, $yamlData);

                $this->logWarning('Fixed multiline strings...');
                return Yaml::parse($yamlData);
            }catch (ParseException $e)
            {
                throw new Exception($this->getFilename().': '.$e->getMessage().' in '.$file);
            }
        }
    }

    /**
     * Detects version of the chip.
     *
     * @return int
     * @throws Exception
     */
    private function detectVersion() {
        if(isset($this->chip['package'])) {
            return 1;
        }else if(isset($this->chip['packages'])) {
            return 2;
        }
        throw new Exception($this->getFilename().': '.'Could not determine version of data.');
    }

    private function migrateV1t2() {
        $pins = [];
        $packages = ['DIP' => []];
        foreach($this->chip['pins'] AS $pin) {
            if(!in_array($pin['sym'], ['NC', 'NOT_PRESENT'])) {
                $pins[$pin['sym']] = ['desc' => $pin['desc']];
            }
            $packages['DIP'][$pin['num']-1] = $pin['sym'];
        }

        unset($this->chip['package']);
        unset($this->chip['pincount']);
        $this->chip['pins'] = $pins;
        $this->chip['packages'] = $packages;

        return $this->chip;
    }

    private function pinMapToDict($pinMap) {
        if(isset($pinMap[0])) {
            $newPinMap = array();
            foreach ($pinMap AS $num => $sym) {
                if(StringUtil::isIntString($num)) {
                    $num+=1;
                }
                $newPinMap[$num] = $sym;
            }
            return $newPinMap;
        }
        return $pinMap;
    }

    private function pinMapToArrayIfPossible($pinMap) {
        if(isset($pinMap[count($pinMap)])) {
            $isArrayAble = true;
            foreach ($pinMap AS $key => $value) {
                if(StringUtil::isIntString($key) && $key <= count($pinMap)) {
                    // OK
                } else {
                    $isArrayAble = false;
                }
            }
            
            if($isArrayAble) {
                $newPinMap = array();
                foreach ($pinMap AS $num => $sym) {
                    $newPinMap[$num-1] = $sym;
                }
                $pinMap = $newPinMap;
            }
        }
        return $pinMap;
    }

    /**
     * See details at: https://github.com/74hc595/chipdb/blob/master/CONTRIBUTING.md
     *
     * @return array
     * @throws Exception
     */
    public function validate() {
        switch($this->detectVersion()) {
            case 1:
                $this->migrateV1t2();
                break;
        }

        // only known keys
        foreach (array_keys($this->chip) AS $key) {
            if (!in_array($key, ['name', 'description', 'packages', 'family', 'datasheet', 'aliases', 'pins', 'specs', 'notes'])) {
                $this->logWarning('Removing unknown key \''.$key.'\'.');
                unset($this->chip[$key]);
            }
        }

        // name
        if ($this->fileName !== strtoupper($this->fileName)) {
            $this->logWarning('Filename has to be uppercase.');
            $this->fileName = strtoupper($this->fileName);
        }
        if (isset($this->chip['name'])) {
            if (!is_string($this->chip['name'])) {
                throw new Exception($this->getFilename().': '.'Name has to be a string.');
            }
            if ($this->fileName !== strtoupper($this->chip['name'])) {
                throw new Exception($this->getFilename().': '.'Uppercase name has to be same as filename.');
            }
        }

        // description
        if (empty($this->chip['description'])) {
            throw new Exception($this->getFilename().': '.'Description is required.');
        }
        if (!is_string($this->chip['description'])) {
            throw new Exception($this->getFilename().': '.'Description has to be a string.');
        }

        // family
        if (isset($this->chip['family'])) {
            if (!is_string($this->chip['family'])) {
                throw new Exception($this->getFilename().': '.'Family has to be a string.');
            }
            if (!in_array($this->chip['family'], ['7400', '5400', '4000', 'linear', 'Atmel'])) {
                //$this->logWarning('Unknown chip family \''.$chip['family'].'\'.');
            }
        }

        // aliases
        if (isset($this->chip['aliases'])) {
            if (!is_array($this->chip['aliases'])) {
                $this->logWarning('Aliases has to be an array.');
                $this->chip['aliases'] = [$this->chip['aliases']];
            }
            foreach ($this->chip['aliases'] AS $alias) {
                if (!is_string($alias)) {
                    throw new Exception($this->getFilename().': '.'An alias has to be a string.');
                }
            }
        }

        // pins
        if (empty($this->chip['pins'])) {
            throw new Exception($this->getFilename().': '.'Pins are required.');
        }
        if (!is_array($this->chip['pins'])) {
            throw new Exception($this->getFilename().': '.'Pins have to be an array.');
        }
        foreach ($this->chip['pins'] AS $sym => $pin) {
            // sym
            if (!(is_string($sym) || is_integer($sym))) {
                throw new Exception($this->getFilename().': '.'Pin-sym has to be a string.');
            }
            if (trim($sym) === '') {
                throw new Exception($this->getFilename().': '.'Pin-sym must not be empty.');
            }
            if (StringUtil::isIntString($sym)) {
                $this->logWarning('Pin-sym should not be numeric.');
            }

            // desc
            if (!isset($pin['desc'])) {
                throw new Exception($this->getFilename().': '.'Pin-desc is required.');
            }
            if (!is_string($pin['desc'])) {
                throw new Exception($this->getFilename().': '.'Pin-desc has to be a string.');
            }
            if (trim($pin['desc']) === '') {
                throw new Exception($this->getFilename().': '.'Pin-desc must not be empty.');
            }
        }

        // packages
        if (empty($this->chip['packages'])) {
            throw new Exception($this->getFilename().': '.'Packages is required.');
        }
        if (!is_array($this->chip['packages'])) {
            throw new Exception($this->getFilename().': '.'Packages has to be a array.');
        }
        foreach($this->chip['packages'] AS $package => $pinMap) {
            $this->validatePackage($package);
        }

        // specs
        if (isset($this->chip['specs'])) {
            if (!is_array($this->chip['specs'])) {
                $this->logWarning('Specs has to be an array.');
                $this->chip['specs'] = empty($this->chip['specs']) ? [] : [$this->chip['specs']];
            }
            foreach ($this->chip['specs'] AS $spec) {
                if (!is_array($spec)) {
                    throw new Exception($this->getFilename().': '.'Spec has to be an array.');
                }

                if (!isset($spec['param'])) {
                    throw new Exception($this->getFilename().': '.'Spec-param is required.');
                }
                if (!is_string($spec['param'])) {
                    throw new Exception($this->getFilename().': '.'Spec-param has to be a string.');
                }
                if (trim($spec['param']) === '') {
                    throw new Exception($this->getFilename().': '.'Spec-param must not be empty.');
                }

                if (!isset($spec['val'])) {
                    throw new Exception($this->getFilename().': '.'Spec-val is required.');
                }
                if (!(is_string($spec['val']) || is_array($spec['val']))) {
                    throw new Exception($this->getFilename().': '.'Spec-val has to be a string or array.');
                }
                if (empty($spec['val'])) {
                    throw new Exception($this->getFilename().': '.'Spec-val must not be empty.');
                }

                if (isset($spec['unit'])) {
                    if (!is_string($spec['unit'])) {
                        throw new Exception($this->getFilename().': '.'Spec-unit has to be a string.');
                    }
                }
            }
        }

        // notes
        if (isset($this->chip['notes'])) {
            if (!is_array($this->chip['notes'])) {
                $this->logWarning('Notes has to be an array.');
                $chip['notes'] = empty($this->chip['notes']) ? [] : [$this->chip['notes']];
            }
            foreach ($this->chip['notes'] AS $note) {
                if (!is_string($note)) {
                    throw new Exception($this->getFilename().': '.'A note has to be a string.');
                }
            }
        }
    }

    private function validatePackage($package)
    {
        $pinMap = $this->chip['packages'][$package];

        if (!in_array($package, explode(',', self::ALL_PACKAGES))) {
            $this->logWarning('Doesn\'t seem to be a valid package type.');
        }

        $pinMap = $this->pinMapToDict($pinMap);
        $this->chip['packages'][$package] = $pinMap;
        foreach ($pinMap AS $num => $sym) {
            if (trim($num) === '') {
                throw new Exception($this->getFilename().': '.'Pin-num must not be empty.');
            }

            if(in_array($package, explode(',', self::PACKAGES_ARRAY))) {
                if (!preg_match('/^[A-Z]+[0-9]+$/', $num)) {
                    throw new Exception($this->getFilename().': '.'Pin-num must match /^[A-Z]+[0-9]+$/.');
                }
            } else {
                if (!(StringUtil::isIntString($num) || in_array($num, ['BOTTOM_PLATE', 'HEATSINK']))) {
                    throw new Exception($this->getFilename().': '.'Pin-num is unknown non-numeric.');
                }
            }

            if (!(in_array($sym, ['NC', 'NOT_PRESENT']) || isset($this->chip['pins'][$sym]))) {
                throw new Exception($this->getFilename().': '.'Pin-sym \''.$sym.'\' is unknown.');
            }
        }
    }
}