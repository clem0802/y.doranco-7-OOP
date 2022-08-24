<?php 
    include_once './controllers/TodoController.php';
    if(isset($_GET['deleteTodo'])){
        TodoController::deleteTodo($_GET['deleteTodo']);
    }
?>

<section>
    <ol>
        <?php 
            // après pause
            
            // utiliser le TodoController pour chercher les todos et les afficher 
            // echo TodoController::renderTodos();
            $todos = TodoController::getTodos();
            foreach($todos as $key => $todo){
                $date = date('j/m/Y - G:i', strtotime($todo['date']));
                echo '
                    <li>
                        <span>' . $todo['text']. ' - </span>
                        <span>' . $todo['date']. '</span>
                        <form method="GET">
                            <button type="submit" name="deleteTodo" value="'.$todo['id'].'">Supprimer</button>
                        </form>
                    </li>
                ';
            }
        ?>
    </ol>
</section>