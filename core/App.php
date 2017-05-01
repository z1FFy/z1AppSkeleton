<?php
namespace z1;


use z1\App\View;

use app\controllers\MainController;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

/**
 * Class App
 * @package z1
 *
 * @param $route \Slim\App
 */
class App
{
    public
        $app,
        $req,
        $route,
        $mw,
        $view,
        $ctrl;

    function __construct()
    {
        $this->route = new \Slim\App(
            new \Slim\Container([
                'settings' =>
                    [
                        'displayErrorDetails'
                        => true
                    ]
            ])
        );
        $this->view = new View();
        $this->ctrl = new MainController();

        $self = $this;
        $this->mw = function (Request $request, Response $response, $next)
        use ($self) {
            $req = $request->getUri();
            $self->view->basePath = $req->getBasePath();
            $self->view->host = $req->getHost();
            $self->view->path = $req->getPath();
            $self->ctrl->view = $self->view;
            $self->app = $self;
            $response = $next($request, $response);
            return $response;
        };
    }
}