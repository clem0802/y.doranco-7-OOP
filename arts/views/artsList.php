<?php 
    include_once './controllers/ArtController.php';
?>

<section>
    <ol>
        <!-- utiliser le TodoController pour chercher les todos et les afficher -->
        <?php 
            echo ArtController::renderArts();
        ?>
    </ol>
</section>