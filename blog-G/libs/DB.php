<?php 
class DB {
    static function connect(){
        $username = "root";
        $password = "root";
        $connect = new PDO("mysql:host=localhost;dbname=myblog", $username, $password);
        return $connect;
    }

}
?>