<?php
class Connect{
//to use: put this at the top of your in line php script require_once('Connect.php');
    public function getConnection(){
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "store";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
        if($conn -> connect_error){
            die("Connection failed");
            return;
        }
        return $conn;
    }

}



?>