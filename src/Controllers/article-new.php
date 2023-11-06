<?php
require 'Database.php';
$db = new Database;
$heading = "New Recipe";
$userReq = 'SELECT * FROM user';
$users = $db->query($userReq)->findAll();

dd($users);

$titre = $content = $errors = '';
//dbug($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST'):

    $errors = [];
    $titre = cleanData($_POST['titre']);
    $content = cleanData($_POST['content']);


    //if (empty($titre) || empty($content)) {
    /* if (strlen($titre) === 0 || strlen($content) === 0):
         $errors[] = 'title field or content are empty';
     
     endif;*/

    if (strlen($titre) === 0):
        $errors[] = 'title field empty';
    endif;

    if (strlen($titre) >= 50):
        $errors[] = 'title too big';
    endif;

    if (strlen($content) === 0):
        $errors[] = 'content field empty';
    endif;

    if (strlen($content) >= 1000):
        $errors[] = 'content too big';
    endif;

    if (empty($errors)):
        $db->query(
            'INSERT INTO post (titre, content) VALUES (:titre, :content)',
            [
                'titre' => $titre,
                'content' => $content
            ]
        );
        header('Location: /articles');
        exit();
    endif;


endif;
view("article-new", [
    'heading' => $heading,
    'titre' => $titre,
    'content' => $content,
    'errors' => $errors
]);
