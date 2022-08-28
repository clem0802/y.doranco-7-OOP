<?php 
include_once '../libs/DB.php';
class UserModel extends DB {
    private $email;
    private $username;
    private $password;

    function __construct($email, $password, $username ) {
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
    }
    
    function saveToDB() {
        $signupReq = $this->connect()->prepare("INSERT INTO users (email, username, password) VALUES (?,?,?);");
        $signupReq->execute([$this->email,$this->username,$this->password]);
    }

    function checkIfExist(){
        $checkReq = $this->connect()->prepare("SELECT * FROM users WHERE email=?;");
        $checkReq->execute([$this->email]);
        return $checkReq->rowCount() > 0;
    }

    function checkIfPasswordCorrect(){
        $checkPasswordReq = $this->connect()->prepare("SELECT * FROM users WHERE email=?;");
        $checkPasswordReq->execute([$this->email]);
        $user = $checkPasswordReq->fetch(PDO::FETCH_ASSOC);
        return $user['password'] === $this->password;
    }
    function getUserWithEmail(){
        $getUserReq = $this->connect()->prepare("SELECT * FROM users WHERE email=?;");
        $getUserReq->execute([$this->email]);
        return $getUserReq->fetch(PDO::FETCH_ASSOC);
    }
}
?>