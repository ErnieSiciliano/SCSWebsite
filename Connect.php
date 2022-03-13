<?php
class Connect{
    private $dbhost = 'localhost';
    private $dbuser = 'root';
    private $dbpass = "";
    $db = "store"

    function getConnection(){
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
        if($conn -> connect_error){
            die("Connection failed");
            return;
        }
        echo 'CONNECTION SUCCESSFUL';
        return conn;
    }

}



?>