<?php 
include_once './models/TodoModel.php';

    class TodoController{
        private $todo;
        private $error = "";
        private $todoModel;

        public function __construct($todo){
            $this->todo = $todo;
            $this->todoModel = new TodoModel($todo);
        }

        public function getError(){
            return $this->error;
        }

        public function isValidTodo(){
            return $this->todo !== null && $this->todoNotEmpty();
        }

        public function saveToDB(){
            if($this->todoModel->checkIfExist()){
                $this->error = "Cette tâche existe déjà.";
            } else{
                // utiliser le Model pour enregistrer la todo
                $this->todoModel->saveToDB();
            }
        }

        private function todoNotEmpty(){
            if($this->todo === ""){
                $this->error = "Entrez une tâche";
                return false;
            } else{
                return true;
            }
        }

        public static function renderTodos(){
            // utiliser le Model pour chercher toutes les todos
            // une fonction statique dans une classe
            $todos = TodoModel::fetchAll();
            // faire une boucle sur chaque todo et créer des éléments HTML
            $todosElements = "";
            foreach($todos as $key => $todo){
                $todosElements .= '
                    <li>
                        <span>' . $todo['text']. ' - </span>
                        <span>' . $todo['date']. '</span>
                    </li>
                ';
            }
            return $todosElements;

        }

    }
?>