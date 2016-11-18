<?php
require_once ('functions.php');
error_reporting(E_ALL); // Showing errors ( on the dev. server )
ini_set('display_errors', 0); // If not setting on the php.ini


/**
 * Bootstrap by z1web
 *
 * Using:
 * Template - Pug(Jade)
 * Router - Klein
 **/
class App
{
	public $pug,$route,
	$data;
	function __construct()
	{
		$this->pug = new \Pug\Pug();
		$this->route = new \Klein\Klein();
	    $this->data = [];
	}

	function render($view)
	{
		$output = $this->pug->render(
			'app/templates/' . $view . '.pug',
			$this->data);
		return $output;
	}

	function run(){
		$this->route->dispatch();
	}

}