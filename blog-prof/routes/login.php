<?php
session_start();
include_once '../controllers/UserController.php';

// Utiliser le controller pour:
//1- Tester les entrées: Rediriger le user vers auth.php avec les erreurs a afficher.
//2- Verifier que l'utilisateur s'est deja inscrit.
//3- Mettre dans la session son id.

$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

$userController = new UserController($email, $password);

if ($userController->isLoginValid()) {

	//aller chercher l'utilisateur avec l'email pour tester si il existe

	if ($userController->checkIfExist()) {

		if ($userController->checkIfPasswordCorrect()) {
			//Mettre l'id dans session
			$user = $userController->getUserWithEmail();
			$_SESSION['user'] = [
				'id' => $user['id'],
				'email' => $user['email'],
				'username' => $user['username'],
				'avatar' => $user['avatar'],
			];
			header('Location: ../profil.php');
		} else {
			//Mettre l'erreur: Mot passe incorrect!
			$_SESSION['login'] = [
				'passwordError' => $userController->getPasswordError(),
			];
			header('Location: ../auth.php');
		}
	} else {
		//Afficher l'erreur: L'email n'existe, inscrivez vous!
		$_SESSION['login'] = [
			'emailError' => $userController->getEmailError(),
		];
		header('Location: ../auth.php');
	}
} else {

	$_SESSION['login'] = [
		'emailError' => $userController->getEmailError(),
		'passwordError' => $userController->getPasswordError(),
	];
	header('Location: ../auth.php');
}