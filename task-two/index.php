<?php

function writeToLog($data)
{
    if (is_array($data)) {
        $data = serialize($data);
    }
    $log = date('Y-m-d | ') . $data;
    file_put_contents('log.txt', $log . PHP_EOL, FILE_APPEND);
}

$someData = 'test';
writeToLog($someData);