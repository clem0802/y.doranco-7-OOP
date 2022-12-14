<?php 
include_once './models/ContactModel.php';


    class ContactController{
        private $contact;
        private $error = "";
        private $contactModel;


        public function __construct($email,$nom,$prenom,$message){
            $this->email = $email;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->message = $message;

            $this->contactModel = new ContactModel($email,$nom,$prenom,$message);
        }

        public function getError(){
            return $this->error;
        }


        public function isValidContact(){
            return $this->isValidEmail() && $this->isValidNom() && $this->isValidPrenom() && $this->isValidMessage();
        }

        private function isValidEmail(){
            return $this->email !== null && $this->email !== "";
        }
        private function isValidNom(){
            return $this->nom !== null && $this->nom !== "";
        }
        private function isValidPrenom(){
            return $this->prenom !== null && $this->prenom !== "";
        }
        private function isValidMessage(){
            return $this->message !== null && $this->message !== "";
        }

        // (another way)
        // private function isValidEmail(){
        //     if($this->email === null || $this->email === ""){
        //         $this-emailError = "Email ne peut pas être vide!";
        //         return false;
        //     } else{
        //         return true;
        //     }
        // }



        

        public function saveToDB(){
            // if($this->contactModel->checkIfExist()){
            //     $this->error = "Ce contact existe déjà.";
            // } else{
            //     // utiliser le Model pour enregistrer le contact
            //     $this->contactModel->saveToDB();
            // }
            $this->contactModel->saveToDB();
        }

        public static function deleteContact($contactID){
            ContactModel::removeByID($contactID);
        }

        private function contactNotEmpty(){
            if($this->contact === ""){
                $this->error = "Entrez un message svp.";
                return false;
            } else{
                return true;
            }
        }

        public static function getContacts(){
            // utiliser le Model pour chercher tous les contacts
            // une fonction statique dans une classe
            $contacts = ContactModel::fetchAll();
            return $contacts;
        }
    }
?>