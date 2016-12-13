<?php

namespace App\DarkLuk42;

use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Yaml;
use ZipArchive;

class ChipDbDownloader
{
    const CHIPDB_REPOSITORY = 'https://github.com/74hc595/chipdb';
    const CHIPDB_BRANCH = 'master';

    /**
     * @param null $file
     * @return string
     */
    private static function getStoragePath($file = null) {
        $rootDir = dirname(dirname(__DIR__));
        $path = 'app/chipdb/'.ltrim($file, '/');
        $path = $rootDir.'/storage/'.ltrim($path, '/');
        $dir = dirname($path);

        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        if (file_exists($path)) {
            @chmod($path, 0777);
        }
        return $path;
    }

    /**
     * @return array
     * @throws \Exception
     */
    private static function parseYaml() {
        $chipDb = array();

        foreach (scandir(self::getStoragePath('yaml')) AS $file)
        {
            if (pathinfo($file, PATHINFO_EXTENSION) == 'yaml')
            {
                $yamlData = file_get_contents(self::getStoragePath('yaml/'.$file));
                try {
                    $chip = Yaml::parse($yamlData);
                    $chipDb[pathinfo($file, PATHINFO_FILENAME)] = $chip;
                }catch (ParseException $e)
                {
                    try {
                        $yamlData = str_replace('- * ', '- ', $yamlData);
                        $yamlData = preg_replace_callback('/([:-]\s)"([^"]+)"/', function($matches){
                            return $matches[1].'"'.str_replace("\n", '\n', $matches[2]).'"';
                        }, $yamlData);
                        $chip = Yaml::parse($yamlData);
                        $chipDb[pathinfo($file, PATHINFO_FILENAME)] = $chip;
                    }catch (ParseException $e)
                    {
                        throw new \Exception($e->getMessage().' in '.self::getStoragePath('yaml/'.$file));
                    }
                }
            }
        }

        return $chipDb;
    }

    /**
     * @param array $chipDb
     * @return bool
     * @throws \Exception
     */
    private static function saveData(array $chipDb) {
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

    /**
     * @return string
     */
    private static function getZipDownloadUrl() {
        return self::CHIPDB_REPOSITORY.'/archive/'.self::CHIPDB_BRANCH.'.zip';
    }

    /**
     * @throws \Exception
     */
    private static function download() {
        $data = file_get_contents(self::getZipDownloadUrl());
        if (empty($data)) {
            throw new \Exception('Failed to download zip.');
        }

        $localeZip = self::getStoragePath('chipdb.zip');
        if (file_exists($localeZip)) {
            unlink($localeZip);
        }
        if (file_put_contents($localeZip, $data) === false) {
            throw new \Exception('Failed to save zip file.');
        }
    }

    /**
     * @return bool
     * @throws \Exception
     */
    private static function unzipYamls() {
        $localeZip = self::getStoragePath('chipdb.zip');

        if (!file_exists($localeZip)) {
            throw new \Exception('No zip to unzip found.');
        }

        $zip = new ZipArchive;
        if ($result = $zip->open($localeZip))
        {
            if ($result === true) {
                for ($i = 0; $i < $zip->numFiles; $i++) {
                    $name = $zip->getNameIndex($i);
                    $basename = basename($name);

                    if (preg_match('/^[^_].*\.yaml$/i', $basename)) {
                        $stream = $zip->getStream($name);
                        file_put_contents(self::getStoragePath('yaml/'.$basename), stream_get_contents($stream));
                        fclose($stream);
                    }
                }
                $zip->close();
                return true;
            }
        }
        unlink($localeZip);
        return false;
    }

    /**
     * @return array
     * @throws \Exception
     */
    public static function getChipDb()
    {
        if (!file_exists(self::getStoragePath('chipdb.zip'))) {
            self::download();
        }

        self::unzipYamls();
        self::saveData(self::parseYaml());

        return require self::getStoragePath('chipdb.php');
    }
}
