<?php 
    include_once './controllers/TodoController.php';
?>

<section>
    <ol>
        <!-- utiliser le TodoController pour chercher les todos et les afficher -->
        <?php 
            echo TodoController::renderTodos();
        ?>
    </ol>
</section>