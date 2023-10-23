<?php

$uriPath = parse_url($_SERVER['REQUEST_URI'])['path'];

//dd($uriPath);

// $routes = match ($uriPath) {
//     '/' => 'controllers/index.php',
//     '/articles' => 'controllers/articles.php',
//     '/article' =>'controllers/article.php',
//     '/contact' => 'controllers/contact.php',
//     default => 'views/404.php'
// };

// require($routes);
//-------------------------------------------------------------------------------------------------------
//creating a table with the paths
// $routes = [
//     '/' => 'controllers/index.php',
//     '/articles' => 'controllers/articles.php',
//     '/article' => 'controllers/article.php',
//     '/contact' => 'controllers/contact.php'
// ];
function routeToController($uri, $routes)
{
   
    if (array_key_exists($uri, $routes)):
        
        require $routes[$uri];
    else:
        abort();
    endif;
}
function abort($code = 404)
{
    http_response_code($code);
    require "views/$code.php";
    die();
}
$routes = require ('routes.php');
routeToController($uriPath, $routes);
?>