<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$route->get('/', function () use ($ctrl) {
    return $ctrl->helloWorld();
})->add($mw);

$route->get('/hello/{id}', function (Request $request) use ($view) {
    return $view->render('home',
      $request->getAttribute('id')
    );
})->add($mw);