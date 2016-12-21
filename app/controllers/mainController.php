<?php
class MainController extends Controller {
    function __construct(){ }

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
            'home', ['text' => 'Hello ' . $name]
          );
    }
}