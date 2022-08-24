<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/index.css">
        <title>Blog-articles (TP)</title>
        <link rel="shortcut icon" href="https://images.unsplash.com/photo-1471970471555-19d4b113e9ed?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NjZ8fGJsb2d8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
    </head>

    <body>
        <!-- (myPATH) http://localhost/y.doranco-7-OOP/arts/index.php -->
        <h1>Blog-articles (TP)</h1>
        <?php 
            include_once './views/artForm.php';
        ?>

        <?php 
            include_once './views/artsList.php';
        ?>
        
    </body>
</html>


<?php 
    // MVC:
    // MODEL: Classe qui communique avec la BDD
    // VIEW: Front-end
    // CONTROLLER: Classe qui contrôle la VIEW 
    // et "controller" utilise le MODEL pour chercher et traiter les données
?>