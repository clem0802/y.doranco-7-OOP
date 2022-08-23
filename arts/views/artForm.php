<?php 
    // var_dump($_POST);
    include_once './controllers/ArtController.php';
    $artController = new ArtController(isset($_POST['art']) ? $_POST['art'] : null);

    // ici on veut tester s'il y a "addArt"
    if(isset($_POST['addArt']) && 
    
        $artController->isValidArt()){
        // enregistrer l'article dans la BDD
        $artController->saveToDB();
    }
?>

<form method="POST">
    <input type="text" name="art" placeholder="Écrivez un court article">
    <button type="submit" name="addArt">Valider</button>
    <p><?=$artController->getError()?></p>
</form>