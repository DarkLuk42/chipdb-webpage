<?php

ini_set('display_errors', true);

require_once __DIR__.'/vendor/autoload.php';

use App\DarkLuk42\ChipDbDownloader;

try {
    ChipDbDownloader::refresh();
    echo 'success'.PHP_EOL;
} catch(\Error $e) {
    echo $e->getMessage() . ' in ' . $e->getFile() . ' on line ' . $e->getLine().PHP_EOL;
} catch(\Exception $e) {
    echo $e->getMessage() . ' in ' . $e->getFile() . ' on line ' . $e->getLine().PHP_EOL;
}
