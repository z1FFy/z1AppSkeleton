<?php
require __DIR__ . '/vendor/autoload.php';
require ('core/bootstrap.php');

$app = new App('/z1AppSkeleton');

$app->route->get('/', function() use($app) {
	$app->data['title'] = 'z1App';
	$app->data['content'] = $app->render('index');
	echo $app->render('main');
});

$app->route->get('/user/*', function ($user) use($app){
	echo "User - {$user}";
});

$app->route->errorRoute(function (array $err) {
	echo 'Sorry, this errors happened: '.dbg($err);
});

$app->route->exceptionRoute('InvalidArgumentException', function (InvalidArgumentException $e) {
	echo 'Sorry, this error happened: '.$e->getMessage();
});

#TODO: 404 handling
$app->run();

