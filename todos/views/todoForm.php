<?php 
    // var_dump($_POST);
    include_once './controllers/TodoController.php';
    $todoController = new TodoController(isset($_POST['todo']) ? $_POST['todo'] : null);

    // ici on veut tester s'il y a "addTodo"
    if(isset($_POST['addTodo']) && 
    
        $todoController->isValidTodo()){
        // enregistrer la todo dans la BDD
        $todoController->saveToDB();
    }
?>

<form method="POST">
    <input type="text" name="todo" placeholder="Entrez une tâche">
    <button type="submit" name="addTodo">Valider</button>
    <p><?=$todoController->getError()?></p>
</form>