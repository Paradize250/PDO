<?php
require 'Database.php';
$db = new Database();
$articles = $db->query('SELECT * from post ORDER BY ID DESC')->findAll();
//include 'views/index.view.php';
$heading = 'Recipes List';
view(
    'admin',
    [
        'heading' => $heading,
        'articles' => $articles
    ]
);
echo '</br>';



