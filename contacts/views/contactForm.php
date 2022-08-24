

<?php 
    // var_dump($_POST);
    include_once './controllers/ContactController.php';
    echo "<h2><a href='message.php' target='_blank'>Aller voir les messages</a></h2>";

    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $nom = isset($_POST['nom']) ? $_POST['nom'] : null;
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : null;
    $message = isset($_POST['message']) ? $_POST['message'] : null;

    $contactController = new ContactController($email, $nom, $prenom, $message);
    // ici on veut tester s'il y a "submit" == (addTodo)
    if(isset($_POST['addContact']) && $contactController->isValidContact()){
        // enregistrer le contact dans la BDD
        $contactController->saveToDB();
    }

?>


<form method="POST" name="contact">
    <h2>Formulaire de contact</h2>
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="nom" placeholder="Nom">
    <input type="text" name="prenom" placeholder="Prénom">
    <textarea id="message" name="message" placeholder="Message"></textarea>
    <input type="submit" name="addContact" value="Soumettre" class="submit">
</form>





