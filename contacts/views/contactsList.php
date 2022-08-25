
<?php 
    include_once './controllers/ContactController.php';
    echo "<h2><a href='index.php' target='_blank'>Ajouter un message</a></h2>";
    if(isset($_GET['deleteContact'])){
        ContactController::deleteContact($_GET['deleteContact']);
    }
?>

<section>
    <ol>
        <?php 
            // ici ça retourne un "TABLEAU ASSOCIATIF"
            // utiliser le ContactController pour chercher les contacts et les afficher 
            // echo ContactController::renderContacts();
            $contacts = ContactController::getContacts();
            echo "<h2>Liste des messages postés</h2>";
            foreach($contacts as $key => $contact){
                // $date = date('j/m/Y - G:i', strtotime($contact['date']));
                echo '
                    <li>
                        <span>' .$contact['nom']. ' ' .$contact['prenom'].' - </span>
                        <span>' .$contact['email']. ' - </span>
                        <span>' .$contact['message']. ' - </span>
            
                        <form method="GET">
                            <button type="submit" name="deleteContact" value="'.$contact['id'].'">Supprimer</button>
                        </form>
                    </li>
                ';
            }
        ?>
    </ol>
</section>
