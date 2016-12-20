<?php
error_reporting(E_ALL); // Report all errors
ini_set('display_errors', 0); // Disable standard php error showing
                              // Custom wrapper in file - "/app/libs/functions.php"
function getConfig($key) {
    $config = [
        'domain'    =>  'localhost',
        'subFolder' =>  'z1AppSkeleton',
        'dbHost'    =>  'localhost',
        'dbUser'    =>  'root',
        'dbPass'    =>  '',
        'dbName'    =>  'db',
    ];
    return $config[$key];
}