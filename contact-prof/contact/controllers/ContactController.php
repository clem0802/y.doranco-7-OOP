<?php
include_once './models/ContactModel.php';
class ContactController {
	private $email;
	private $emailError;

	private $nom;
	private $nomError;

	private $prenom;
	private $prenomError;

	private $message;
	private $messageError;

	private $contactModel;

	public function __construct($email, $nom, $prenom, $message) {
		$this->email = $email;
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->message = $message;

		$this->contactModel = new ContactModel($email, $nom, $prenom, $message);
	}

	//UTILISATION DU MODEL
	public function saveToDB() {
		$this->contactModel->saveToDb();
	}

	public static function getMessages() {
		return ContactModel::fetchAll();
	}

	//VALIDATION DES ENTREES
	public function isContactValid() {
		$isEmailValid = $this->isEmailValid();
		$isNomValid = $this->isNomValid();
		$isPrenomValid = $this->isPrenomValid();
		$isMessageValid = $this->ismessageValid();
		return $isEmailValid && $isNomValid && $isPrenomValid && $isMessageValid;
	}

	private function isEmailValid() {
		if ($this->email === null || $this->email === "") {
			$this->emailError = "Email ne peut pas etre vide!";
			return false;
		} else {
			return true;
		}
	}
	private function isNomValid() {
		if ($this->nom === null || $this->nom === "") {
			$this->nomError = "Nom ne peut pas etre vide!";
			return false;
		} else {
			return true;
		}
	}

	private function isPrenomValid() {
		if ($this->prenom === null || $this->prenom === "") {
			$this->prenomError = "Prenom ne peut pas etre vide!";
			return false;
		} else {
			return true;
		}
	}

	private function isMessageValid() {
		if ($this->message === null || $this->message === "") {
			$this->messageError = "Message ne peut pas etre vide!";
			return false;
		} else {
			return true;
		}
	}

	//GETTERS
	public function getEmailError() {
		return $this->emailError;
	}

	public function getNomError() {
		return $this->nomError;
	}

	public function getPrenomError() {
		return $this->prenomError;
	}

	public function getMessageError() {
		return $this->messageError;
	}

	public function getEmail() {
		return $this->email;
	}

	public function getNom() {
		return $this->nom;
	}

	public function getPrenom() {
		return $this->prenom;
	}

	public function getMessage() {
		return $this->message;
	}
}