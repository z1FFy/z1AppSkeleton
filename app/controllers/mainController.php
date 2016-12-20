<?php
class MainController {
    function __construct(){
        $this->view = new View();
    }

    function helloWorld(){
        return
          $this->view->render(
            'home',
            [
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