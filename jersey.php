<html>
    <head>
        <meta name="author" content="Brendan Aucoin, Ernesto Siciliano, Armaan Mohammed Ali">
        <meta name="description" content="SCS Website">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="jersey.css">
        <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0" /> 
        <title>Player [name] jersey</title>  
        <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script defer src="handleCart.js"></script> 
        
    </head>
    <body>

    <?php 
    require("menu.php");
    require_once("Connect.php");
    $connection = new Connect();
    $connection = $connection -> getConnection();
    $sql = "SELECT * FROM item WHERE itemId = '{$_GET['itemId']}';";

    $jerseyName = "";
    $jerseyPath = "";
    $jerseyPrice = "";
    $jerseyColor = "";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $jerseyName = $row["Name"];
        $jerseyPath = $row["Path"];
        $jerseyPrice = $row["Price"];
        $jerseyColor = $row["Color"];
        break;
    }
    } else {
    echo "0 results";
    }


    ?>
        <form action="handleCart.php" method = "post">
        <input type="hidden" id="custId" name="custId" value=<?php echo $jerseyName ?>>
            <div class = "jersey-page-container">
                <!-- jersey image and name -->
                <div class = "jersey-info-container">
                    <h3 id = "product-name"><?php  echo $jerseyName; ?> </h3>
                    <br />
                    <img style="width:700px;height:600px"; name = "image" src = <?php echo $jerseyPath; ?> />
                </div>

                

                    <!-- size information, price  and add to cart button-->
                    <div class = "purchase-jersey-container">
                        <p id= "jersey-price" name = "price">Price: $<?php echo $jerseyPrice;  ?></p>
                        <div class ="size-selection-container">
                            <input type = "radio" id = "small-jersey" name = "small" value = "small"/>
                            <label for = "small-jersey">Small</label>
                            <input type = "radio" id = "medium-jersey" name = "medium" value = "medium"/>
                            <label for = "medium-jersey">Medium</label>
                            <input type = "radio" id = "large-jersey" name = "large" value = "large"/>
                            <label for = "large-jersey">Large</label>
                        </div>
                        <div class = "add-to-cart-container">
                            <input type ="submit" id = "add-to-cart-button" value = "Add To Cart" /> 
                        </div>

                    </div>
            </div>
        </form>
    </body>
</html>