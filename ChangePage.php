<?php
class ChangePage{
    public static function change($seconds,$pageName){
        echo "<br />";

        $headerStr = "refresh:" . $seconds . ";url=http://localhost/xampp/SCS_Website/SCSWebsite/" . $pageName . ".php";
        header( $headerStr );
    }   
}


?>
