<?php
require 'Database.php';
$db = new Database;
$heading = "New Recipe";

//dbug($_POST);
if ($_SERVER['REQUEST_METHOD'] === 'POST'):
    $titre = cleanData($_POST['titre']);
    $content = cleanData($_POST['content']);
    //if (empty($titre) || empty($content)) {
    if (strlen($titre) === 0 || strlen($content) === 0) {
        echo 'title field or content are empty';
        exit;
    } else {
        $db->query(
            'INSERT INTO post (titre, content) VALUES (:titre, :content)',
            [
                'titre' => $titre,
                'content' => $content
            ]
        );
        header('Location: /articles');
    }
endif;
view("article-new", $heading);