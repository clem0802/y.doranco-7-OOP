<?php 
    session_start();
    include_once '../controllers/UserController.php';


    // utiliser le controller pour:
    // 1-tester les entrées: rediriger le user vers auth.php avec les erreurs à afficher
    // 2-vérifier que l'utilisateur s'est déjà inscrit
    // 3-s'il est déjà inscrit, mettre dans la session son id
    // 4-s'il n'est pas inscrit, mettre dans la session s'inscription
    $email = isset($_POST['email']) ? $_POST['email'] : null; // obligatoire
    $password = isset($_POST['password']) ? $_POST['password'] : null; // obligatoire

    // "$userController" est OBJ || "new UserController" est CLASS
    $userController = new UserController($email, $password);
    // $userController = new UserController($email, $password, null, $confirmPassword);



    if($userController->isLoginValid()){
        // aller chercher l'utilisateur avec l'email pour tester s'il existe
        if($userController->checkIfExist()){
            // var_dump('test');
            // mettre l'id dans la session (voir TODOS)
            if($userController->checkIfPasswordCorrect()){
                // mettre l'id dans la session
                $user = $userController->getUserWithEmail();
                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'email' => $user['email'],
                    'username' => $user['username'],
                    'avatar' => $user['avatar'],
                ];
                header('Location: ../profil.php');
            } else{
                // mettre l'erreur: mdp incorrect
                $_SESSION['login'] = [
                    'passwordError' => $userController->getPasswordError(),
                ];
                header('Location: ../auth.php');
            }
        } else {
            // afficher l'erreur: l'email n'existe pas, inscrivez-vous
            $_SESSION['login']=[
                'emailError' => $userController->getEmailError(),
                // 'passwordError' => $userController->getPasswordError(),
            ];
            header('Location: ../auth.php');
        }
    } else {
        $_SESSION['login'] = [
            'emailError' =>$userController->getEmailError(),
            'passwordError' =>$userController->getPasswordError(),
        ];
        header('Location: ../auth.php');
    } 
?>

