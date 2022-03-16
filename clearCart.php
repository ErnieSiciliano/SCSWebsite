<?php
    require_once("Connect.php");
    require_once("ChangePage.php");
    $conn = new Connect();
    $conn = $conn -> getConnection();


    $sql = "DELETE FROM cart;";
    if(mysqli_query($conn, $sql)){
        ChangePage::change("1","checkout");
    } else{
        echo "Something Went wrong when clearing the cart";
    }

?>