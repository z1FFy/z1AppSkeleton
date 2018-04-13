<?php
namespace app\controllers;

use core\Controller;
use core\View;

/**
 * Class TestController
 * @package app\controllers
 */
class TestController extends Controller  {
    function __construct(){ }

    function helloName($name) {
        return
            View::render(
                'home', [
                    'text' => $name,
                    'title' => 'Hello '.$name
                ]
            );
    }

}