<?php
namespace app\routes;


use core\App;
use Slim\Http\Request as req;

use app\controllers\MainController;
use app\controllers\TestController;

class MainRoute extends App {

    public function routes()
    {
        $this->init();

        $this->route->get('/', function ()  {
            return
                MainController::helloName('Denis');
        });

        $this->route->get('/hello/{id}',
        function (req $req)  {
            return TestController::helloName(
                $req->getAttribute('id')
            );
        });
    }

}
