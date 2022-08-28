<?php
	session_start();
	//Inscription
	$emailError = isset($_SESSION['signup']['emailError']) ?
	$_SESSION['signup']['emailError'] : "";

	$usernameError = isset($_SESSION['signup']['usernameError']) ?
	$_SESSION['signup']['usernameError'] : "";

	$passwordError = isset($_SESSION['signup']['passwordError']) ?
	$_SESSION['signup']['passwordError'] : "";

	$confirmPasswordError = isset($_SESSION['signup']['confirmPasswordError']) ?
	$_SESSION['signup']['confirmPasswordError'] : "";

	$_SESSION['signup'] = null;

	//Connexion
	$emailLoginError = isset($_SESSION['login']['emailError']) ?
	$_SESSION['login']['emailError'] : "";

	$passwordLoginError = isset($_SESSION['login']['passwordError']) ?
	$_SESSION['login']['passwordError'] : "";

	$_SESSION['login'] = null;

?>
<!DOCTYPE html>
<html lang="fr">

<?php
	$title = "Authentifications";
	include_once "./components/head.php";
?>

<body>
    <?php
    	include_once './components/navbar.php';
    ?>
    <section>
        <h2>Connexion:</h2>
        <form action="./routes/login.php" method="POST">
            <input type="email" name="email" placeholder="Entrez votre email...">
            <p class="error"><?=$emailLoginError?></p>

            <input type="password" name="password" placeholder="Entrez votre mot de passe...">
            <p class="error"><?=$passwordLoginError?></p>

            <button type="submit" name="login">Se connecter</button>
        </form>
    </section>

    <section>
        <h2>Inscription</h2>
        <form action="./routes/signup.php" method="POST">
            <input type="email" name="email" placeholder="Entrez votre email...">
            <p class="error"><?=$emailError?></p>

            <input type="text" name="username" placeholder="Entrez votre pseudo...">
            <p class="error"><?=$usernameError?></p>

            <input type="password" name="password" placeholder="Entrez votre mot de passe...">
            <p class="error"><?=$passwordError?></p>

            <input type="password" name="confirmPassword" placeholder="Confirmez votre mot de passe...">
            <p class="error"><?=$confirmPasswordError?></p>

            <button type="submit" name="signup">S'inscrire</button>
        </form>
    </section>

</body>

</html>