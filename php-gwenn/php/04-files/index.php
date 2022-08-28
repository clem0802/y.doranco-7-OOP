<?php

// var_dump($_FILES);
// $_FILES récupère les informations des fichiers joints à un formulaire et contient des élements permettant de copier le fichier.
// /!\ cela ne fonctionne que si vous avez spécifier l'attribut enctype="multipart/form-data" dans la balise form
// sinon c'est POST qui ne récupérera que le nom du fichier


if (!empty($_FILES['fichier']['name'])) {

    $mimes_autorises = array('image/jpeg', 'image/png');

    if (!in_array($_FILES['fichier']['type'], $mimes_autorises)) {
        $message = 'Format de fichier incorrect. Merci de choisir une image JPEG ou PNG';
    } else {

        $nomfichier = uniqid() . '_' . $_FILES['fichier']['name'];
        $dossier = __DIR__ . '/img/';
        move_uploaded_file($_FILES['fichier']['tmp_name'],  $dossier . $nomfichier);
        // copy()
    }
} else {
    $message = "Vous n'avez pas choisi de fichier";
}


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie photos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php if (!empty($message)) echo $message ?>

    <form method="post" enctype="multipart/form-data">

        <label for="fichier">Ajouter une photo à la galerie</label>
        <input type="file" id="fichier" name="fichier" accept="image/jpeg,image/png">

        <button type="submit">Envoyer le fichier</button>

    </form>

    <hr>
    <?php

    $photos = glob('img/*.{jpg,jpeg,png}', GLOB_BRACE);
    // var_dump($photos);
    if (empty($photos)) :
    ?>
        <p>Pas encore de photos dans la galerie</p>
    <?php
    else :
    ?>
        <div id="galerie">
            <?php
            foreach ($photos as $photo) :
            ?>
                <img src="<?php echo $photo ?>">
            <?php
            endforeach;
            ?>
        </div>
    <?php
    endif;

    ?>
</body>

</html>