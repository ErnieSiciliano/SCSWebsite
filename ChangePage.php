<?php
class ChangePage{
    public static function change($seconds,$pageName){
        $headerStr = "refresh:" . $seconds . ";url=http://localhost/SCSWebsite/" . $pageName . ".php";
        header( $headerStr );
    }   
}


?>
