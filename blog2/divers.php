<!-- formulaire que Samy a mis au début, mais après il a changé au fil du cours -->
<!-- ce fichier n'est linké avec aucun autre fichier -->

<form action="./routes/signup.php" method="POST">
    <input type="email" name="email" placeholder="Entrez votre email">
    <p class="error">
    <?= isset($_GET['emailError']) ? $_GET['emailError'] : ""?>
    </p>

    <input type="text" name="username" placeholder="Entrez votre pseudo">
    <p class="error">
        <?= isset($_GET['usernameError']) ? $_GET['usernameError'] : ""?>
    </p>

    <input type="password" name="password" placeholder="Entrez votre mot de passe">
    <p class="error">
        <?= isset($_GET['passwordError']) ? $_GET['passwordError'] : ""?>
    </p>

    <input type="password" name="confirmPassword" placeholder="Confirmez votre mdp">
    <p class="error">
        <?= isset($_GET['confirmPasswordError']) ? $_GET['confirmPasswordError'] : ""?>
    </p>

    <button type="submit" name="signup" value="Submit">S'inscrire</button>
</form>