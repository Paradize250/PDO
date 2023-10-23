<?php

class Database
{
    public $connexion;
    public $statement;

    public function __construct()
    {
        try {
            $this->connexion = new PDO('mysql:host=mariadb;dbname=blog', 'root', 'root', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
            //echo 'Connection successful.';
        } catch (PDOException $e) {
            exit('Connection error: ' . $e->getMessage());
        }
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connexion->prepare($query);
        $this->statement->execute($params);
        return $this;
    }

    public function find()
    {
        if ($this->statement) {
            return $this->statement->fetch();
        }
        return null; // Handle the case where statement is not set
    }

    public function findAll()
    {
        if ($this->statement) {
            return $this->statement->fetchAll();
        }
        return null; // Handle the case where statement is not set
    }
}
?>
