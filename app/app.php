<?php
require_once ('libs/functions.php');
require_once ('configs/mainConfig.php');
require_once ('configs/errorConfig.php');
require_once ('libs/mysqlClass.php');
require_once ('libs/viewClass.php');
require_once ('controllers/mainController.php');

$view  = new View();
$ctrl  = new MainController();
$route = new \Slim\App(new \Slim\Container(['settings' => ['displayErrorDetails' => true]]));

require_once ('routes.php');