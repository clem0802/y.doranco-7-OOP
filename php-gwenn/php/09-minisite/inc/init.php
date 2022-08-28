<?php

// Ouverture de session
session_name('PORTFOLIO');
session_start();

// Connexion à la BDD
$pdo = new PDO(
    'mysql:host=localhost;charset=utf8;dbname=portfolio', // DSN Data Source Name
    'root', // user
    '', // mdp
    array(
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // tableau associatif à la lecture des lignes
    )
);

// Définition de constantes
define('URLSITE','/php/09-minisite/');


// Inclusion des fonctions
require_once('functions.php');