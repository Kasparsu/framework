<?php

namespace App;


class Router {

    private static $routes = [];
    private $requestUri = '';
    private $requestMethod = '';

    /**
     * Router constructor.
     */
    public function __construct() {
        include_once '../routes.php';
        $this->requestUri= explode('?', $_SERVER['REQUEST_URI'])[0];
        $this->requestMethod= $_SERVER['REQUEST_METHOD'];
        $this->matchRoute();
    }

    private function matchRoute(){
        foreach (self::$routes as $route=>$params){
            if($route == $this->requestUri && $params['method'] == $this->requestMethod){
                $f = new $params['action'][0]();
                $f->{$params['action'][1]}();
            }
        }
    }

    static function get($route, $action){
        self::$routes[$route] = ['action' => $action, 'method' => 'GET'];
    }
    static function post($route, $action){
        self::$routes[$route] = ['action' => $action, 'method' => 'POST'];
    }

}