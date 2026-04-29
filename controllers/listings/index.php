<?php 
// echo "listings"

define ('BASE_PATH', dirname(__DIR__));
require BASE_PATH . '/helpers.php';
require basepath('Router.php');

$router = new Router();

$routes = require basePath('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = str_replace('/ITWS03', '', $uri);

if ($uri == ' '){
    $uri = '/';
}

$method = $_SERVER['REQUEST_METHOD'];
$router->route($method, $uri);
loadview('listings/index');
?>