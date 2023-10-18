<?php
include '../fonctions/index.php';
require '../Database.php';

$db = new Database();
$id = $_GET['id'];
$queryArticle = 'SELECT* FROM post where id= :id';
$article = $db->query($queryArticle, [':id' => $id])->fetch();
//dd($article);
include '../views/show.view.php';
?>