<?php


if( !empty($_GET['langue'])){
    $langue = $_GET['langue'];
    
    $expiration = 15 * 24 * 3600; // 15 jours en secondes
    setCookie('langue',$langue,time() + $expiration,'/');
    // on créé un cookie qui va mémoriser la langue choisie 

}
elseif( !empty($_COOKIE['langue'])){
    $langue = $_COOKIE['langue'];  // j'utilise l'information mémorisée dans le cookie

    /* /!\ pas de données sensibles dans un cookie */
}
else{
    $langue = 'en';
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
</head>
<body>

    <a href="?langue=en">EN</a>
    <a href="?langue=fr">FR</a>
    <a href="?langue=es">ES</a>

    <?php
        switch($langue){
            case 'en' : echo "Hello, the website is in english"; break;
            case 'fr' : echo "Bonjour, le site est en français"; break;
            case 'es' : echo "Hola, el sitio es en español"; break;
        }
    ?>
    
</body>
</html>
