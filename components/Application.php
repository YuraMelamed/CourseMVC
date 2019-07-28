<?php

class Application
{
    public function run(){

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        $controllerName = 'site';
        $actionName = 'index';

        if(isset($routes[1]) && !empty($routes[1])){
            $controllerName = $routes[1];
        }
        if(isset($routes[2])){
            $actionName = $routes[2];
        }

        $controllerName = ucfirst($controllerName) . 'Controller';
        $actionName = 'action' . ucfirst($actionName);

        $controllerPath = './controllers/' . $controllerName . '.php';
        if(!file_exists($controllerPath)){
            $this->error404();
        }

        require_once($controllerPath);
        $controller = new $controllerName;

        if(!method_exists($controller, $actionName)){
            $this->error404();
        }
        $controller->$actionName();
    }
    public function error404(){
        die('Page not found');
    }
}