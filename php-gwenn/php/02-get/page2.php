<?php

var_dump( $_GET );

echo $_GET['article'];

/*
$_GET est une superglobale
Comme toutes les superglobales :
    - c'est un tableau (array)
    - commence par un underscore _
    - est écrite en majuscules
    - existe toujours
    - a une rôle précis

$_GET récupère les informations de l'url (celles qui suivent le ? ) et fabrique un tableau associatif

Dans notre exemple  : ?article=pantalon&couleur=rouge nous donne
array(
    'article' => 'pantalon',
    'couleur' => 'rouge'
)

/!\ Pas de données sensibles transmises en GET (mot de passe, num de CB, etc...)


*/