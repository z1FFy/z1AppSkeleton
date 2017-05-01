<?php
namespace app\controllers;
use z1\App\Controller;

/**
 * Class MainController
 * @package app\controllers
 */
class MainController extends Controller {
    function __construct(){

    }

    function helloWorld() {
        return
          $this->view->render(
            'home', [
              'text' => 'Hello world',
              'title' => 'Hello world'
            ]
          );
    }

    function helloName($name) {
        return
          $this->view->render(
            'home',
              [
                'text' => 'Hello ' . $name
              ]
          );
    }
}