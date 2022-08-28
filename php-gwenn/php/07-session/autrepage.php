<?php 

session_name("CUSTOMNAME");

session_start(); // je récupère la session en cours

echo $_SESSION['login']; // j'affiche une information stockée en session