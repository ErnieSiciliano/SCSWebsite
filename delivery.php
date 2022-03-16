
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Directions</title>
    <link rel="stylesheet" href="delivery.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php require("menu.php"); ?>
<?php
    require_once("Connect.php");
    require_once("ChangePage.php");
    $conn = new Connect();
    $conn = $conn -> getConnection();


    $sql = "DELETE FROM cart;";
    mysqli_query($conn, $sql);


?>

	<div id = "center">
    <div id="current_date"></p>
        <br>
        <br>
        <script>
            date = new Date();
            year = date.getFullYear();
            month = date.getMonth() + 1;
            day = date.getDate();
            document.getElementById("current_date").innerHTML = "Date Issued: " + month + "/" + day + "/" + year;
        </script>

		<section id="directions">
			<h2>Delivery Map</h2>
			<button id="get-directions" >Get Path</button><span id='directions-info'></span>
			<p id="directions-info"></p>
			
			<article id="directions-map"></article>
		</section>
	</div>



	<script src="delivery.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5JTUm5iGOiCGq15w-pgdOJqPcrI9S1w0" async defer></script>
	
	
</body>
</html>