<?php

namespace Core;

class Router
{
    protected $routes = [];

    // add routes.
    public function add($method, $uri, $controller)
    {
        $this->routes[] = [
            "uri" => $uri,
            "controller" => $controller,
            "method" => $method
        ];
    }

    public function get($uri, $controller)
    {
        $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller)
    {
        $this->add('POST', $uri, $controller);
    }

    public function patch($uri, $controller)
    {
        $this->add('PATCH', $uri, $controller);
    }

    public function put($uri, $controller)
    {
        $this->add('PUT', $uri, $controller);
    }

    public function delete($uri, $controller)
    {
        $this->add('DELETE', $uri, $controller);
    }

    // serve a http request
    public function serve()
    {
        $uri = $_SERVER['REQUEST_URI'];

        foreach ($this->routes as $route) {
            if ($uri == $route['uri']) {
                Util::require($route['controller']);
            } else {
                Http::abort(Response::NOT_FOUND, "The page you are looking for doesn't exist or has been moved. Try going back to your dashboard.");
            }
        }
    }
}
