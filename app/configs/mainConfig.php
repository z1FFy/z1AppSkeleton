<?php
require_once('errorConfig.php');

function getConfig($key)
{
    $mode = 'DEV'; #Change this for toggle config mode

    $config =
      [
        'DEV' => [
         '...'
        ],
        'PROD' => [
          '...'
        ]
      ];
    return $config[$mode][$key];
}