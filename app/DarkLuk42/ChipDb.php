<?php

namespace App\DarkLuk42;

use Exception;

class ChipDb
{

    private static function getStoragePath($file) {
        $dir = dirname(dirname(__DIR__)).'/storage/app/chipdb';
        $file = $dir.'/'.$file;
        if(!is_dir(dirname($file))) {
            mkdir(dirname($file), 0777, true);
        }
        return $file;
    }

    /**
     * Returns list of yaml files by given directory.
     *
     * @param $dir
     * @return array
     * @throws Exception
     */
    public static function listFiles($dir) {
        $files = array();
        $dir = realpath($dir);
        if(is_dir($dir.'/data')) {
            $dir .= '/data';
        }
        foreach (scandir($dir) AS $file) {
            if(preg_match('/^[^_].*\.yaml$/', pathinfo($file, PATHINFO_BASENAME))) {
                $files[] = $dir.'/'.$file;
            }
        }

        if(empty($files)) {
            throw new Exception('No yaml files found.');
        }
        return $files;
    }

    /**
     * @param string $dir the path to the yaml files
     * @param bool $overwriteNotNormalized
     * @return array
     */
    private static function load($dir, $overwriteNotNormalized = false) {
        $chipDb = array();

        foreach (self::listFiles($dir) AS $file)
        {
            $validator = new Chip();
            $validator->load($file);

            $chipDb[$validator->getFilename()] = $validator->getChip();
            $warnings = $validator->getWarnings();
            if (!empty($warnings)) {
                foreach ($warnings as $warning) {
                    echo $validator->getFilename().': '.$warning.PHP_EOL;
                }
            }

            if(!$validator->isNormalized()) {
                if($overwriteNotNormalized) {
                    $validator->saveYamlFile($dir);
                    echo $validator->getFilename().': Was not normalized'.PHP_EOL;
                } else {
                    echo $validator->getFilename().': Is not normalized'.PHP_EOL;
                }
            }
        }

        return $chipDb;
    }


    /**
     * Saves ChipDB data to json and php file.
     *
     * @param string $dir the path to the yaml files
     * @param bool $overwriteNotNormalized
     * @return bool
     * @throws Exception
     */
    public static function build($dir, $overwriteNotNormalized = false) {
        $chipDb = self::load($dir, $overwriteNotNormalized);
        if (empty($chipDb)) {
            throw new \Exception('No chipdb data to save.');
        }

        if (file_exists(self::getStoragePath('chipdb.php'))) {
            unlink(self::getStoragePath('chipdb.php'));
        }
        if (file_exists(self::getStoragePath('chipdb.json'))) {
            unlink(self::getStoragePath('chipdb.json'));
        }

        return file_put_contents(self::getStoragePath('chipdb.php'), '<?php return '.var_export($chipDb, true).';') !== false
            && file_put_contents(self::getStoragePath('chipdb.json'), json_encode($chipDb)) !== false;
    }

}
