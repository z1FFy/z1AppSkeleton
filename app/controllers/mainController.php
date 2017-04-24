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
//        $app = new App();
//        $app->route->get('/hello', function ()  {
//            echo 'ee';
//        })->add($app->mw);
//
//        $app->route->run();
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