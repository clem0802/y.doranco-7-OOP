<?php

// mail('test@test.fr','sujet','<p>message de test</p>');
if( !empty($_POST) ){ // on vérifie que le formulaire est posté 

    $message = '';

    if(empty($_POST['email'])){
        $message .= 'Merci de saisir une adresse mail<br>';
    }

    if(empty($_POST['message'])){
        $message .= 'Merci de saisir un message';
    }

    if(empty($message)){
        // tout est ok
        $entetes[] = 'From: no-reply@example.com';
        $entetes[] = 'MIME-Version:1.0';
        $entetes[] = 'Content-type:text/html; charset=utf-8';

        $messagedumail = 'Message de la part de <a href="mailto:' . $_POST['email'] . '">' . $_POST['email'] . '</a><hr><p>' . $_POST['message'] . '</p>';

        mail('admin@monsite.fr','Nouveau message du formulaire de contact',$messagedumail,implode(PHP_EOL, $entetes));
        $message = "Votre message a été envoyé";
                
    }

}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
</head>
<body>
    <?php if(!empty($message)) echo $message; ?>
    <form method="post">
        <input type="email" name="email" placeholder="Votre adresse mail" value="<?php echo $_POST['email'] ?? '' ?>">
        <br><br>
        <textarea name="message" placeholder="Votre message" rows="8"><?php echo $_POST['message'] ?? '' ?></textarea>

        <button type="submit">Envoyer le message</button>
    </form>
    
</body>
</html>
