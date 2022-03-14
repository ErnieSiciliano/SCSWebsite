<html>

    <head>
        <meta name="author" content="Brendan Aucoin, Ernesto Siciliano, Armaan Mohammed Ali">
        <meta name="description" content="SCS Website">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="checkout.css">
        <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0" /> 
        <title>Cart</title>  
    </head>

    <body>
        <?php require("menu.php"); ?>
        <div class = "all-items-container">
                <div>
                    <table>
                        <tr>
                            <th>Image</th>
                            <th>Name </th>
                            <th>Color</th>
                            <th>Size</th>
                            <th>Price </th>
                        </tr>

                        <?php
                            require_once("Connect.php");

                            $conn = new Connect();
                            $conn = $conn -> getConnection();
                            $sql = "SELECT * FROM cart;";
                            $result = $conn->query($sql);
                            $totalPrice = 0.0;
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    //echo "<br> id: ". $row["Name"]. " - Name: ". $row["Price"]. " " . $row["Size"] . " " . $row['Color'] . " " . $row['Path'] . "<br>";
                                    echo '<tr>';
                                    echo '<td> <img class = "cart-item-image" src = "' . $row['Path'] . '"/> </td>';
                                    echo '<td> <p>' . $row['Name'] .  '</p> </td>';
                                    echo '<td> <p>' . $row['Color'] .  '</p> </td>';
                                    echo '<td> <p>' . $row['Size'] .  '</p> </td>';
                                    echo '<td> <p>$' . $row['Price'] .  '</p> </td>';
                                    $totalPrice += $row['Price'];
                                }
                            } else {
                                echo "0 results";
                            }
                        ?>

                        <tr>
                            <td>  </td>
                            <td>  </td>
                            <td>  </td>
                            <td>  </td>
                            <td> Total Price: $<?php echo $totalPrice; ?> </td>

                        </tr>
                        
                    </table>
                </div>
                <!-- end of table -->


                
            </div>

    </body>


</html>