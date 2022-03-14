<?php
    require_once("Connect.php");
    $conn = new Connect();
    $conn = $conn -> getConnection();


    $sql = "DELETE FROM cart;";
    if(mysqli_query($conn, $sql)){
        echo "Cart Was Cleared!";
    } else{
        echo "Something Went wrong when clearing the cart";
    }
?>