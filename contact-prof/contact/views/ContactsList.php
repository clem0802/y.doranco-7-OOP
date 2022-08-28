<a href="./index.php">Envoyer un message</a>
<?php
	include_once './controllers/ContactController.php';
	$messages = ContactController::getMessages();
	foreach ($messages as $key => $message) {
	echo '
            <section>
                <h2>' . $message['nom'] . ' ' . $message['prenom'] . '</h2>
                <p>FROM: ' . $message['email'] . '</p>
                <p>' . $message['message'] . '</p>
            </section>
        ';
}