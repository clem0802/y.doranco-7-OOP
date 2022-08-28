<?php 
include_once '../Models/UserModel.php';

class UserController {
    private $email;
    private $username;
    private $password;
    private $confirmPassword;
    private $errorEmail = "";
    private $errorUsername = "";
    private $errorPassword = "";
    private $errorConfirmPassword = "";
    private $userModel;

    function __construct($email, $password, $username=null, $confirmPassword=null) {
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->confirmPassword = $confirmPassword;
        $this->userModel = new UserModel($email, $password, $username);
    }
    //BD
    function saveToDB(){
        $this->userModel->saveToDB();
    }
    function checkIfExist(){
        if($this->userModel->checkIfExist()){
            return true;
        }else{
            $this->errorEmail = "Vous n'etes pas inscrit!";
            return false;
        }
    }
    function checkIfPasswordCorrect(){
        if($this->userModel->checkIfPasswordCorrect()){
            return true;
        } else {
            $this->errorPassword = 'Le mot de passe n\'est pas correct';
            return false;
        }
    }
    function checkIfEmailExist(){
        if($this->userModel->checkIfExist()){
            var_dump('test');
            $this->errorEmail = "Ce mail existe déjà";
            return true;
        }else{
            return false;
        }
    }
    function getUserWithEmail(){
        return $this->userModel->getUserWithEmail();
    }
    //Les tests
    function isSignupValid(){
        $emailNotEmpty = $this->email !== null && $this->emailNotEmpty();
        $usernameNotEmpty = $this->username !== null && $this->usernameNotEmpty();
        $passwordNotEmpty = $this->password !== null && $this->passwordNotEmpty();
        $confirmPasswordNotEmpty = $this->confirmPassword !== null && $this->confirmPasswordNotEmpty();
        return  $emailNotEmpty && $usernameNotEmpty && $passwordNotEmpty && $confirmPasswordNotEmpty;
    }
    function isLoginValid(){
        $emailNotEmpty = $this->email !== null && $this->emailNotEmpty();
        $passwordNotEmpty = $this->password !== null && $this->passwordNotEmpty();
        return $emailNotEmpty && $passwordNotEmpty;
    }

    private function emailNotEmpty(){
        if($this->email === ""){
            $this->errorEmail = "L'email ne peut pas être vide!";
            return false;
        } else {
            return true;
        }
    }
    private function usernameNotEmpty(){
        if($this->username === "" || strlen($this->username) < 3 ){
            $this->errorUsername = "Le pseudo doit être d'au minimum de 3 charactères";
            return false;
        } else {
            return true;
        }
    }
    private function passwordNotEmpty(){
        if($this->password === "" || strlen($this->password) < 6 ){
            $this->errorPassword = "Le mot de passe doit être d'au minimum 6 charactères";
            return false;
        } else {
            return true;
        }
    }
    private function confirmPasswordNotEmpty(){
        if($this->confirmPassword !== $this->password){

            $this->errorConfirmPassword = "Les mots de passes ne sont pas identiques!";
            return false;
        } else {
            return true;
        }
    }

    public function getErrorEmail() {
        return $this->errorEmail;
    }
    public function getErrorUsername() {
        return $this->errorUsername;
    }
    public function getErrorPassword() {
        return $this->errorPassword;
    }
    public function getErrorConfirmPassword() {
        return $this->errorConfirmPassword;
    }
   
 }
 ?>