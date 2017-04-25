<?php
namespace app\routes;

use z1;
use Slim\Http\Request;

$app = new z1\App();

$app->route->get('/', function () use ($app) {
    return $app->ctrl->helloWorld();
})->add($app->mw);

$app->route->get('/hello/{id}',
    function (Request $req) use ($app) {
    return
        $app->ctrl->helloName(
            $req->getAttribute('id')
        );
})->add($app->mw);

$app->route->run();