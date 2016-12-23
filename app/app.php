<?php
require_once ('libs/functions.php');
require_once ('configs/mainConfig.php');
require_once ('libs/controllerClass.php');
require_once ('libs/viewClass.php');
require_once ('libs/mysqlClass.php');
require_once ('controllers/mainController.php');

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$view  = new View();
$ctrl  = new MainController();
$route = new \Slim\App(new \Slim\Container(['settings' => ['displayErrorDetails' => true]]));

$mw = function (Request $request, Response $response, $next) use($view,$ctrl) {
    $view->subFolder = $request->getUri()->getBasePath();
    $view->domain = $request->getUri()->getHost();
    $view->path = $request->getUri()->getPath();
    $ctrl->view = $view;
    $response = $next($request, $response);
    return $response;
};

require_once ('routes.php');

$route->run();