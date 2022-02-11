<?php

class Router 
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

    private function getURI() 
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        $uri = $this->getURI();

        // Проверяем наличие такого маршрута в routes.php
        foreach($this->routes as $uriPattern => $path) {

            // Сравниваем $uriPattern и $uri
            if (preg_match("~$uriPattern~", $uri)) {
                
                // Получаем внутренний маршрут из внешнего
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                // Определим какой контроллер и action обрабатывают запрос
                $segments = explode('/', $internalRoute);    

                $controllerName = ucfirst(array_shift($segments).'Controller');
                $actionName = 'action'.ucfirst(array_shift($segments));
                
                $patameters = $segments;   

                // Подключаем файл класса-контроллера
                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';

                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }
                
                // Создаем объект контроллера и вызываем метод action
                $controllerObject = new $controllerName;


                $result = call_user_func_array(array($controllerObject, $actionName), $patameters);

                if ($result != null) {
                    break;
                }
            }

        }


    }
}