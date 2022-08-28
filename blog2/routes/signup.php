<?php 
    session_start();
    include_once '../controllers/UserController.php';

    // utiliser le controller pour:
    // 1-tester les entrées: rediriger le user vers auth.php avec les erreurs à afficher
    // 2-enregistrer l'utilisateur dans DB: rediriger l'utilisateur vers auth.php"login

    $email = isset($_POST['email']) ? $_POST['email'] : null; // obligatoire
    $password = isset($_POST['password']) ? $_POST['password'] : null; // obligatoire

    $username = isset($_POST['username']) ? $_POST['username'] : null;
    $confirmPassword = isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : null;


    // EXO1
    // instancier notre controller
    // créer le fichier /controllers/UserController.php
    // créer la classe avec les attributs et le constructeur
    // envoyer le contenu du fichier: UserController.php

    // "$userController" est OBJ || "new UserController" est CLASS
    $userController = new UserController($email, $password, $username, $confirmPassword);
    

    // EXO2
    // créer une fonction pour tester les entrées
    // email: non vide et non null
    // username: non vide, non null et sup à 3
    // password: non vide, non null et sup à 6
    // confirmPassword: non vide, non null et égal à password


    if($userController->isSignupValid()){
        // enregistrer l'utilisateur
        if(!$userController->checkIfEmailExist()){
            $userController->saveToDB();
            header('Location: ../auth.php');
        } else{
            $_SESSION['signup'] = ['emailError' =>$userController->getEmailError()];
            header('Location: ../auth.php');
        }
    } else{
        $_SESSION['signup'] = [
            'emailError' =>$userController->getEmailError(),
            'usernameError' =>$userController->getUsernameError(),
            'passwordError' =>$userController->getPasswordError(),
            'confirmPasswordError' =>$userController->getConfirmPasswordError()
        ];
        header('Location: ../auth.php');
    }



    // METHODE que Samy n'a pas utilisée
    // if($userController->isSignupValid()){
    //     echo "correct";
    //     // enregistrer l'utilisateur
    //     // header('Location: /y.doranco-7-OOP/blog2/auth.php');
    // } else{
    //     echo "incorrect";
    //     header('Location: /y.doranco-7-OOP/blog2/auth.php?emailError='. 
    //     $userController->getUsernameError() .
    //     $usernameError->getEmailError() .
    //     $passwordError->getPasswordError() .
    //     $confirmPasswordError->getConfirmPasswordError());
    // }
