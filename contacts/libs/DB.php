<?php 
    class DB {
        static public function connect(){
            $username = "root";
            $password = "root";
            $connect = new PDO("mysql:host=localhost; dbname=contacts", $username, $password);
            return $connect;
        }
    }
?>