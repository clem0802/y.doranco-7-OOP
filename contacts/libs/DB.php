<?php 
    class DB {
        static public function connect(){

            $username = "root";
            $password = "root";
            $connect = new PDO("mysql:host=localhost; dbname=contacts", $username, $password);
            return $connect;


            // $username = "root";
            // $password = "root";

            // // le try-catch permet d'exécuter du code si un pb survient dans le bloc try
            // try{
            //     $connect = new PDO("mysql:host=localhost; dbname=contacts", 
            //     $username, $password);
            //     return $connect;
            // } catch(PDOException $exc){
            //     var_dump($exc);
            //     echo 'un problème est survenu...';
            // }
        }
    }
?>