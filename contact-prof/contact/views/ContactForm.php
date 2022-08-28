<?php
	include_once './controllers/ContactController.php';
	$email = isset($_POST['email']) ? $_POST['email'] : null;
	$nom = isset($_POST['nom']) ? $_POST['nom'] : null;
	$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : null;
	$message = isset($_POST['message']) ? $_POST['message'] : null;

	$contactController = new ContactController($email, $nom, $prenom, $message);

	if (isset($_POST['sendMessage']) && $contactController->isContactValid()) {
		//Enregistrer le message dans la DB
		$contactController->saveToDB();
	}
?>

<form method="POST">
    <input required type="email" name="email" placeholder="Email" value="<?=$contactController->getEmail()?>">
    <p class="error"><?=$contactController->getEmailError()?></p>

    <input type="text" name="nom" placeholder="Nom" value="<?=$contactController->getNom()?>">
    <p class="error"><?=$contactController->getNomError()?></p>

    <input type="text" name="prenom" placeholder="Prenom" value="<?=$contactController->getPrenom()?>">
    <p class="error"><?=$contactController->getPrenomError()?></p>

    <textarea name="message" placeholder="Entrez une message...">
   <?=$contactController->getMessage()?></textarea>


    <p class="error"><?=$contactController->getMessageError()?></p>

    <button type="submit" name="sendMessage">Envoyer</button>
</form>