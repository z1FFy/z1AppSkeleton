<?php
namespace core;

use \Psr\Http\Message\ServerRequestInterface as Req;
use \Psr\Http\Message\ResponseInterface as Res;

/**
 * Class App
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
        $view;

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

        $self = $this;

        $this->route->add(function (
            Req $request,
            Res $response, $next
        )
        use ($self) {

            $self->req = $request;

            $self->app = $self;

            $response = $next($request, $response);
            return $response;
        });

    }

    public function init()
    {
        $app = new App();
        $this->route = $app->route;
    }


}