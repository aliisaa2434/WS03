<?php

class Router{
    protected $routes = [];

    public function registerRoute($method, $uri, $controllers){
    $this->routes[] = [
        'method' => $method,
        'uri' => $uri,
        'controllers' => $controllers
    ];
    }

/**
 * Add GET ROUTE
 * 
 * @param string $uri
 * @param string $controllers
 * return void
 */

public function get($uri, $controllers){
    $this->registerRoute('GET', $uri, $controllers);
}

/**
 * Add POST ROUTE
 * 
 * @param string $uri
 * @param string $controllers
 * return void
 */

public function post($uri, $controllers){
    $this->registerRoute('POST', $uri, $controllers);
}

/**
 * Add PUT ROUTE
 * 
 * @param string $uri
 * @param string $controllers
 * return void
 */

public function put($uri, $controllers){
    $this->registerRoute('PUT', $uri, $controllers);
}

/**
 * Add DELETE ROUTE
 * 
 * @param string $uri
 * @param string $controllers
 * return void
 */

public function delete($uri, $controllers){
    $this->registerRoute('DELETE', $uri, $controllers);
}

/**
 * Load the error page
 * 
 * @param int $httpCode
 * 
 * return void
 */
public function error($httpCode = 404){
    http_response_code($httpCode);
    loadview("error/{$httpCode}");
    exit;
}

/**
 * Route the request
 * 
 * @param string $uri
 * @param string $method
 * return void
 */
public function route($uri, $method){
    foreach($this->routes as $route){
        if($route['uri'] === $uri && $route['method'] === $method){
            require basePath($route['controllers']);
            return;
        }
    }
    $this->error(404);
}
}
// $routes = require basePath('routes.php');

// if (array_key_exists($uri, $routes)) {
//     require (basePath($routes[$uri]));
// }else {
//     http_response_code(404);
//     require basePath($routes['/404']);
// }

?>