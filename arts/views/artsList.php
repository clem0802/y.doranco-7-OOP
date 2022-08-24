<?php 
    include_once './controllers/ArtController.php';
    if(isset($_GET['deleteArt'])){
        ArtController::deleteArt($_GET['deleteArt']);
    }
?>

<section>
    <ol>
        <!-- utiliser le TodoController pour chercher les todos et les afficher -->
        <?php 
            echo ArtController::renderArts();
        ?>
    </ol>
</section>


