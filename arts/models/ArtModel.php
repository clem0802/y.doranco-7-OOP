<?php 
    include_once './libs/DB.php';

    class ArtModel extends DB{
        private $art;

        public function __construct($art){
            $this->art = $art;
        }

        public function checkIfExist(){
            // 1-avoir la connexion à la BDD
            // 2-faire unre requête pour sélectionner un article avec le contenu
            $SQLRequest = $this->connect()->prepare("SELECT * FROM artslist WHERE content=?;");
            $SQLRequest->execute([$this->art]);
            return $SQLRequest->rowCount() > 0;
        }

        public function saveToDB(){
            $SQLRequest = $this->connect()->prepare("INSERT INTO artslist (content) VALUES (?)");
            $SQLRequest->execute([$this->art]);
        }

        public static function removeByID($artID){
            $deleteArtReq = self::connect()->prepare('DELETE FROM artslist WHERE id=?;');
            $deleteArtReq->execute([$artID]);
        }

        public static function fetchAll(){
            $SQLRequest = self::connect()->query('SELECT * FROM artslist');
            $SQLRequest->execute();
            return $SQLRequest->fetchALL(PDO::FETCH_ASSOC);
        }
    }
?>