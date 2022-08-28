<?php 
session_start();
include_once '../controllers/UserController.php';

$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

$username = isset($_POST['username']) ? $_POST['username'] : null;
$confirmPassword = isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : null;

$userController = new UserController($email, $password, $username, $confirmPassword);


if($userController->isSignupValid()){
    if(!$userController->checkIfEmailExist()){
            $userController->saveToDB();
            header('Location: ../auth.php');    
    }else{
        $_SESSION['signup'] = ['errorEmail' => $userController->getErrorEmail()];
        header('Location: ../auth.php');
    }
}else{
    $_SESSION['signup'] = [
        'errorEmail' => $userController->getErrorEmail(),
        'errorUsername' => $userController->getErrorUsername(),
        'errorPassword' => $userController->getErrorPassword(),
        'errorConfirmPassword' => $userController->getErrorConfirmPassword()
    ];
     header('Location: ../auth.php');
}
?>