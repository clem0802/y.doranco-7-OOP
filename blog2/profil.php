<?php 
    session_start();
    // var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="fr">

<?php 
    $title = "BLOG-Profil";
    include_once './components/head.php';
?>



<body>
    <!-- (myPATH) http://localhost/y.doranco-7-OOP/blog2/profil.php -->
    <?php 
        include_once './components/navbar.php';
    ?>

    <h1><?=$_SESSION['user']['username']?></h1>
    <p>(A faire...)</p>


    <?php 
        // echo "<h3><a href='index.php'>Aller à l'Accueil</a></h3>";
        // echo "<h3><a href='auth.php'>Aller au formulaire d'inscription</a></h3>";
    ?>
</body>

</html>