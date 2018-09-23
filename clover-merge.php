<?php
require_once 'vendor/autoload.php';

error_reporting(~\E_ALL);

try {
    $invocation = new \d0x2f\CloverMerge\Invocation($argv);
    $invocation->execute();
} catch (\Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
