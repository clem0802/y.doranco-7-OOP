<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Todos</title>
    </head>

    <body>
        <!-- (myPATH) http://localhost/y.doranco-7-OOP/todos/index.php -->
        <h1>Les tâches :</h1>
        <?php 
            include_once './views/todoForm.php';
        ?>

        <?php 
            include_once './views/todosList.php';
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