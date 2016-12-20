<?php
use \Psr\Http\Message\ServerRequestInterface as Request;

$route->get('/', function () use ($ctrl) {
    return $ctrl->helloWorld();
});

$route->get('/hello/{id}', function (Request $request) use ($ctrl) {
    return $ctrl->helloName(
      $request->getAttribute('id')
    );
});

$route->run();