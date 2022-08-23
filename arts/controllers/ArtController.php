<?php 
include_once './models/ArtModel.php';

    class ArtController{
        private $art;
        private $error = "";
        private $artModel;

        public function __construct($art){
            $this->art = $art;
            $this->artModel = new ArtModel($art);
        }

        public function getError(){
            return $this->error;
        }

        public function isValidArt(){
            return $this->art !== null && $this->artNotEmpty();
        }

        // IF ALL ARTICLES ARE LOREM IPSUM, this might cause PROBLEMS
        public function saveToDB(){
            if($this->artModel->checkIfExist()){
                $this->error = "Cet article existe déjà.";
            } else{
                // utiliser le Model pour enregistrer l'article
                $this->artModel->saveToDB();
            }
        }

        private function artNotEmpty(){
            if($this->art === ""){
                $this->error = "Écrivez un court article";
                return false;
            } else{
                return true;
            }
        }

        public static function renderArts(){
            // utiliser le Model pour chercher toutes les arts => articles
            // une fonction statique dans une classe
            $arts = ArtModel::fetchAll();
            // faire une boucle sur chaque art => article et créer des éléments HTML
            $artsElements = "";
            foreach($arts as $key => $art){
                $artsElements .= '
                    <li>
                        <span>' . $art['title']. ' - </span>
                        <span>' . $art['content']. ' - </span>
                        <span>' . $art['date']. '</span>
                    </li>
                ';
            }
            return $artsElements;
        }
    }
?>


