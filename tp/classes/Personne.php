<?php 
    class Personne{
        // propriétés
        private $firstName;
        private $lastName;

        // le constructeur
        public function __construct($prenom, $nom){
            $this->firstName = $prenom;
            $this->lastName = $nom;
        }

        // les méthodes 
        public function renderPersonne(){
            echo '<div>
                <p>Prénom: ' . $this->firstName . '</p>
                <p>Nom: ' . $this->lastName . '</p>
            </div>';
        }

        // méthodes GETTERS:
        // (les accesseurs) GETTER => pr récupérer la valeur des attributs
        public function getFirstName(){
            return $this->firstName;
        }
        public function getLastName(){
            return $this->lastName;
            echo "<br>";
        }


        // méthodes SETTERS:
        // (les mutateurs) SETTER => pr modifier la valeur des attributs
        public function setFirstName($newFirstName){
            $this->firstName = $newFirstName;
            return $this;
        }
        public function setLastName($newLastName){
            $this->lastName = $newLastName;
            return $this;
            echo "<br>";
        }
    }


    class Eleve extends Personne{
        public $cours;
        public function __construct($nom, $prenom, $cours){
            parent::__construct($nom, $prenom);
            $this->cours = $cours;
        }

        public function getCours(){
            return $this->cours;
        }
        public function addCours($newCours){
            array_push($newCours);
        }

        public function renderCours(){
            var_dump($this->cours);
            foreach($this->cours as $key =>$value){
                echo '<p>' . $value . '</p>';
            }
        }

        // ici ça OVERRIDE la fonction renderPersonne() du parent
        public function renderPersonne(){
            echo '<div>
                    <p>' . $this->getFirstName() . '</p>
                    <p>' . $this->getLastName() . '</p>
                </div>
            ';
            $this->renderCours(); 
        }
    }
?>