<?php
session_start();
include_once '../controllers/UserController.php';

// Utiliser le controller pour:
//1- Tester les entrées: Rediriger le user vers auth.php avec les erreurs a afficher.
//2- Enregistre l'utilisateur dans DB: redirige l'utilisateur vers auth.php#login

$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

$username = isset($_POST['username']) ? $_POST['username'] : null;
$confirmPassword = isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : null;

//Exercice 1:
//Créer le fichier /controllers/UserController.php.
//Créer la classe avec les attributs et le constructeur.
//Envoyer le contenu du fichier: UserControler.php
$userController = new UserController($email, $password, $username, $confirmPassword);

//Exercice 2:
// Créer une methode pour tester les entrées:
// email: Non vide et non null
// username: Non vide, non null et sueprieur a 3
// password: Non vide, non null et sup a 6.
// confirmPassword: Non vide, non null et egal a password

if ($userController->isSignupValid()) {
	//Enregistrer l'utilisateur
	$userController->saveToDB();
	header('Location: ../auth.php');
} else {
	$_SESSION['signup'] = [
		'emailError' => $userController->getEmailError(),
		'usernameError' => $userController->getUsernameError(),
		'passwordError' => $userController->getPasswordError(),
		'confirmPasswordError' => $userController->getConfirmPasswordError(),
	];
	header('Location: ../auth.php');
}