<?php
include_once '../models/UserModel.php';

class UserController {
	private $email;
	private $emailError = "";

	private $username;
	private $usernameError = "";

	private $password;
	private $passwordError = "";

	private $confirmPassword;
	private $confirmPasswordError = "";

	private $userModel;

	public function __construct($email, $password, $username = null, $confirmPassword = null) {
		$this->email = $email;
		$this->password = $password;
		$this->username = $username;
		$this->confirmPassword = $confirmPassword;
		$this->userModel = new UserModel($email, $password, $username, $confirmPassword);
	}
	//BD
	public function saveToDB() {
		$this->userModel->saveToDB();
	}

	public function checkIfExist() {
		if ($this->userModel->checkIfExist()) {
			//Verifier le mot de passe est bon
			return true;
		} else {
			$this->emailError = "Vous n'etes pas inscrit!";
			return false;
		}
	}

	public function checkIfPasswordCorrect() {

		if ($this->userModel->checkIfPasswordCorrect()) {
			return true;
		} else {
			$this->passwordError = 'Le mot de passe inecorrect!';
			return false;
		}
	}

	public function getUserWithEmail() {
		return $this->userModel->getUserWithEmail();
	}

	//Les tests
	public function isSignupValid() {
		$emailIsValid = $this->isEmailValid(); //Retourne vrai si email non vide et non null
		$usernameIsValid = $this->isUsernameValid();
		$passwordIsValid = $this->isPasswordValid();
		$confirmPasswordIsValid = $this->isConfirmPasswordValid();

		//Retourner vrai si toutes les entrées sont correctes
		//Retourner faux, si l'une des entrée est incorrectes
		return $emailIsValid && $usernameIsValid && $passwordIsValid && $confirmPasswordIsValid;
	}

	public function isLoginValid() {

		$emailIsValid = $this->isEmailValid();
		$passwordIsValid = $this->isPasswordValid();
		return $emailIsValid && $passwordIsValid;
	}

	private function isEmailValid() {
		if ($this->email === null || $this->email === "") {
			$this->emailError = "Email ne peut pas etre vide!";
			return false;
		} else {
			return true;
		}
	}

	private function isUsernameValid() {
		if ($this->username === null || $this->username === "") {
			$this->usernameError = 'Pseudo ne peut pas etre vide!';
			return false;
		}
		if (strlen($this->username) < 3) {
			$this->usernameError = 'Pseudo trop court! min. 3.';
			return false;
		}
		return true;
	}

	private function isPasswordValid() {
		if ($this->password === null || $this->password === "") {
			$this->passwordError = 'Mot de passe ne peut pas etre vide!';
			return false;
		}
		if (strlen($this->password) < 6) {
			$this->passwordError = 'Mot de passe trop court! min. 6.';
			return false;
		}
		return true;
	}

	private function isConfirmPasswordValid() {
		if ($this->confirmPassword === null || $this->confirmPassword !== $this->password) {
			$this->confirmPasswordError = 'Les mots de passes ne sont pas identiques';
			return false;
		}
		return true;
	}

	// getters
	public function getEmailError() {
		return $this->emailError;
	}

	public function getUsernameError() {
		return $this->usernameError;
	}

	public function getPasswordError() {
		return $this->passwordError;
	}

	public function getConfirmPasswordError() {
		return $this->confirmPasswordError;
	}
}