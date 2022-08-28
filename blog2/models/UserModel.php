<?php 
include_once '../libs/DB.php';

    class UserModel extends DB {
        private $email;
        private $password;
        private $username;
        

        public function __construct($email,$password,$username){
            $this->email = $email;
            $this->password = $password;
            $this->username = $username;
        }

        public function saveToDB(){
            $signupReq = $this->connect()->prepare("INSERT INTO users (email, username, password) VALUES (?, ?, ?);");
            $signupReq->execute([$this->email, $this->username, $this->password]);
        }

        // checkIfExist
        public function checkIfExist(){
            $checkReq = $this->connect()->prepare("SELECT * FROM users WHERE email=?;");
            $checkReq->execute([$this->email]);
            return $checkReq->rowCount() > 0;
        }

        public function checkIfPasswordCorrect(){
            $checkPasswordReq = $this->connect()->prepare("SELECT * FROM users WHERE email=?;");
            $checkPasswordReq->execute([$this->email]);
            $user = $checkPasswordReq->fetch(PDO::FETCH_ASSOC);
            return $user['password'] === $this->password;
            // var_dump($user);
        }

        public function checkIfEmailExist(){
            $checkEmailReq = $this->connect()->prepare("SELECT * FROM users WHERE email=?;");
            $checkEmailReq->execute([$this->email]);
            return $checkEmailReq->rowCount() > 0;
        }

        public function getUserWithEmail(){
            $getUserReq = $this->connect()->prepare("SELECT * FROM users WHERE email=?;");
            $getUserReq->execute([$this->email]);
            return $getUserReq->fetch(PDO::FETCH_ASSOC);
        }
    }
?>