<?php
namespace app\controllers;

/**
 * Class TestController
 * @package app\controllers
 */
class TestController extends MainController  {
    function __construct(){ }

    function test() {
        return
            $this->view->render(
                'home', [
                    'text' => 'Test',
                    'title' => 'Hello world'
                ]
            );
    }

}