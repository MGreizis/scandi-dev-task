<?php

require '../core/Router.php';

$router = new Router();

$router->add('',['controller' => 'Home', 'action' => 'index']);
$router->add('addproduct',['controller' => 'Product', 'action' => 'index']);

// Display the routing table
// echo '<pre>';
// var_dump($router->getRoutes());
// echo '</pre>';

$url = $_SERVER['QUERY_STRING'];

if ($router->match($url)) {
    echo '<pre>';
    var_dump($router->getParams());
    echo '</pre>';
} else {
    echo "No route found for URL '$url'";
}