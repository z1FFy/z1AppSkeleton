<?php
/**
 * PHP Application Skeleton
 *
 * @author Denis Kuschenko <ziffyweb@gmail.com>
 */

require __DIR__ . '/vendor/autoload.php';

require_once ('core/functions.php');

require_once('core/ControllerClass.php');

require_once('core/App.php');
require_once('core/View.php');

require_once('app/routes.php');

$route = new \app\routes\MainRoute();
$route->routes();
$route->route->run();