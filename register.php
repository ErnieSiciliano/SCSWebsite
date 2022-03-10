<html>
    <head>
        <meta name="author" content="Brendan Aucoin, Ernesto Siciliano, Armaan Mohammed Ali">
        <meta name="description" content="SCS Website Register">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="register.css">
        <!-- <meta name = "viewport" content = "width=device-width, initial-scale=1.0"> -->
        <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0" /> 
        <title>Register</title>   
        <!-- <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    </head>
    <body>
        <?php
            require("menu.php");
        ?>
        <div class = "register-container">
            <div class = "register-form-container">
                
                <form>
                    <h1>Register for an Account</h1>
                    <label>First Name:</label>
                    <input id = "first-name-field" type = "text" required />
    
                    <label for = "last-name-field">Last Name:</label>
                    <input id = "last-name-field" type = "text" required />
    
                    <label for = "email-field">Email:</label>
                    <input id = "email-field" type = "email" required />
    
                    <label for = "password-field">Password: </label>
                    <input id = "password-field" type = "password" required/>

                    <input class = "register-button" type = "submit" name = "Register" / >

                    <p class = "login-text">Already registered? <a href = "login.php">Sign in here</a></p>
                </form>
            </div>
           
        </div>
    </body>
</html>