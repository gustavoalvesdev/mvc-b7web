<?php 

require '../app/controllers/HomeController.php';
require '../app/controllers/NoticiasController.php';
require '../app/controllers/NotFoundController.php';

class Router 
{

    public function dispatch($url)
    {
        $url = trim($url, '/');
        $parts = $url ? explode('/', $url) : [];

        $controllerName = $parts[0] ?? 'Home';

        $controllerName = ucfirst($controllerName) . 'Controller';

        if (!class_exists($controllerName)) {
            $controllerName = 'NotFoundController'; 
        }
     
        $controller = new $controllerName();
       
        $controller->index();
    }

}
