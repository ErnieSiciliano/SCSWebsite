<html>
    <head>
        <meta name="author" content="Brendan Aucoin, Ernesto Siciliano, Armaan Mohammed Ali">
        <meta name="description" content="SCS Website Register">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="register.css">
        <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0" /> 
        <title>Login</title>
    </head>
    <body>
        <?php require("menu.php");?>
        <div class = "register-container">
            <div class = "register-form-container">
                
                <form action = "handleLogin.php" method ="post">
                    <h1>Login</h1>
                    <label for = "email-field">Email:</label>
                    <input name ="email" id = "email-field" type = "text" required />

                    <label for = "password-field">Password: </label>
                    <input  name = "password" id = "password-field" type = "password" required/>

                    <input class = "register-button" type = "submit" name = "Register" / >

                    <p class = "login-text">Need an Account? <a href = "register.php">Register for an account here</a></p>
                </form>
            </div>
           
        </div>
    </body>
</html>