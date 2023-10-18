<?php

$uriPath = parse_url($_SERVER['REQUEST_URI'])['path'];

//dd($uriPath);

$routes = match ($uriPath) {
    '/' => 'controllers/index.php',
    '/articles' => 'controllers/articles.php',
    '/article' =>'controllers/article.php',
    '/contact' => 'controllers/contact.php',
    default => 'views/404.php'
};

require($routes);
?>