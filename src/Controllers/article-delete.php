<?php
require 'Database.php';
$db = new Database();
$id = $_GET['id'];


$queryArticle = 'SELECT * FROM post WHERE id = :id';
$article = $db->query($queryArticle, [':id' => $id]);

// code to delete an article
$queryDelete = 'DELETE FROM post WHERE id = :id';
$db->query($queryDelete, [':id' => $id]);

header('Location: /articles');
 exit();