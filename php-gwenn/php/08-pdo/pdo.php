<?php


// PDO : PHP DATA OBJECT

// Connexion avec la BDD

$pdo = new PDO(
    'mysql:host=localhost;charset=utf8;dbname=portfolio', // DSN Data Source Name
    'root', // user
    '', // mdp
    array(
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // tableau associatif à la lecture des lignes
    )
);


$statement = $pdo->query("DESC users");

// $ligne = $statement->fetch();
// var_dump($ligne);

while( $ligne = $statement->fetch() ){
    echo $ligne['Field'] . "<br>";
}


$user1 = array(
    'login' => 'Marie',
    'mdp' => 'secret2022',
    'email' => 'marie@gmail.com'
);

$statement = $pdo->prepare("INSERT INTO users VALUES (NULL,:login,:mdp,:email)");
// $statement->execute(array(
//     'login' => $user1['login'],
//     'mdp' => password_hash($user1['mdp'], PASSWORD_DEFAULT), // cryptage du mot de passe
//     'email' => $user1['email']
// ));

$statement = $pdo->prepare("DELETE FROM users WHERE id_user = :id_user");
$statement->execute(array(
    'id_user' => 2
));


$statement = $pdo->prepare("SELECT * FROM users");
$statement->execute();

$donnees = $statement->fetchAll(); // on décharge les lignes dans un tableau à 2 dimensions
var_dump($donnees);

// je parcoure le tableau avec une boucle foreach
foreach( $donnees as $ligne){

    echo $ligne['login']. '<br>';

}
