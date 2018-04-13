<?php
namespace app\controllers;

use core\Controller;
use core\View;

class MainController extends Controller {
    function helloWorld() {
        return
          View::render(
            'home', [
              'text' => 'Hello world',
              'title' => 'Hello world'
            ]
          );
    }

    static function helloName($name) {
        return
          View::render(
            'home',
              [
                'text' => 'Hello ' . $name,
                'title' => 'Title'
              ]
          );
    }
}