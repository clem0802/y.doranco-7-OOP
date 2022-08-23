<!-- ********************************************** -->
<!-- (0) CONNECTION TO DATABASE -->
<?php 
    // Étapes: 
    // (1) créer la table dans phpMyAdmin
    // (2) ajouter des articles
    // (3) Afficher les articles
    // 3.1 se connecter à la BDD

    // var_dump($_GET);
    // connexion la BDD
    $serverName = 'localhost:3306';
    $dbUsername= "root";
    $dbPassword = "root";
    $dbName = "tp";
    $dbConnect = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName); 
    // ci-dessus, mysqli_connect() est une fonction qui a 4 paramètres
    // var_dump($dbConnect);

    // 3.2 envoyer une requête pour sélectionner tous les articles
    $getArticleQuery = 'SELECT * FROM articles';
    $getArticleRequest = mysqli_query($dbConnect, $getArticleQuery);
    $articles = mysqli_fetch_all($getArticleRequest, MYSQLI_ASSOC);
    // var_dump($articles);  // pour véirifer

    // 3.3 afficher les articles
?>




<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PHP-OOP8 (TP) (Samy)</title>
        <meta name="description" content="PHP-OOP8 PROJET">
        <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgYlC9coY7UOOE5O3Qvn7EKLBSvT4gzzUzqw&usqp=CAU">

        <link rel="stylesheet" href="styles/footer.css">
        <link rel="stylesheet" href="styles/index.css">

        <!-- bootstrap -->
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"
        />
        
        <!-- font awesome -->
        <link 
            rel="stylesheet" 
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
            crossorigin="anonymous" 
            referrerpolicy="no-referrer" 
        />
    </head>


    <!-- <body class="container-fluid d-flex flex-column justify-content-center align-items-center text-center"> -->
    <body>
        <?php 
            include_once "./components/navbar.php"; 
        ?>

        <h1>PHP-OOP8 (TP)</h1>
        <!-- (myPATH) http://localhost/y.doranco-7-OOP/tp/index.php -->
        <div class="crown"><i class="fa-solid fa-crown"></i></div>


        <!-- ********************************************** -->
        <!-- (1) DYNAMIC TIME -->
        <?php
            $paris = new DateTime('now', new DateTimeZone('Europe/Paris'));
            echo "<p>Current Paris time is: " . $paris->format("d-m-Y H:i:s") . "</p>";
            echo "<br>";
            echo "<br>";

        ?>


        <!-- ********************************************** -->
        <!-- (2) FORM1 (SUBSCRIBE) -->
        <form action="https://public.herotofu.com/v1/d5377820-0cf0-11ed-9bdb-53c785fa3343" method="POST" class="form1 container-fluid d-flex flex-column">
            <h2>Subscription Form</h2>
            <p>Hi, I am Clémence, would you like to get in touch with me? </p>
            <input type="text" name="prenom" placeholder="Your first name">
            <input type="text" name="email" placeholder="Your email">
            <input type="password" name="mdp" placeholder="Set your password">
            <input type="password" name="mdp-confirmation" placeholder="Confirm your password">
            <textarea name="message" id="message" cols="28" rows="5" placeholder="Your message"></textarea>
            <input type="submit" name="inscription" value="Submit" class="submit">
        </form>
        <br>
        <br>

        <!-- to check if the FORM is submitted + COOKIES -->
        <?php 
            if (isset($_POST['inscription'])&&!$_POST['inscription']) {
                // récupération des champs
                $prenom = $_POST["prenom"];
                $email = $_POST["email"];
                $mdp = $_POST["mdp"];
                $message = $_POST["message"];
                $mdpConfirmation = $_POST["mdp-confirmation"];

                echo "The user is registered:<br>";
                echo $prenom . "<br>" . $email . "<br>" . $mdp . "<br>" . $message . "<br>" .$mdpConfirmation;

                // CRÉATION of COOKIES for users
                // 3600 = (1 hour)
                setcookie("prenom", $prenom, time() + (3600*24*30) );
                setcookie("email", $email, time() + (3600*24*30) );
                setcookie("mdp", $mdp, time() + (3600*24*30) );
                setcookie("message", $message, time() + (3600*24*30) );
            }
        ?>



<!-- https://images.unsplash.com/photo-1520638023360-6def43369781?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8ODN8fGJpcmR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60 -->
<!-- Birds benefit the environment by removing disease-prone carcasses, eating bugs, caching seeds and helping to maintain ecological balance. -->

        <!-- ********************************************** -->
        <!-- (3) FROM2 - (PUBLISH) -->
        <form class="form2" method="POST">
            <h2>Publish Article Form</h2>
            <input type="text" name="title" placeholder="Article title">
            <input type="text" name="category" placeholder="Please type 'animal' or 'plant'">
            <input type="text" name="img" placeholder="Paste your article URL">
            <textarea name="content" placeholder="Please describe your article"></textarea>
            <input type="submit" name="publish" value="Publish" class="submit">
        </form>
        <br>
        <br>

        <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
        <?php
            // $artError = "";
            // // tester la publication
            // if(isset($_GET['publish'])){
            //     $title = $_GET['title'];
            //     $category = $_GET['category'];
            //     $img = $_GET['img'];
            //     $content = $_GET['content'];
            //     if(($title === "")||($category === "")||($img === "")||($content === "")){
            //         $artError = "Please fill in all blanks.";
            //     } else {
            //         $addArticleQuery = "INSERT INTO articles (title, category, img, content) VALUES ('$title', '$category', '$img', '$content')";
            //         $addArticleRequest = mysqli_query($dbConnect, $addArticleQuery);
            //         header('Location: /y.doranco-6-OOP/tp/index.php');
            //     }
            // }
        ?>
        <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
        <!-- vérifier si le formulaire de publication de article est soumis -->
        <?php
            if (isset($_POST['publish'])&&!$_POST['publish']) {

                $title = $_POST['title'];
                $category = $_POST['category'];
                $img = $_POST['img'];
                $content = $_POST['content'];
                
                $dbConnect->query("INSERT INTO articles (title, category, img, content) VALUES ('$title', '$category', '$img', '$content')");

                echo "Your article is published";
            }
        ?>
        <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->



        <!-- ********************************************** -->
        <!-- (4) GET ALL ARTICLES -->
        <!-- to GET the articles created and stored in phpMyAdmin -->
        <!-- to run each SQL request, so to have them shown on the browser -->
        <!-- to loop over each article -->
        <?php
            // $articles = $dbConnect->query("SELECT * FROM cards WHERE id = 1 OR id = 2");
            $articles = $dbConnect->query("SELECT * FROM articles");
            // $articles = $dbConnect->query("SELECT * FROM articles WHERE category='animal'");
            // $articles = $dbConnect->query("SELECT * FROM articles WHERE category='plant'");

            echo "<h2>ANIMAL && PLANT</h2>";
            echo "<ul class='container-fluid d-flex justify-content-center'>";
            foreach($articles as $key => $article) {
                echo "<li class='li container-fluid col-lg-3 m-1'>
                <h3 class='title'>" . $article['title'] . "</h3>
                <h6 class='category'>Article category: " . $article['category'] . "</h6>
                <img src=" . $article['img'] . ">
                <p class='content'>" . $article['content'] . "</p>
                    </li>";
            }
            echo "</ul>";
            echo "<br>";
            echo "<br>";
        ?>






        <!-- ********************************************** -->
        <!-- ATTRIBUTION -->
        <div class="attribution text-center">
            PHP-OOP8 Exercise Project<br>
            Coded by <a target="_blank" href="https://portfolio-clemence.netlify.app">Clémence TAN</a>
            <p>&copy; Copyright 2022 - All rights reserved</p>
        </div>

        <!-- FOOTER -->
        <!-- ********************************************** -->
        <footer>
            <p>Find me on social media</p>
            <div class="social-container">

                <div>
                    <a target="_blank" href="https://www.facebook.com/profile.php?id=100079029092235" class="social-media-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                </div>
                <div>
                    <a target="_blank" href="https://www.linkedin.com/in/clemence-0802/" class="social-media-icon">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
                <div>
                    <a target="_blank" href="https://github.com/clem0802?tab=repositories&q=&type=&language=&sort=name" class="social-media-icon">
                        <i class="fab fa-github"></i>
                    </a>
                </div>

            </div>
        </footer>
        
    </body>
</html>

