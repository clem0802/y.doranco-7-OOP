<?php

echo $_SERVER['DOCUMENT_ROOT'];

var_dump($_SERVER);
/*

$_SERVER nous transmets dans un tableau des informations liées :
     - au serveur qui heberge le site
     - au navigateur utilisé
     - au script php consulté
     - à l'url en cours
     - à l'OS de la machine

     NB : localhost correspond à l'adresse IP locale 127.0.0.1
     
*/
