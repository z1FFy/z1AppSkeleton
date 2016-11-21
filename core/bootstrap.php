<?php
require_once ('functions.php');
error_reporting(E_ALL); // Showing errors ( on the dev. server )
ini_set('display_errors', 0); // If not setting on the php.ini


/**
 * Bootstrap by z1web
 *
 * Using:
 * Template - Pug(Jade)
 * Router - Respect\Rest\Router
 **/
class App
{
	public $pug,$route,
	$data,
	$subfolder;

	function __construct($subfolder)
	{
		$this->subfolder = $subfolder;
		$this->route = new Respect\Rest\Router($this->subfolder);
		$this->pug = new \Pug\Pug();
		$this->data['resourcePath'] = $this->subfolder.'/app/static';
	}

	function render($view)
	{
		$output = $this->pug->render(
			'app/templates/' . $view . '.pug',
			$this->data);
		return $output;
	}

	function run(){
		$this->route->run();
	}

}