<html>

<body>
    <?php
        require_once("Connect.php");
        require_once("ChangePage.php");
        $conn = new Connect();
        $conn = $conn -> getConnection();
        $sql = "INSERT INTO cart (Name, Price, Size, Color,Path )
        VALUES ('{$_POST['jerseyName']}', '{$_POST['jerseyPrice']}', '{$_POST['size-radio-button']}','{$_POST['jerseyColor']}','{$_POST['jerseyPath']}');";
        if ($conn->query($sql) === TRUE) {
            echo "Inserted into Cart";
           ChangePage::change("1","index");
           
        } else {
            echo "Error Ccould not add to cart";
        }
    ?>
</body>

</html>