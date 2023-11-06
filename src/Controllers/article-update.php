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
    $titre =cleanData($_POST['titre']);
    $content = cleanData($_POST['content']);
    
    
    if (strlen($titre) === 0):
        $errors[] = 'title field empty';
    endif;
    if (strlen($titre) >= 50):
        $errors[] = 'title too big';
    endif;
    if (strlen($content) === 0):
        $errors[] = 'content empty';
    endif;
    if (strlen($content) === 1000):
        $errors[] = 'content too big';
    endif;


    if ( empty($errors) ) :
        $db->query('UPDATE post SET titre = :titre , content = :content WHERE id = :id' , [
            'id' => $id,
            'titre' => $titre,
            'content' => $content
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