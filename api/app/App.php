<?php

namespace KartingApi;

use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\RouteCollector;

class App
{
    function run()
    {

        $dispatcher = new Dispatcher($this->routes());
        try {
            $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        } catch (HttpRouteNotFoundException $e) {
            // TODO Return HTTP 404
            $response = "Not found!";
        }

        echo $response;
    }

    private function routes()
    {
        $router = new RouteCollector();

        $router->get('/ping', function () {
            return 'pong';
        });

        return $router->getData();
    }
}