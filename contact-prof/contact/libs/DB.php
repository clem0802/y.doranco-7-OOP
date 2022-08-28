<?php
class DB {
	public static function connect() {
		$username = "root";
		$password = "root";
		//le catch execute du code si un probleme survient dans le bloc try
		try {
			$connect = new PDO("mysql:host=localhost;dbname=contact", $username, $password);
			return $connect;
		} catch (PDOException $exc) {
			echo 'un probleme est survenu...';
		}
	}
}