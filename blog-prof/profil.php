<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<?php
	$title = "Profil";
	include_once "./components/head.php";
?>

<body>
    <?php
    	include_once './components/navbar.php';
    ?>
    <h1><?=$_SESSION['user']['username']?></h1>
    <p>A faire...</p>
</body>

</html>