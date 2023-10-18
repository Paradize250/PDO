<?php
include '../fonctions/index.php';
require '../Database.php';

$db = new Database();
$id = $_GET['id'];
$queryArticle = 'SELECT* FROM post where id= :id';
$article = $db->query($queryArticle, [':id' => $id])->find();
//dd($article);
if (! $article) {
    exit ("the article does not exist");
}
include '../views/article.view.php';
?>