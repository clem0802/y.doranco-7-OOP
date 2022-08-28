<?php 
include_once '../models/UserModel.php';

    class UserController{
        private $email;
        private $emailError = "";

        private $password;
        private $passwordError = "";

        private $username;
        private $usernameError = "";

        private $confirmPassword;
        private $confirmPasswordError = "";

        private $userModel;

        // "null" => ça devient "optionnel" pour usernmae et confirmPassword
        public function __construct($email, $password, $username=null, $confirmPassword=null){
            $this->email = $email;
            $this->password = $password;
            $this->username = $username;
            $this->confirmPassword = $confirmPassword;
            $this->userModel = new UserModel($email, $password, $username, $confirmPassword);
        }

        // DB
        public function saveToDB(){
            $this->userModel->saveToDB();
        }

        // checkIfExist
        public function checkIfExist(){
            if($this->userModel->checkIfExist()){
                // vérifier si le mdp est bon
                return true;
            } else{
                $this->emailError = "Vous n'êtes pas inscrit!";
                return false;
            }
        }

        // vérifier le MDP
        public function checkIfPasswordCorrect(){
            if($this->userModel->checkIfPasswordCorrect()){
                return true;
            } else{
                $this->passwordError = 'le mot de passe est incorrect';
                return false;
            }
        }

        // vérifier si Email existe déjà
        public function checkIfEmailExist(){
            if($this->userModel->checkIfExist()){
                var_dump('test');
                $this->emailError = "Cet email existe déjà";
                return true;
            } else{
                return false;
            }
        }


        public function getUserWithEmail(){
            return $this->userModel->getUserWithEmail();
        }


        // CONNEXION (tests)
        public function isSignupValid(){
            $emailIsValid = $this->isEmailValid(); // return vrai si email non vide et non null
            $usernameIsValid = $this->isUsernameValid();
            $passwordIsValid = $this->isPasswordValid();
            $confirmPasswordIsValid = $this->isConfirmPasswordValid();

            // retourner vrai si les entrées sont correctes
            // retourner faux, si l'une des entrées est incorrecte
            return $emailIsValid && $usernameIsValid && $passwordIsValid && $confirmPasswordIsValid;
        }

        // LOGIN
        public function isLoginValid(){
            // var_dump($this->email);
            $emailIsValid = $this->isEmailValid();
            $passwordIsValid = $this->isPasswordValid();
            return $emailIsValid && $passwordIsValid;
        }

        private function isEmailValid(){
            if ($this->email === null || $this->email === ""){
                $this->emailError = "Email ne peut pas être vide!";
                return false;
            } else{
                return true;
            }
        }


        private function isUsernameValid(){
            if ($this->username === null || $this->username === ""){
                $this->usernameError = "Pseudo ne peut pas être vide!";
                // error = username ne peut pas être vide!
                return false;
            } 
            if (strlen($this->username) < 3){
                $this->usernameError = "Pseudo trop court! min. 3";
                // error = username trop court! min 3
                return false;
            } 
            return true;
        }

        private function isPasswordValid(){
            if ($this->password === null || $this->password === ""){
                $this->passwordError = "Mdp ne peut pas être vide!";
                // error = le mdp ne peut pas être vide
                return false;
            } 
            if (strlen($this->password) < 6){
                $this->passwordError = "Mdp trop court! min. 6";
                // error = le mdp trop court: min 6
                return false;
            } 
            return true;
        }

        private function isConfirmPasswordValid(){
            if ($this->confirmPassword === null || $this->confirmPassword !== $this->password){
                $this->confirmPasswordError = "Les mdp ne sont pas identiques!";
                // error = les mdp ne sont pas identiques
                return false;
            } 
            return true;
        }


        // GETTERS
        public function getEmailError(){
                return $this->emailError;
        }
        public function getUsernameError(){
                return $this->usernameError;
        }
        public function getPasswordError(){
                return $this->passwordError;
        }
        public function getConfirmPasswordError(){
                return $this->confirmPasswordError;
        }
    }
?>