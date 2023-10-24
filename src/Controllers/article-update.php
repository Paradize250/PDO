<?php
require 'Database.php';
$db = new Database;
$heading = 'recipe update';

$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

if (!is_numeric($id)) {
    abort();
 }
 
 $queryArticle = 'SELECT * FROM post where id = :id';
 
 $articleUpdate = $db->query($queryArticle, [':id' => $id])->find();
 
 if (! $articleUpdate) {
    abort();
 }
$titre = $content = $errors = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST'):
    $errors = [];
    
    if (strlen($titre) === 0):
        $errors[] = 'title field empty';
    endif;


    if (strlen($content) === 0):
        $errors[] = 'content field empty';
    endif;


    if ( empty($errors) ) :
        $db->query('UPDATE post SET titre = :titre , contenu = :contenu WHERE id = :id' , [
            'id' => $id,
            'titre' => $titre,
            'contenu' => $contenu
        ]
        );
        header('Location: /articles');
        exit();
    endif;
endif;

view('article-update',[
    'heading' => $heading,
    'titre' => $articleUpdate['titre'],
    'content' => $articleUpdate['content'],
    'errors' => $errors
]);