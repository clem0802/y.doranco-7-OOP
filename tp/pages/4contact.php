<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootstrap -->
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
            crossorigin="anonymous"
        />

        <title>PHP-OOP8 (CONTACT)</title>
        <meta name="description" content="PHP-OOP8 (functions)">
        <link rel="shortcut icon" href="https://www.onespan.com//sites/default/files/blog/images/logo-php-adbac78231.png">
    </head>

    <body class="m-2">
        <?php 
        include_once '../components/navbar.php';
        ?>

        <h1>PHP-OOP8-Samy (IV) Functions</h1>
         <!-- (myPATH) http://localhost/y.doranco-7-OOP/projet/pages/4contact.php -->


        <!-- (1) Basic Functions -->
        <!-- ----------------------------------------- -->
        <section>
            <?php 
                echo "<h3>(1) Basic Functions</h3>";
                
                function afficheBonjour(){
                    echo "<p>Hello,</p>";
                    echo "<p>I am a function.</p>";
                    echo "<p>And you?</p>";
                }
                afficheBonjour();
                echo '<p>DU CODE AU MILIEU</p>';
                afficheBonjour();
                echo "<hr>";
            ?>
        </section>


        <!-- (2) Functions + parameters -->
        <!-- (3) EXO1, 5 functions, +-*/ -->
        <!-- ----------------------------------------- -->
        <section>
            <?php 
                echo "<h3>(2) Functions + parameters</h3>";
                // mon déclare une function qui prend un paramètre appelé $text
                function affiche($text,){
                    echo '<p>' . $text . '</p>';
                }

                // on exécute la function en passant en argument la chaîne de caratères
                affiche("Je décide de la valeur des paramètres à l'exécution de la function");
                affiche("Une autre phrase encore");
                echo "<hr>";


                function afficheUser($email, $username, $age){
                    echo "
                        <div>
                            <h3>$email</h3>
                            <p>$username, vous avez $age ans.</p>
                        </div>
                    ";
                }
                afficheUser("sam.djm93@gmail.com", "Samy", 28);
                afficheUser("john.doe@gmail.com", "John", 100);
                echo "<hr>";
            ?>


            <!-- (3) EXO, 5 functions -->
            <!-- ----------------------------------------- -->
            <?php
            // créer 5 fonctions qui prennent deux paramètres a et b
            // (1) add: 
            // (2) sub:
            // (3) mul:
            // (4) div:
            // (5) mod:
                echo "<h3>(3) EXO, 5 functions</h3>";
                function add($a,$b){
                    echo 'Add: $a + $b = ' . ($a + $b);
                    echo "<br>";
                }
                add(4,8);

                function sub($c,$d){
                    echo 'Sub: $c - $d =  ' . ($c - $d);
                    echo "<br>";
                }
                sub(9,3);

                function mul($e,$f){
                    echo 'Mul: $e * $f =  ' . ($e * $f);
                    echo "<br>";
                }
                mul(3,5);

                function div($g,$h){
                    echo 'Div: $g / $h =  ' . ($g / $h);
                    echo "<br>";
                }
                div(22,2);

                function mod($i,$j){
                    echo 'Mod: $i % $j =  ' . ($i % $j);
                    echo "<br>";
                }
                mod(14,3);
                echo "<hr>";
            ?>
        </section>


        <!-- (4) EXO2 afficher an array FRUITS -->
        <!-- ----------------------------------------- -->
        <section>
            <?php 
                echo "<h3>(4) EXO2 afficher an array</h3>";
                // 1-créer une fonction afficheTab qui prend en paramètre un array, et affiche chaque élément de ce array dans un paragraphe
                // 2-déclarer un array, et utiliser la function afficheTab sur ce array

                $fruits = ['groundberry', 'raspberry', 'orange', 'banana', 'apple', 'lemon'];
                function afficheTab($fruits){
                    for($i=0; $i<count($fruits); $i++){
                        echo '<p>'. $fruits[$i] .'</p>';
                    }
                    echo "<hr>";

                    // foreach ($fruits as $key => $value){
                    //     echo '<p>' . $value . '</p>'
                    // }
                }
                afficheTab($fruits);

                echo "<hr>";
            ?>
        </section>


        <!-- (5) EXO3, afficher 1 table Multiplication -->
        <!-- ----------------------------------------- -->
        <section>
            <?php 
                echo "<h3>(5) EXO3 afficher une table de multiplication</h3>";
                // 1-créer une fonction qui prend un nombre en paramètre et affiche la table de multiplication (entre 0 et 10)
                // 2-utiliser cette fonction avec: 5 et 12

                // (Teacher Samy's Solution)
                function tableMul($number){
                    for($i=0; $i<=10; $i++){
                        echo "<p>$number x $i = " . ($i * $number) . "</p>";
                    }
                    echo "<hr>";
                }
                TableMul(5);
                TableMul(12);
                echo "<hr>";
                echo "<hr>";

                // ******************************************
                // (My Solution)
                $num = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
                function multiTab($num){
                    for($i=0; $i<count($num); $i++){
                        for($j=0; $j<count($num); $j++){
                            // echo $i*$j;
                            echo "<p class='row justify-content-center align-items-center'>
                            $i x $j = " . ($i * $j) . "</p>";
                            echo "<br>";
                        }
                        echo "<hr>";
                    }
                    echo "<hr>";
                }
                multiTab($num);

            ?>
        </section>


        <!-- (6) RETURN of a Function -->
        <!-- ----------------------------------------- -->
        <section>
            <?php 
                echo "<h3>(6) RETURN of a Function</h3>";

                function createP($text){ // SAM !!!
                    $lePara = "<p>$text</p>"; // <p>SAM !!!</p>
                    return $lePara; // retourner la variable -> <p>SAM !!!</p>
                }

                $para1 = createP("SAM !!!");
                echo $para1;
                echo createP('1er paragraphe');
                echo createP('2ème paragraphe');
                // f(x) = 2x + 5
                // f(2) = 2x2 + 5 = 9
                // une fonction peut être paramétrée

                echo "<hr>";
            ?>
        </section>

        <!-- (7) Function, the AVERAGE -->
        <!-- créer une fonction qui prend un array de nombre, elle retourne la moyenne -->
        <!-- [12, 20, 15] -->
        <!-- 12 + 20 + 15 = somme -->
        <!-- retourner somme / loop.length -->

        <!-- Loop1: $somme=0, $note=12 -->
        <!-- Loop2: $somme=12, $note=20 -->
        <!-- Loop3: $somme=32, $note=15 -->
        <!-- Loop6: $somme=62, $note=13 -->
        <!-- ... ... -->
        <!-- $somme= 75 / 6 = 12.5 -->


        <!-- (7) Function, the AVERAGE -->
        <!-- ----------------------------------------- -->
        <section>
            <?php 
                echo "<h3>(7) Function, the AVERAGE</h3>";
                function moyenne($notes){
                    $somme = 0;
                    foreach($notes as $key => $note){
                        $somme = $somme + $note;
                    }
                    return $somme / count($notes);
                }
                $lesNotes = [12, 20, 15, 8, 7, 13];
                echo moyenne($lesNotes);

                echo "<hr>";
                echo "<br>";
                echo "<br>";
            ?>
        </section>
        
    </body>
</html>


 
