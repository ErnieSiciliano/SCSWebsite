<html>
    <head>
        <meta name="author" content="Brendan Aucoin, Ernesto Siciliano, Armaan Mohammed Ali">
        <meta name="description" content="SCS Website">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="index2.css">
        <!-- <meta name = "viewport" content = "width=device-width, initial-scale=1.0"> -->
        <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0" /> 
        <title>SCS Website</title>   
        <!-- <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    </head>
    <body>



        <?php 
        require('menu.php'); 
        require('Connect.php');
        require("League.php");
        ?>           
        <?php 
            $premierLeague = new League("Premier League",["Manchester","Chelsea","Liverpool"]);
            $laLiga = new League("La Liga",["Barcelona","Real Madrid","Atheltico Madrid"]);
            $serieA = new League("Serie A",["AC Milan","Fiorentina","Napoli"]);
            $bundesliga = new League("Bundesliga",["Bayern Munich","Dortmund","Wolfsburg"]);

            function displayItems($league){
                foreach ($league->getTeams() as $team){
                    echo '<div class ="team-container">';
                    echo ' <h3>' . $team . '</h3>';
                    echo '<ul class ="team-container-players-list">';
                    
                    $connection = new Connect();
                    $connection = $connection -> getConnection();
                    $sql = "SELECT * FROM item WHERE Team = '{$team}';";
                    if($result = mysqli_query($connection, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_array($result)){
                                echo '<li>';
                                echo '<div class = "individual-item-container">';
                                echo '<img src = "' . $row['Path'] . '" style = "width:30px;height:30px" />';
                                echo '<a class = "individual-item-link" href = "jersey.php?itemId=' . $row['ItemId'] . '">' . $row['Name'] . '</a>';
                                echo '<p>$' .  $row['Price'] . '</p>';
                                echo '</div>';
                                echo ' </li>';
                            }
                        }
                        else{
                            echo 'No Items in Leauge ' . $league->getName();
                        }
                    }
                    $connection->close();
                    echo '</ul>';
                    echo '</div>';
                }
            } 
        ?>
        <hr />
        <br />
        <section class = "menu-section">
            <div class = "menu-container">
                <div class = "menu-leauge">
                    <h2>Premier Leauge</h2>
                    <!-- dropdown content -->
                    <div class = "dropdown-content">
                        <div class = "teams-container">
                        <?php 
                            displayItems($premierLeague);
                        ?>
                        </div>
                    </div>


                    <!-- end of premier leauge -->
                </div>

                <div class = "menu-leauge">
                   <h2>La Liga</h2> 
                   <div class = "dropdown-content">
                        <div class = "teams-container">
                        <?php 
                            displayItems($laLiga);
                        ?>
                        </div>
                    </div>


                   <!-- end of la liga -->
                </div>

                <div class = "menu-leauge">
                    <h2>Serie A</h2>
                    <div class = "dropdown-content">
                        <div class = "teams-container">
                            <?php displayItems($serieA)?>
                        </div>
                    </div>
                    <!-- end of serie A -->
                </div>

                <div class = "menu-leauge">
                   <h2>Bundesliga</h2> 
                   <div class = "dropdown-content">
                        <div class = "teams-container">
                            <?php displayItems($bundesliga); ?>
                   <!-- end of Budeliga -->
                </div>
            </div>

            <!-- end of menu -->
        </section>
        
        <img src="bg.jpg" alt="Website Background" style="width:80%;height:1000px;display: block;margin-left: auto;margin-right: auto;border:3px solid #FF2400;">
    </body>
</html>

