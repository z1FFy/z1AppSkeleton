<?php
require __DIR__ . '/vendor/autoload.php';
require ('core/bootstrap.php');

$app = new App();
$folder = '/z1AppSkeleton';

$app->data['resourcePath'] = $folder.'/app/static';

$app->route->respond('GET', $folder . '/', function () use($app) {
	$app->data['title'] = 'z1App';
	$app->data['content'] = $app->render('index');
	echo $app->render('main');
});


$app->route->respond('404', function ($request) {
	$page = $request->uri();
	echo "Oops, it looks like $page doesn't exist..\n";
});

$app->run();
