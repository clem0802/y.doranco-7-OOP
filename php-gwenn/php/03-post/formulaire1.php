<?php

var_dump($_POST);
/*
La superglobale $_POST récupère les informations d'un formulaire
et construit un array avec les attributs 'name' des éléments html du formulaire

Pour une liste de choix, 
    si l'attribut value existe pour une option, c'est cette information qui sera récupérée par POST, sinon c'est le libellé de l'option qui sera utilisé
Pour une case à cocher, c'est seulement si elle est cochée que l'on récupère son name et sa value dans POST
Pour une date, on la récupère au format SQL : AAAA-MM-JJ
Pour une couleur, c'est le code hexa ( ex: #12fa89 )

*/

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire et POST</title>
</head>
<body>

    <form action="" method="post">

        <label for="login">Login</label>
        <input type="text" id="login" name="login">

        <label for="mdp">Password</label>
        <input type="password" id="mdp" name="mdp">

        <label for="civilite">Civilite</label>
        <select id="civilite" name="civilite">
            <option value="m">Monsieur</option>
            <option value="f">Madame</option>
            <option value="nb">Autre</option>
        </select>

        <input type="checkbox" id="rgpd" name="rgpd" value="accept">
        <label for="rgpd">J'accepte la politique de confidentialité</label>

        <button type="submit">Envoyer</button>

    </form>

    
</body>
</html>