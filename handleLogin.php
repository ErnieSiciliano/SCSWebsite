<html>
<head>
        <meta name="author" content="Brendan Aucoin, Ernesto Siciliano, Armaan Mohammed Ali">
        <meta name="description" content="SCS Website Register">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="handleRegister.css">
        <!-- <meta name = "viewport" content = "width=device-width, initial-scale=1.0"> -->
        <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0" /> 
        <title>Finished Login</title>   
        <!-- <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    </head>

    <body>
    <?php
        require("menu.php");
        require_once('Connect.php');
        require_once('ChangePage.php');
        $connection = new Connect();
        $connection = $connection -> getConnection();
        $sql = "SELECT Email, Password FROM user WHERE Email = '{$_POST['email']}' AND Password = '{$_POST['password']}';";
        if($result = mysqli_query($connection, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    if($row['Email'] === $_POST['email'] && $row['Password'] === $_POST['password'] ){
                        echo 'LOGIN SUCCESSFUL';
                        ChangePage::change("2","index");
                        break;
                    }
                   
                }
            }
            else{
                echo 'No User with that email or password';
            }


        }


        $connection->close();
    ?>

    </body>
</html>