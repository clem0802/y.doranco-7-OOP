<?php 
    // mise en place de cookie 
    session_start();
    

    // --------------------------------------------------
    // INSCRIPTION 
    $emailError = isset($_SESSION['signup']['emailError']) ? 
    $_SESSION['signup']['emailError'] : "";

    $usernameError = isset($_SESSION['signup']['unsernameError']) ? 
    $_SESSION['signup']['usernameError'] : "";

    $passwordError = isset($_SESSION['signup']['passwordError']) ? 
    $_SESSION['signup']['passwordError'] : "";

    $confirmPasswordError = isset($_SESSION['signup']['confirmPasswordError']) ? 
    $_SESSION['signup']['confirmPasswordError'] : "";
    var_dump($_SESSION);

    // pour vider la session
    $_SESSION['signup']= null;

    // --------------------------------------------------
    // CONNEXiON
	$emailLoginError = isset($_SESSION['login']['emailError']) ?
	$_SESSION['login']['emailError'] : "";

	$passwordLoginError = isset($_SESSION['login']['passwordError']) ?
	$_SESSION['login']['passwordError'] : "";
    var_dump($_SESSION);

    // pour vider la session
    $_SESSION['login']= null;
?>
    


<!DOCTYPE html>
<html lang="fr">

<?php 
    $title = "BLOG-Authentifications";
    include_once './components/head.php';
?>


<body>
    <!-- (myPATH) http://localhost/y.doranco-7-OOP/blog2/auth.php -->
    <?php 
        include_once './components/navbar.php';
    ?>

    <section>
        <h2>Connexion:</h2>
        <form action="./routes/login.php" method="POST">
            <input type="email" name="email" placeholder="Entrez votre email">
            <p class="error"><?=$emailError?></p>

            <input type="password" name="password" placeholder="Entrez votre mot de passe">
            <p class="error"><?=$passwordError?></p>

            <button type="submit" name="login">Se connecterr</button>
        </form>
    </section>
    <br>


    
    <section>
        <h2>Inscription</h2>
        <!-- <form action="https://public.herotofu.com/v1/d5377820-0cf0-11ed-9bdb-53c785fa3343" method="POST" class=""> -->
        <form action="./routes/signup.php" method="POST">
            <input type="email" name="email" placeholder="Entrez votre email">
            <p class="error"><?=$emailError?></p>

            <input type="text" name="username" placeholder="Entrez votre pseudo">
            <p class="error"><?=$usernameError?></p>

            <input type="password" name="password" placeholder="Entrez votre mot de passe">
            <p class="error"><?=$passwordError?></p>

            <input type="password" name="confirmPassword" placeholder="Confirmez votre mdp">
            <p class="error"><?=$confirmPasswordError?></p>

            <button type="submit" name="signup">S'inscrire</button>
        </form>
    </section>
    
</body>
</html>