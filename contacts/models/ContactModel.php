<?php 
    include_once './libs/DB.php';

    class ContactModel extends DB{
        private $email;
        private $nom;
        private $prenom;
        private $message;


        public function __construct($email,$nom,$prenom,$message){
            $this->email = $email;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->message = $message;
        }

        public function checkIfExist(){
            // 1-avoir la connexion à la BDD
            // 2-faire unre requête pour sélectionner un contact 
            $SQLRequest = $this->connect()->prepare("SELECT * FROM contactslist WHERE email, nom, prenom, message=?;");
            $SQLRequest->execute([$this->email, $this->nom, $this->prenom, $this->message]);
            return $SQLRequest->rowCount() > 0;
        }

        public function saveToDB(){
            $SQLRequest = $this->connect()->prepare("INSERT INTO contactslist (email, nom, prenom, message) VALUES (?,?,?,?)");
            $SQLRequest->execute([$this->email, $this->nom, $this->prenom, $this->message]);
        }

        public static function removeByID($contactID){
            $deleteContactReq = self::connect()->prepare('DELETE FROM contactslist WHERE id=?;');
            $deleteContactReq->execute([$contactID]);
        }

        public static function fetchAll(){
            $SQLRequest = self::connect()->query('SELECT * FROM contactslist');
            $SQLRequest->execute();
            return $SQLRequest->fetchALL(PDO::FETCH_ASSOC);
        }
    }
?>