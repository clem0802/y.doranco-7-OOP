<?php 
    include_once './libs/DB.php';

    class TodoModel extends DB{
    private $todo;

    public function __construct($todo){
        $this->todo = $todo;
    }

    public function checkIfExist(){
        // 1-avoir la connexion à la BDD
        // 2-faire unre requête pour sélectionner une todo avec le contenu
        $SQLRequest = $this->connect()->prepare("SELECT * FROM todoslist WHERE text=?;");
        $SQLRequest->execute([$this->todo]);
        return $SQLRequest->rowCount() > 0;
    }

    public function saveToDB(){
        $SQLRequest = $this->connect()->prepare("INSERT INTO todoslist (text) VALUES (?)");
        $SQLRequest->execute([$this->todo]);
    }

    public static function fetchAll(){
        $SQLRequest = self::connect()->query('SELECT * FROM todoslist');
        $SQLRequest->execute();
        return $SQLRequest->fetchALL(PDO::FETCH_ASSOC);
    }
}
?>