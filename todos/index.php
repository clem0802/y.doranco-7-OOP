<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./public/styles/style.css">
        <title>Todos</title>
        <link rel="shortcut icon" href="https://images.unsplash.com/photo-1641154706848-fe27fd366032?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHRvZG9saXN0fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60">
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

    // View => Controller => Model
?>