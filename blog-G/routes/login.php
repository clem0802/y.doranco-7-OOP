<?php 
session_start();
include_once '../controllers/UserController.php';

$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

$userController = new UserController($email, $password);

if($userController->isLoginValid()){
    if($userController->checkIfExist()){
        if($userController->checkIfPasswordCorrect()){
            $user = $userController->getUserWithEmail();
          
            $_SESSION['user'] = [
                'id' => $user['id'],
                'email' => $user['email'],
                'username' => $user['username'],
                'avatar' => $user['avatar']
            ];
            header('Location: ../profil.php');
        } else {
            $_SESSION['login'] = ['errorPassword' => $userController->getErrorPassword()];
            header('Location: ../auth.php');
        }
    } else {
        $_SESSION['login'] = ['errorEmail' => $userController->getErrorEmail()];
        header('Location: ../auth.php');
    }
}else{
    $_SESSION['login'] = [
        'errorEmail' => $userController->getErrorEmail(),
        'errorPassword' => $userController->getErrorPassword()
    ];
     header('Location: ../auth.php');
}
?>