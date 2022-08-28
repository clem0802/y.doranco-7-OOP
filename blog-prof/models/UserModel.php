<?php
include_once '../libs/DB.php';
class UserModel extends DB {
	private $email;
	private $username;
	private $password;

	public function __construct($email, $password, $username) {
		$this->email = $email;
		$this->password = $password;
		$this->username = $username;
	}

	public function saveToDB() {
		$signupReq = $this->connect()->prepare("INSERT INTO users (email, username, password) VALUES (?, ?, ?);");
		$signupReq->execute([$this->email, $this->username, $this->password]);
	}

	public function checkIfExist() {
		$checkrequest = $this->connect()->prepare("SELECT * FROM users WHERE email=?;");
		$checkrequest->execute([$this->email]);
		return $checkrequest->rowCount() > 0;
	}

	public function checkIfPasswordCorrect() {
		$checkPasswordRequest = $this->connect()->prepare("SELECT * FROM users WHERE email=?;");
		$checkPasswordRequest->execute([$this->email]);
		$user = $checkPasswordRequest->fetch(PDO::FETCH_ASSOC);
		return $user['password'] === $this->password;
	}

	public function getUserWithEmail() {
		$getUserReq = $this->connect()->prepare("SELECT * FROM users WHERE email=?;");
		$getUserReq->execute([$this->email]);
		return $getUserReq->fetch(PDO::FETCH_ASSOC);
	}
}