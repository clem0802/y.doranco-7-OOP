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

        public static function deleteTodo($todoID){
            TodoModel::removeByID($todoID);
        }

        private function todoNotEmpty(){
            if($this->todo === ""){
                $this->error = "Entrez une tâche svp.";
                return false;
            } else{
                return true;
            }
        }

        // après pause
        public static function getTodos(){
            // utiliser le Model pour chercher toutes les todos
            // une fonction statique dans une classe
            $todos = TodoModel::fetchAll();

            // faire une boucle sur chaque todo et créer des éléments HTML
            // foreach($todos as $key => $todo){
                // $date = date('j/m/Y - G:i', strtotime('2022-08-23 14:37:54'));

                // $date = date('j/m/Y - G:i', strtotime($todo['date']));
                // $todosElements .= '
                //     <li>
                //         <span>' . $todo['text']. ' - </span>
                //         <span>' . $todo['date']. '</span>
                //         <form method="GET">
                //             <button type="submit" name="deleteTodo" value="'.$todo['id'].'">Supprimer</button>
                //         </form>
                //     </li>
                // ';
            // }
            return $todos;
        }
    }
?>