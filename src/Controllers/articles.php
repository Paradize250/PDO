<?php
require 'Database.php';
$db = new Database();
$articles = $db->query('SELECT * from post ORDER BY ID DESC')->findAll();
//include 'views/index.view.php';
$heading = 'Recipes List';
view(
    'articles',
    [
        'heading' => $heading,
        'articles' => $articles
    ]
);
echo '</br>';















//------------------------------------------------------------------------------------------------------------------

class Person
{
    //attributes (variables)
    public $name;
    public $age;
    //methodes (fonctions)
    public function running()
    {
        echo $this->name . ' run slowly!';
    }
}

$person1 = new person();
$person1->name = 'Jon Doe';
$person1->age = 30;
$person1->running();
echo '</br>';
/* this is what is done in the database file where they created a connection between the database and the index file
try {
    $connexion = new PDO('mysql:host=mariadb;dbname=blog', 'root', 'root');
    //dd($connexion);
} catch (PDOException $e) {
    exit('Connection error:' . $e);
}
$articles = $connexion->query('SELECT * from post')->fetchAll(PDO::FETCH_ASSOC);
*/
//dd($articles);

?>