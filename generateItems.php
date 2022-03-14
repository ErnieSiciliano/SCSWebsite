<?php include('Connect.php');
        $conn= new Connect();
        $conn = $conn -> getConnection();
 ?>

<?php 

$sql = "INSERT INTO item(Name,Price,Color,Path,Team) VALUES('Ronaldo',120.000,'Red','jerseys/ronaldo.png','Manchester')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO item(Name,Price,Color,Path,Team) VALUES('Havertz',120.000,'Blue','jerseys/havertz.png','Chelsea')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO item(Name,Price,Color,Path,Team) VALUES('Salah',120.000,'Red','jerseys/salah.png','Liverpool')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO item(Name,Price,Color,Path,Team) VALUES('Messi',150.000,'Blue','jerseys/messi.png','Barcelona')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO item(Name,Price,Color,Path,Team) VALUES('Benzema',120.000,'White','jerseys/benzema.png','Real Madrid')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO item(Name,Price,Color,Path,Team) VALUES('Felix',120.000,'Red','jerseys/felix.png','Atheltico Madrid')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO item(Name,Price,Color,Path,Team) VALUES('Tonali',100.000,'Red','jerseys/tonali.png','AC Milan')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO item(Name,Price,Color,Path,Team) VALUES('Biraghi',80.000,'Purple','jerseys/biraghi.png','Fiorentina')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO item(Name,Price,Color,Path,Team) VALUES('Insigne',100.000,'Blue','jerseys/insigne.png','Napoli')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO item(Name,Price,Color,Path,Team) VALUES('Lewandowski',120.000,'Blue','jerseys/lewandowski.png','Bayern Munich')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO item(Name,Price,Color,Path,Team) VALUES('Haaland',100.000,'Yellow','jerseys/haaland.png','Dortmund')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO item(Name,Price,Color,Path,Team) VALUES('Steffen',60.000,'Green','jerseys/steffen.png','Wolfsburg');";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}



?>