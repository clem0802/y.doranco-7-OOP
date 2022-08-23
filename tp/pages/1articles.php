<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootstrap -->
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"
        />

        <title>PHP-OOP8 (types & variables)</title>
        <meta name="description" content="PHP-OOP8 (types & variables)">
        <link rel="shortcut icon" href="https://www.onespan.com//sites/default/files/blog/images/logo-php-adbac78231.png">
    </head>

    <body>

        <?php 
            include_once "../components/navbar.php"; 
        ?>
        <h1>PHP-OOP8-Samy (I) Types & Variables</h1>
        <!-- (myPATH) http://localhost/y.doranco-7-OOP/projet/pages/1cards.php -->


        <?php
            echo "<h3>(1) STRING</h3>";
            // (1) STRING 
            // Ajouter du texte dans le fichier HTML final 
            echo "<span>Hello: Types & Variables</span><br>";

            // Déclarer-Définir une variable nommée hello qui possède un type STRING
            $hello = "Salut! Je suis un script PHP!";

            // Afficher dans notre fichier la valeur de la variable hello
            echo $hello;

            // Concaténer 3 chaînes de caractères pour en faire une seule
            echo '<h4>' . $hello . " " . "Samy :)" . '</h4>';

            // Les double guillemets permettent de directement lire la valeur d'une variable sans concaténation
            echo "<h6>$hello</h6>";
            echo "<hr>";


            // *********************************************
            // (2) STRING (phrases)
            echo "<h3>(2) STRING (phrases)</h3>";
            echo '<p>' . "Samy" . " " . $hello . '</p>';
            echo '<p>' . $hello . '</p>';

            // Réaffecter une variable
            $hello = "On peut réaffecter une nouvelle valeur à une variable";
            // la valeur de la variable hello a changé
            echo "<p>$hello</p>";
            echo '<br>';

            // EXO 1
            // Déclarer deux variables: nom et prenom
            $nom = "TAN";
            $prenom = "Clémence";
            // Afficher la phrase: Salut, (nom) (prenom), comment allez-vous? 
            echo '<p>Salut, ' . $nom . ' ' . $prenom . ', comment allez-vous?</p>';
            echo "<p>Salut, $nom $prenom, comment allez-vous?</p>";

            $name = 'idomar';
            $firstname = 'fatiha';
            echo '<p>' . $name . " " . $firstname . " " . ", comment allez-vous?</p>";
            echo "<hr>";


            // *********************************************
            // (3) les nombres / Numbers
            echo "<h3>(3) NUMBERS</h3>";
            $count = 12;
            $pi = 3.14;
            $countPlusCinq = $count + 10;
            $countPlusPi = $count + $pi;
            
            // on utilise le var_dump() pour avoir de l'info sur une variable
            var_dump($count); echo "<br>";
            var_dump($pi); echo "<br>";
            var_dump($prenom); echo "<br>";
            echo "<p>$countPlusCinq</p>";
            echo "<p>$countPlusPi</p>";
            echo "<hr>";


            // *********************************************
            // (4) les Opérations
            echo "<h3>(4) OPERATIONS</h3>";
            $a = 64;
            $b = 8;
            $x = 125;
            echo "<p>a = 64</p>";
            echo "<p>b = 8</p>";

            echo '<p>Addition: ' . ($a + $b) .'</p>'; // 72
            echo '<p>Soustraction: ' . ($a - $b) .'</p>'; // 56
            echo '<p>Multiplication: ' . ($a * $b) .'</p>'; // 512
            echo '<p>Division: ' . ($a / $b) .'</p>'; // 8
            echo '<p>Modulo: ' . ($a % $b) .'</p>'; // 0
            echo '<p>Puissance: ' . ($a ** $b) .'</p>'; // 281474976710656
            echo '<p>racine carrée: ' . (sqrt($a)) .'</p>'; // 8
            echo '<p>racine cubique: ' . (pow($x, 1/3)) .'</p>'; // 5
            echo "<hr>";


            $nbOeufs = 1; // 1
            $nbOeufs = $nbOeufs + 5; // 6
            echo "<p>nombre d'oeufs = $nbOeufs</p>";
            $nbOeufs = $nbOeufs - 2; // 4
            echo "<p>nombre d'oeufs = $nbOeufs</p>";


            // Alternatives:
            $nbOeufs += 5; // 9
            echo "<p>nombre d'oeufs = $nbOeufs</p>";
            $nbOeufs *= 3; // 27
            echo "<p>nombre d'oeufs = $nbOeufs</p>";
            echo "<hr>";
        ?>


        <?php
            // *********************************************
            // (5) BOOLEAN 
            echo "<h3>(5) BOOLEAN (jour-2)</h3>";
            $vrai = true;
            $faux = false;

            echo "<hr>";
        ?>


        <?php
            // error_reporting(-1);
            // echo "<hr>";
            // c'est une fonction qui permet d'afficher les infos sur PHP
            // phpinfo()

            // C:\MAMP\bin\php\php8.0.1/php.exe
            // Mettre en forme document avec
            // configurer le formatteur (par défaut)
            // settings: F5
            // format save
            // COCHER Format On Save
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
        ?>

    </body>
</html>