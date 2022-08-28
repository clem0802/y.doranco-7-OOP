<?php

// on peut personnaliser le nom du cookie
session_name("CUSTOMNAME");

session_start();
// - démarre une session ou récupère une session précedemment ouverte
// - créé un cookie qui par défaut s'appelle PHPSESSID ( ex : ksd7d9qc8g1r1kvavchr38815l)
// - créé un fichier sur le serveur (en local c:/wamp64/tmp)
// ex de fichier : sess_ksd7d9qc8g1r1kvavchr38815l

$_SESSION['login'] = 'Fred';

// Détruire une session
session_destroy();
// effectif à la fin du script
// il faudra rafraichir ou rediriger vers une page pour constater que la session est détruite

echo $_SESSION['login'];

