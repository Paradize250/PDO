<?php
declare(strict_types=1);

function dbug($value) {
    echo '<pre style="background-color:black;color:white;padding:15px;overflow: auto;">';
    // var_dump($value);
    print_r($value);
    echo '</pre>';
}

function dd($value) {
    dbug($value);
    die("Script arrété !!!!");
}

// Fonctions

// function calcul(int $a,int $b): int
//  {
//     // $c = $a + $b;
//     // echo $c;
//     // return $c;
//     return $a + $b;
// }

// echo calcul(10,12);
// $resultat = calcul("10",12);

// echo $resultat;

// function calcul(int $a,int $b = 5): int
//  {
//     return $a + $b;
// }
// // echo calcul(10,12);
// echo calcul(10);

// Faire une fonction qui calcul le prix TTC en lui passant le prix HT et la TVA
// function calculPrixTTC(float $prixHT, int $TVA): float
// {
//     return $prixHT + ($prixHT * $TVA) / 100;
// }

// echo calculPrixTTC(34,10) .'€';


// Faire une fonction qui calcul l'age d'une personne en lui passant la date de naissance

// function calculAge(int $yearBirth) : int
// {
//     $currentYear = date('Y');
//     return $currentYear - $yearBirth;
// }

// echo 'Votre age est de ' . calculAge(1990) . ' ans.';

// function maFonction() : void
// {
//     return ;
//     // return "5";
//     // return null;
// }

// Fonction interne à PHP

// Inverser une chaine de caractere
// $article = "Je lis un article.";
// dbug($article);
// dd(strrev($article));

// Longeur d'une chaine de caractere
// dd(strlen($article));

// Transforme une chaine de caractere en majuscule
// dd(strtoupper($article));

// Remplace un element dans une chaine de caractere
// remplacer 'un' par 'cet'
// dd(str_replace('un','cet',$article));

// Remplace un segment dans une chaine de caractere
// renvoyer les 6 premiers elements de la chaine de caractere
// dd(substr($article,0,6));

// $x = 5;
// $y = 3;

// function calcul(int $x): int
// {
//     global $y;
//     $y = 7;
//     return $x + $y;
// }

// echo calcul(5);
// dd($y);

// global $z;
// $z = 'Le monde';
// echo "Hello " . $GLOBALS['z'];