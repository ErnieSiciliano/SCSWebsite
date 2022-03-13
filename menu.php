<html>
<head>
<link rel="stylesheet" href="menu.css">
<link rel="stylesheet" href="index.css">
</head>

 
<body>
<?php 
    echo '<section class = "icons-section">';
    echo '<div class = "left-icons">';
    echo '<p class = "icons-page-link"><a  href = "index.php">Home</a></p>';
    echo '<a href = "index.php"><img src ="logo.png" width = "75" height = "75" /> </a>';
    echo '</div>';

    echo ' <div class = "right-icons">';
    echo ' <ul>';
    echo '<li class = "icons-page-link" ><a href = "register.php">Sign Up</a></li>';
    echo '<li class = "icons-page-link"><a href = "login.php">Sign In</a></li>';
    echo '<li class = "icons-page-link"><a href = "contact.php">About Us</a></li>';
    echo '<li class = "icons-page-link"><a href = "contact.php">Contact Us</a></li>';
    echo '<li style = "color:green;cursor:pointer;margin-left:3rem;"><a href = "index.php">Cart</a></li>';
    echo '</ul>';
    
    echo '</div>';
    echo '</section>';
?>
</body>
</html>
