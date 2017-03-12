<?php

use App\DarkLuk42\ChipDb;

ini_set('display_errors', true);

require_once __DIR__.'/vendor/autoload.php';

try {
    if(!isset($argv[1])) {
        $argv[1] = '.';
    }
    ChipDb::build(realpath($argv[1]), true);

    echo 'success'.PHP_EOL;
} catch(\Error $e) {
    echo $e->getMessage() . ' in ' . $e->getFile() . ' on line ' . $e->getLine().PHP_EOL;
} catch(\Exception $e) {
    echo $e->getMessage() . ' in ' . $e->getFile() . ' on line ' . $e->getLine().PHP_EOL;
}
