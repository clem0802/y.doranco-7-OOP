<?php
include_once './libs/DB.php';
class ContactModel extends DB {
	private $email;
	private $nom;
	private $prenom;
	private $message;

	public function __construct($email, $nom, $prenom, $message) {
		$this->email = $email;
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->message = $message;
	}

	public function saveToDB() {
		$addMessage = $this->connect()->prepare('INSERT INTO messages (email, nom, prenom, message) VALUES (?, ?, ?, ?)');
		$addMessage->execute([$this->email, $this->nom, $this->prenom, $this->message]);
		$addMessage = null;
	}

	public static function fetchAll() {
		$getMessages = self::connect()->query('SELECT * FROM messages');
		$getMessages->execute();
		return $getMessages->fetchAll(PDO::FETCH_ASSOC);
	}

}