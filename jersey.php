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
        ?>
        <form
        <div class = "jersey-page-container">
            <!-- jersey image and name -->
            <div class = "jersey-info-container">
                <h3 id = "product-name">Name1</h3>
                <br />
                <img name = "image" src = "jerseys/jersey1.png" />
            </div>

            

                <!-- size information, price  and add to cart button-->
                <div class = "purchase-jersey-container">
                    <p id= "jersey-price" name = "price">Price: $399.99</p>
                    <div class ="size-selection-container">
                        <input type = "radio" id = "small-jersey" name = "small" value = "small"/>
                        <label for = "small-jersey">Small</label>
                        <input type = "radio" id = "medium-jersey" name = "medium" value = "medium"/>
                        <label for = "medium-jersey">Medium</label>
                        <input type = "radio" id = "large-jersey" name = "large" value = "large"/>
                        <label for = "large-jersey">Large</label>
                    </div>
                    <div class = "add-to-cart-container">
                        <button id = "add-to-cart-button" >Add To Cart </button>
                    </div>

                </div>
        </div>
    </body>
</html>