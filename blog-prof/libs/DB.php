<?php
class DB {
	public static function connect() {
		$username = "root";
		$password = "root";
		$connect = new PDO("mysql:host=localhost;dbname=blog2", $username, $password);
		return $connect;
	}
}