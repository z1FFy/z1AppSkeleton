<?php
function getConfig($key)
{
    $config = [
      'domain' => 'localhost',
      'subFolder' => 'z1AppSkeleton',
      'dbHost' => 'localhost',
      'dbUser' => 'root',
      'dbPass' => '',
      'dbName' => 'db'
    ];
    return $config[$key];
}