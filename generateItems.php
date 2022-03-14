<?php include('Connect.php');
        $conn= new Connect();
        $conn = $conn -> getConnection();
 ?>

<?php 

$sql = "INSERT INTO item(Name,Price,Color,Path) VALUES('Ronaldo',120.000,'Red','jerseys/ronaldo.png')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO item(Name,Price,Color,Path) VALUES('Havertz',120.000,'Blue','jerseys/havertz.png')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO item(Name,Price,Color,Path) VALUES('Salah',120.000,'Red','jerseys/salah.png')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO item(Name,Price,Color,Path) VALUES('Messi',150.000,'Blue','jerseys/messi.png')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO item(Name,Price,Color,Path) VALUES('Benzema',120.000,'White','jerseys/benzema.png')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO item(Name,Price,Color,Path) VALUES('Felix',120.000,'Red','jerseys/felix.png')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO item(Name,Price,Color,Path) VALUES('Tonali',100.000,'Red','jerseys/tonali.png')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO item(Name,Price,Color,Path) VALUES('Biraghi',80.000,'Purple','jerseys/biraghi.png')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO item(Name,Price,Color,Path) VALUES('Insigne',100.000,'Blue','jerseys/insigne.png')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO item(Name,Price,Color,Path) VALUES('Lewandowski',120.000,'Blue','jerseys/lewandowski.png')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO item(Name,Price,Color,Path) VALUES('Haaland',100.000,'Yellow','jerseys/haaland.png')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO item(Name,Price,Color,Path) VALUES('Steffen',60.000,'Green','jerseys/steffen.png');";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}



?>