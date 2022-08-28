<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bases PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    // balise d'ouverture
    /*
Commentaire
sur plusieurs
lignes
*/
    // commentaire sur une ligne
    echo 'Hello world'; // echo permet de réaliser un affichage sur la page
    echo '<h1>Cours PHP</h1>';

    // PHP : Pre-Processing HTML
    ?>
    <h2>Les variables<?php echo '/déclaration/affectation'; ?></h2>
    <?php

    // Les variables php sont déclarées avec le symbole $ et doivent commencer par une lettre
    $a = 12; // déclaration/affectation 
    $b = 'texte';
    $c = true; // ou false

    echo $a;
    echo "<br>";
    echo gettype($a); // renvoie integer
    echo "<br>";
    echo gettype($b); // renvoie string
    echo "<br>";
    echo gettype($c); // renvoie boolean

    ?>
    <h2>Concaténation</h2>
    <?php

    $prenom = 'Sedra';

    echo 'Bonjour ' . $prenom; // en php, le . est le symbole de concaténation

    echo '<br>';
    echo "Bonjour $prenom<br>"; // les variables sont interprêtées
    echo 'Bonjour $prenom<br>'; // avec ' elles ne le sont pas

    echo 'aujourd\'hui<br>';
    echo "aujourd'hui<br>";

    // exercice : créer deux variables nom et prénom, et afficher sur la page Je m'appelle <nom> <prenom>
    $nom = 'Leclercq';
    $prenom = 'Frédéric';

    echo 'Je m\'appelle ' . $nom . ' ' . $prenom . '<br>';
    echo "Je m'appelle $nom $prenom<br>";

    // concaténation à l'affectation
    $fruit = 'pomme';
    $fruit .= 'fraise'; // le . devant le = signifie que l'on se met à la suite du contenu existant
    echo $fruit . '<br>';

    $nombre1 = 15;
    $nombre1 .= 44; // ici on concatène 2 nombres
    echo $nombre1;

    echo "<hr>";

    $nombre2 = 15;
    $nombre2 += 44;
    echo $nombre2;
    ?>
    <h2>Constantes et constantes magiques</h2>
    <?php

    // define() permet de définir une constante
    define('CAPITALE', 'Paris'); // par convention les constantes sont déclarées en majuscules

    echo CAPITALE; // affichage d'une constante

    // define('CAPITALE','Lyon'); ERREUR, CAPITALE existe déjà et ne peut être redefinie
    // CAPITALE = 'Lyon'; ERREUR, on ne peut pas faire suivre une constante du symbole =

    // PHP contient des constantes dites magiques qui commencent et se terminent par 2 _

    echo "<br>";
    echo __FILE__ . '<br>';
    echo __DIR__ . '<br>';
    echo __LINE__ . '<br>';
    ?>
    <h2>Opérateurs arithmétiques</h2>
    <?php

    $a = 10;
    $b = 2;

    echo $a + $b . '<br>';
    echo $a - $b . '<br>';
    echo $a * $b . '<br>';
    echo $a / $b . '<br>';
    echo $a % $b . '<br>'; // modulo (reste de la division entière)
    echo $a ** $b  . '<br>'; // puissance
    echo pow($a, $b) . '<br>'; // puissance

    $c = 5;
    $d = 3;

    $c += $d;  // $c = $c + $d => c vaut 8
    echo "c vaut $c<br>";

    $c += 1; // c vaut 9
    $c++; // raccourci pour une incrémentation de 1
    $c--;
    $c -= 2; // c vaut 7

    // arrondis
    echo round(2.3654879, 2); // arrondi à l'entier le plus proche
    echo "<br>";
    echo ceil(2.1); // arrondi à l'entier supérieur
    echo "<br>";
    echo floor(2.9); // arrondi à l'entier inférieur
    ?>
    <h2>Structures conditionnelles</h2>
    <?php

    $a = 10;
    $b = 5;
    $c = 2;

    //   BOOLEEN
    if ($a > $b) {
        echo "a est supérieur à b<br>";
    } else {
        echo "a n'est pas supérieur à b<br>";
    }

    // plusieurs conditions 
    // && => ET

    //     VRAI  && VRAI => VRAI
    if ($a > $b && $b > $c) {
        echo "OK pour les deux conditions<br>";
    }

    // || => OU (inclusif)
    //   FAUX ||  VRAI => VRAI    (  VRAI || VRAI => VRAI)
    if ($a == 9 || $b > $c) {
        echo "OK pour au moins une des deux conditions<br>";
    }


    // XOR => OU (exclusif) : seulement une des deux doit être valide
    //  VRAI  XOR VRAI => FAUX
    if ($a == 10 xor $b == 5) {
        echo "ce code ne sera pas executé<br>";
    }

    // if / elseif / else

    if ($a == 8) {
        echo "Cas 1 - a vaut 8 <br>";
    } elseif ($a != 10) {
        echo "Cas 2 - a est différent de 10<br>";
    } else {
        echo "Cas 3 - tout le monde a faux<br>";
    }
    // ------------------------

    $nb1 = 17;
    $nb2 = 4;
    if ($nb1 > $nb2) {
        echo "Nb1 est supérieur à Nb2<br>";
    } elseif ($nb1 < $nb2) {
        echo "Nb1 est inférieur à Nb2<br>";
    } else {
        echo "Nb1 est égal à Nb2<br>";
    }

    $varA = 1; // integer
    $varB = '1'; // string

    if ($varA === $varB) {
        echo "C'est la même chose<br>"; // ne s'affichera avec === car la comparaison s'effectue sur le valeur ET sur le type
    }

    /*
= affectation
== comparaison en valeur
=== comparaison en valeur ET en type
!= différence en valeur
!== différence en valeur OU en type
*/

    // integer(false) !== booleen(false)
    if (0 !== false) {
        echo "C'est différent ! <br>";
    }


    // Fonctions empty() et isset()
    $var1 = 0;
    $var2 = '';

    if (empty($var1)) echo "var1 est vide ou vaut 0 ou n'existe pas<br>";

    // test d'existence
    if (isset($var2)) echo "var2 existe et est définie par une chaine vide<br>";

    if (!isset($var99)) echo "var99 n'existe pas!<br>";


    // ! inverse le booleen résultat de la fonction

    // Formes contractées
    // forme ternaire

    $sexe = 'm';
    echo ($sexe == 'm') ? 'Monsieur' : 'Madame'; // affichage
    $civilite =  ($sexe == 'm') ? 'Monsieur' : 'Madame'; // affectation

    //   ( condition )  ?   si_vrai : si_faux


    echo "<hr>";
    // forme conditionnelle d'existence (PHP 7)

    $departement = 'Seine et Marne';
    $region = 'Ile de France';
    // $pays = 'France';

    // ?? sous entend un test d'existence - isset()
    echo $departement ?? $region ?? $pays ?? 'pas de situation géographique';

    // exemple $zoom
    $zoom = $reponseZoom ?? 15; // si reponseZoom existe on l'utilise sinon on a une valeur par défaut


    // Structure Switch (fonctionne si la variable testée est toujours la même)
    echo "<h3>Structure switch</h3>";
    $jetDes = 4;

    switch ($jetDes) {

        case 1:
        case 2:
        case 3:
            echo "Vous perdez le combat<br>";
            break; // pour sortir du switch, le cas est traité

        case 4:
            echo "Match nul<br>";
            break;

        case 5:
        case 6:
            echo "Vous remportez la victoire<br>";
            break;

        default:
            echo "ce qui se passe par défaut si on ne rentre dans aucun des cas précèdemment cités<br>";
    }


    /*
    Initialiser une variable couleur avec une valeur de votre choix.
    Afficher quelques pierres précieuses qui ont cette couleur
    ex: vert  => emeraude
    */

    echo "<hr>Exercice<br>";

    $couleur = 'jaune';

    switch ($couleur) {
        case 'vert':
        case 'verte':
            $pierres = 'Emeraude';
            break;
        case 'rouge':
            $pierres = 'Rubis';
            break;
        case 'bleu':
            $pierres = 'Saphir, Agate';
            break;
        case 'violet':
            $pierres = 'Améthyste';
            break;
        default:
            $pierres = 'Aucun résultat dans notre collection';
    }

    echo "Voici le résultat de votre recherche : $pierres<br>";

    ?>
    <h2>Fonctions prédéfinies</h2>
    <?php

    echo phpversion() . '<br>'; // affiche la version actuelle de PHP

    // DATES/HEURES
    date_default_timezone_set('Europe/Paris'); //  définir le fuseau horaire
    echo date('l d/m/Y H:i:s') . '<br>';

    setlocale(LC_ALL, 'fr_FR.utf8', 'fra.utf8', 'french_FRANCE.utf8');
    echo strftime('%A %d %B %Y'); // Obsolète à partir de PHP 8.1.0

    echo "<br>Jour de la semaine du naufrage du Titanic : ";
    echo date('l', strtotime('1912-04-14'));
    echo "<br>";
    echo strtotime('1912-04-14');
    // timestamp : Nombre de secondes nous séparant du 01/01/1970 à minuit

    echo "<br>";
    echo time(); // timestamp actuel

    // CHAINES DE CARACTERES
    echo "<hr>Chaines<br>";
    $chaine = 'Ici une phrase';
    echo iconv_strlen($chaine) . ' caractères'; // renvoie la taille de la chaine
    echo "<br>";
    echo substr($chaine, 0, 3); // à partir de la position 0 et sur 3 caractères
    echo "<br>";
    echo substr($chaine, 8); // à partir de la position 8 et jusqu'à la fin
    echo "<br>";
    echo strpos($chaine, 'p'); // renvoie la position où commence la lettre p dans la chaine

    var_dump($chaine); // outil de débug permettant d'obtenir des informations sur la variable ou l'expression testée
    var_dump(strpos($chaine, 'x')); // nous indique qu'on a en resultat le booléen false, car x n'est pas trouvé dans la chaine

    $email = 'marie.durand@free.fr';
    // $email = 'jean-pierre.laroche@gmail.com';

    // Extraire la partie nominative d'une adresse mail ( que l'on ne connait pas à l'avance)    

    echo substr($email, 0, strpos($email, '@'));

    // version avec variable intermediaire
    echo "<br>";
    $position_arobase = strpos($email, '@'); // renvoie 12
    echo substr($email, 0,  $position_arobase);


    // NOMBRES
    //  round(), ceil(), floor()
    echo "<br>";
    echo pi();

    echo "<br>";
    $somme = 25610.4;
    echo number_format($somme, 2, ',', ' ') . '€<br>';

    echo "<br>";
    echo rand(30, 40); // nombre aléatoire compris entre 30 et 40

    echo "<br>";
    echo str_pad(1, 3, '0', STR_PAD_LEFT); // chiffre 1 sur lequel on définit la longueur à 3 caractères et on complete vers la gauche par des '0'

    // DIVERS
    echo "<br>";
    echo uniqid();

    ?>
    <h2>Fonctions utilisateur</h2>
    <?php

    // la fonction salut() attend un paramètre $prenom
    // Le fait de définir une valeur à un paramètre le rend optionnel
    function salut($prenom = 'tout le monde')
    {
        return "Salut $prenom !<br>";
    }

    echo salut('Camille'); // j'appelle la fonction et j'affiche ce qu'elle me retourne
    echo salut('Mathieu'); // on ajoute un argument à la fonction

    echo salut(); // Si j'utilise la fonction sans arguments, la valeur par défaut du paramètre optionnel sera utilisée


    function calculTVA($prixHT, $taux = 20)
    {

        return $prixHT * (1 + $taux / 100);
    }

    echo calculTVA(100) . '€<br>';
    echo calculTVA(350) . '€<br>';
    echo calculTVA(200, 5.5) . '€<br>';


    // On peut typer les paramètres pour 'annoncer' le type attendu
    // On annonce également le type de retour de la fonction avec : float
    function calculTVA2(float $prixHT, float $taux = 20): float
    {
        return $prixHT * (1 + $taux / 100);
    }

    echo  calculTVA2(100);


    echo "<hr>";

    function estMajeur(int $age): bool
    {
        return ($age >= 18);
    }


    $ageUtilisateur = 25;

    if (estMajeur($ageUtilisateur)) {
        echo "Il est majeur !<br>";
    } else {
        echo "Il est mineur!<br>";
    }

    // Espaces global et local
    $animal = 'Loup'; // on est dans l'espace global

    function afficheAnimal()
    {
        $animal = 'Lion'; // on est dans l'espace local
        return $animal;
    }

    echo $animal . '<br>'; // on affiche loup
    echo afficheAnimal()  . '<br>'; // on affiche lion
    echo $animal . '<br>'; // on affiche loup de nouveau


    $pays = 'France'; // variable globale

    function affichePays()
    {

        global $pays; // le mot clé global rend accessible une variable globale dans l'espace local de la fonction

        // une constante définie dans l'espace global est accessible partout (ex: CAPITALE)
        return $pays . ' ' . CAPITALE;
    }

    echo affichePays() . '<br>';
    $pays = 'Japon'; // ce sera la variable globalisée dans la fonction
    echo affichePays() . '<br>';

    ?>
    <h2>Structures itératives : boucles</h2>
    <?php

    /*
        1 - situation de départ
        2 - condition qui fait tourner la boucle
        3 - incrémentation qui fait évoluer la situation de départ
    */

    // boucle WHILE (tant que)

    $i = 1; /* point 1  */

    while ($i <= 5) { /* point 2 */
        echo "$i ";
        $i++; // $i = $i + 1  point 3       
    }

    echo "<hr>";

    // boucle FOR (pour)
    // for(point1; point2; point3)
    for ($i = 1; $i <= 5; $i++) {
        echo "$i ";
    }

    echo "<hr>";
    /*
        Compter de 10 à 100 de 10 en 10 avec la boucle de votre choix
        resultat attendu : 10 20 30 40 50 60 70 80 90 100
    */

    $i = 10;
    while ($i <= 100) {
        echo "$i ";
        $i += 10;
    }
    echo "<hr>";

    for ($i = 10; $i <= 100; $i += 10) {
        echo "$i ";
    }


    echo "<hr>";
    $anneecourante = date('Y'); // année retournée par la fonction date

    ?>
    <select>

        <?php

        for ($annee = $anneecourante - 18; $annee >= ($anneecourante - 118); $annee--) {
        ?>

            <option><?php echo $annee; ?></option>

        <?php
        }
        ?>

    </select>
    <?php

    // Boucles imbriquées
    // ex : tableau à 2 dimensions


    // Ecriture alternative
    if ($a > 5) :
    // code
    else :
    // code
    endif;

    for ($i = 1; $i <= 10; $i++) :

    endfor;

    ?>
    <table>
        <?php
        for ($ligne = 1; $ligne <= 8; $ligne++) :
        ?>
            <tr>
                <?php
                for ($colonne = 1; $colonne <= 8; $colonne++) :
                ?>
                    <td></td>
                <?php
                endfor;
                ?>
            </tr>
        <?php
        endfor;
        ?>
    </table>
    <h2>Inclusion de fichiers</h2>
    <?php

    echo "Première inclusion : ";
    include('fichier.php');
    echo "Deuxieme inclusion : ";
    include_once('fichier.php'); // inclus une seule fois le fichier

    echo "<br>Troisième inclusion : ";
    require('fichier.php');
    echo "Quatrième inclusion : ";
    require_once('fichier.php'); // requiert une seule fois le fichier

    /* en cas d'erreur :
        include affiche un avertissement et continue l'exécution du script PHP
        require affiche un avertissement et interrompt l'exécution du script
    */
    ?>
    <h2>Les tableaux de données : Array</h2>
    <?php

    // déclaration
    $tableau1 = ['element1', 'element2', 'element3'];
    //               0          1           2
    var_dump($tableau1);

    echo $tableau1[1];

    $heros = array('Batman', 'Catwoman', 'Flash', 'Wonder Woman');
    var_dump($heros);
    echo $heros[2] . '<br>';

    // $nb_heros = count($heros); // renvoie le nbre d'elements
    $nb_heros = sizeof($heros);  // renvoie le nbre d'elements
    echo "Il y a $nb_heros heros<br>";

    $heros[] = 'Aquaman'; // ajout d'un élément    
    array_push($heros, 'Superman'); // ajout d'un ou plusieurs éléments

    var_dump($heros);
    // Parcours du tableau
    ?>
    <ul>
        <?php
            for($i=0; $i < sizeof($heros); $i++) :
                ?>
                <li><?php echo $heros[$i] ?></li>
                <?php
            endfor;
        ?>
    </ul>
    <?php

    // Tableau associatif
    $personnage = array(
        "nom" => "Wayne",
        "prenom" => "Bruce",
        "surnom" => "Batman",
        "vehicule" => "Batmobile"
    );
    echo $personnage["prenom"]; // index alphabétique

    echo "<h3>Boucle foreach</h3>";
    // Boucle foreach()
    foreach($personnage as $index => $valeur){
        echo "$index : $valeur <br>";
    }

    foreach($personnage as $valeur){
        echo "$valeur <br>";
    }

    // Tableau de données à deux dimensions
    $individus = array(
        0 => array(
                "prenom" => "Rayann",
                "nom" => "Hadid"
        ),
        1 => array(
                "prenom" => "Mathieu",
                "nom" => "Loire"
        ),
        2 => array(
                "prenom" => "Sana",
                "nom" => "Toumi"
        )
    );
    
    echo $individus[1]["prenom"]; // affiche Mathieu
    echo "<br>";
    echo $individus[0]['nom']; // affiche Hadid

    echo "<hr>";
    $position_flash = array_search('Flash',$heros);
    echo "Flash se trouve à la position $position_flash<br>";

    var_dump( array_search('Joker',$heros) ); // si non trouvé, la fonction array_search renvoie false

    var_dump( in_array('Batman',$heros))    ;  // in_array() verifie qu'un element est présent dans le tableau et renvoie un booléen
    var_dump( in_array('Joker',$heros))    ; 

    // implode(), explode() , list()
    // js: implode => join
    //     explode => split

    // implode() transforme un tableau en chaine en précisant un séparateur
    echo implode(', ',$heros);
    
    // explode() transforme une chaine en tableau à partir d'un séparateur
    $date = '2022-08-23';
    $resultat = explode('-',$date);
    var_dump($resultat);

    asort($heros); // tri
    var_dump($heros);


    list($annee,$mois,$jour) = explode('-',$date);
    echo "$jour/$mois/$annee";

    // exemple ou j'ignore le premier élément
    list(,$mois,$jour) = explode('-',$date);

    echo "<hr>";
    list('prenom' => $prenom) = array('prenom' => 'Farid');
    echo "Je récupère $prenom";
    
    echo "<hr>";

    $index_au_hasard = array_rand($heros); // renvoie un index au hasard
    echo "L'index récupéré est $index_au_hasard<br>";
    echo 'ça correspond à ' . $heros[$index_au_hasard] . '<br>';

    echo "<hr>";
    /*
         Créer un tableau identité, avec votre nom,prenom,email
         afficher vos informations avec la technique de votre choix (for(), foreach(), implode(), list(),...)
    */
    
    $identite = [
        "nom" => "Dupond",
        "prenom" => "Jean",
        "email" => "jean.dupond@orange.fr"
    ];

    // solution 1
    foreach($identite as $index => $valeur){
        echo "$index:  $valeur<br>";
    }
    // solution 2
    echo implode('<br>',$identite);

    // solution 3
    list('nom' => $nom,'prenom' => $prenom, 'email' => $email) = $identite;
    echo "<br>$nom, $prenom, $email<br>";

    ?>
    <h2>Les Objets</h2>
    <?php
    
    /*
        Un objet est caractérisé par :
            - des propriétés (attributs) => variables
            - des méthodes (fonctionnalités) => fonctions
    */

    //  classe : plan de fabrication
    class Clio{

        // propriétés
        public $marque = 'Renault';
        public $modele = 'Clio';
        public $couleur; 
        public $motorisation; 

        // Constructeur
        public function __construct($couleur_voulue, $motorisation_voulue){
            $this->couleur = $couleur_voulue;
            $this->motorisation = $motorisation_voulue;
            // $this désigne l'objet qui fait appel à cette méthode
        }

        // méthodes
        public function demarrer(){
            // traitement
            return "Je démarre...";
        }
        public function klaxonner(){
            // traitement
            return "Je klaxonne...";
        }
    }

    $clio1  = new Clio('rouge','essence'); // new permet d'instancier la classe et de "produire" un objet
    var_dump($clio1);
    var_dump(get_class_methods($clio1));
    
    $clio2 = new Clio('noire','electrique');
    var_dump($clio2);
    var_dump(get_class_methods($clio2));

    echo 'Ma clio 1 est de couleur ' . $clio1->couleur . '<br>'; // la -> permet d'atteindre une propriété depuis l'objet
                                                                 // equivalent js : clio1.couleur
    echo 'Ma clio 2 est de couleur ' . $clio2->couleur . '<br>';

    echo $clio1->demarrer(); // la -> permet d'exécuter une fonction depuis l'objet (méthode)
                             // equivalent js : clio1.demarrer() 


    // PHP contient déjà un certain nombre de classes disponibles
    $madate = new DateTime(); // DateTime est une classe de PHP
    var_dump($madate);
    var_dump(get_class_methods($madate));
    // var_dump(get_class_methods('DateTime'));

    echo $madate->format('l d/m/Y');

    $datenaissance = new DateTime('2000-01-01 14:30:00');

    $difference = $madate->diff($datenaissance); // la méthode diff produit un autre objet de type DateInterval
    var_dump($difference);

    echo 'La personne née le 01 janvier 2000 a ' . $difference->y . ' ans et ' . $difference->m.' mois';
    
    

    // balise de fermeture
    ?>

</body>

</html>