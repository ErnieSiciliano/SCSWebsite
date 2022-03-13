<html>
<head>
        <meta name="author" content="Brendan Aucoin, Ernesto Siciliano, Armaan Mohammed Ali">
        <meta name="description" content="SCS Website Register">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="handleRegister.css">
        <!-- <meta name = "viewport" content = "width=device-width, initial-scale=1.0"> -->
        <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0" /> 
        <title>Finished Registering</title>   
        <!-- <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    </head>

    <body>
    <?php
        require("menu.php");
     
        require_once('Connect.php');
        require_once('ChangePage.php');
        $connection = new Connect();
        $connection = $connection -> getConnection();

        $sql = "INSERT INTO user (PhoneNum, Email, Password, LastName, FirstName,Address,PostCode )
        VALUES ('{$_POST['phone']}', '{$_POST['email']}','{$_POST['password']}', '{$_POST['last-name']}','{$_POST['first-name']}','{$_POST['address']}','{$_POST['postal-code']}');";
        if ($connection->query($sql) === TRUE) {
            echo "Created New User";
           ChangePage::change("2","login");
           
        } else {
            echo "Error Creating New User";
        }
        
        $connection->close();
    ?>

    </body>
</html>