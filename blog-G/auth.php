<?php 
session_start();
//Inscription;
var_dump($_SESSION);
$errorEmail = isset($_SESSION['signup']['errorEmail']) ? $_SESSION['signup']['errorEmail'] : "";
$errorUsername = isset($_SESSION['signup']['errorUsername']) ? $_SESSION['signup']['errorUsername'] : "";
$errorPassword = isset($_SESSION['signup']['errorPassword']) ? $_SESSION['signup']['errorPassword'] : "";
$errorConfirmPassword = isset($_SESSION['signup']['errorConfirmPassword']) ? $_SESSION['signup']['errorConfirmPassword'] : "";
$_SESSION['signup'] = null;

//Connexion
$errorLoginEmail = isset($_SESSION['login']['errorEmail']) ? $_SESSION['login']['errorEmail'] : "";
$errorLoginPassword = isset($_SESSION['login']['errorPassword']) ? $_SESSION['login']['errorPassword'] : "";
$_SESSION['login'] = null;
?>
<!DOCTYPE html>
<html lang="fr">
    <?php 
        $title = "Authentification";
        include_once 'components/head.php';
    ?>
    <body>
        <?php 
            include_once 'components/navbar.php';
        ?>
        <section>
            <h2>Connexion:</h2>
            <form action="routes/login.php" method="POST">
                <input type="email" name="email" placeholder="Etrez votre email...">
                <p class="error"><?=$errorLoginEmail?></p>

                <input type="password" name="password" placeholder="Entrez votre mot de passe...">
                <p class="error"><?=$errorLoginPassword?></p>

                <button type="submit" name="login">Se connecter</button>
            </form>
        </section>
        <section>
            <h2>Inscription</h2>

            <form action="routes/signup.php" method="POST">
                <input type="email" name="email" placeholder="Etrez votre email...">
                <p class="error"><?=$errorEmail?></p>

                <input type="text" name="username" placeholder="Entrez votre pseudo...">
                <p class="error"><?=$errorUsername?></p>

                <input type="password" name="password" placeholder="Entrez votre mot de passe...">
                <p class="error"><?=$errorPassword?></p>

                <input type="password" name="confirmPassword" placeholder="Confirmez votre mot de passe...">
                <p class="error"><?=$errorConfirmPassword?></p>

                <button type="submit" name="signup">S'inscrire</button>
            </form>
        </section>
    </body>
</html>
