<?php
use \Psr\Http\Message\ServerRequestInterface as Request;

#404
$route->get('/*', function () use ($view) {
    return $view->render('page/404');
});

$route->get('/', function () use ($ctrl) {
    return $ctrl->helloWorld();
});

$route->get('/hello/{id}', function (Request $request) use ($ctrl) {
    return $ctrl->helloName(
      $request->getAttribute('id')
    );
});


$route->run();