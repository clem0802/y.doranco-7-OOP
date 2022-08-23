<?php 
    class User{
        // propriétés-attribut
        private $userName;
        private $email;
        private $password;

        // le constructeur
        public function __construct($userName, $email, $password){
            $this->userName = $userName;
            $this->email = $email;
            $this->password = $password;
        }

        // les méthodes instanciation
        public function renderUser(){
            echo '<div>
                    <h4>username: ' . $this->userName . '</h4>
                    <p>email: ' . $this->email . '</p>
                    </div>';
        } 

        
        // ---------------------------(Jour5, aprèm)
        // méthodes GETTERS:
        // (les accesseurs) GETTER => pr récupérer la valeur des attributs
        public function getUserName(){
            return $this->userName;
        }
        public function getEmail(){
            return $this->email;
        }

        // public function getPassword(){
        //     return $this->password;
        //     echo "<br>";
        // }


        // méthodes SETTERS:
        // (les mutateurs) SETTER => pr modifier la valeur des attributs
        public function setUserName($newUserName){
            $this->userName = $newUserName;
            return $this;
        }
        public function setEmail($newEmail){
            $this->email = $newEmail;
            return $this;
        }

        // Méthodes statiques
        public static function sayHello(){
            $test = "test";
            echo 'Salut je suis la classer User';
            return $test;
            // cette méthode ne peut pas accéder aux attributs de la classe
            // mais elle n'a pas besoin d'instance pour s'exécuter
        }

        public static function renderUsers($users){
            foreach($users as $key => $user){
                $user->renderUser();
            }
        }


        // function saveToBdd{
        //     // connexion à la db
        //     // requête
        //     // exécution
        // }                    
    }
?>