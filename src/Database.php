<?php

class Database
{
    public $connexion;
    public function __construct()
    {


        //this is used to create a connection between the database and its contents to our php file to be able to use the contents or call them
        try {
            $this->connexion = new PDO('mysql:host=mariadb;dbname=blog', 'root', 'root', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

            echo 'Connexion ok';

            //dd($connexion);
        } catch (PDOException $e) {
            exit('Connection error:' . $e);
        }
    }
    public function query($query, $param =[])
    {
        $statement = $this->connexion->prepare($query);
        $statement->execute($param);
        return $statement;
    }
}
?>