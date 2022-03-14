<html>
    <head>
        <meta name="author" content="Brendan Aucoin, Ernesto Siciliano, Armaan Mohammed Ali">
        <meta name="description" content="SCS Website">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="index.css">
        <!-- <meta name = "viewport" content = "width=device-width, initial-scale=1.0"> -->
        <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0" /> 
        <title>SCS Website</title>   
        <!-- <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    </head>
    <body>
        <?php require('menu.php');?>

        <hr />
        <br />
        <section class = "menu-section">
            <div class = "menu-container">
                <div class = "menu-leauge">
                    <h2>Premier Leauge</h2>
                    <!-- dropdown content -->
                    <div class = "dropdown-content">
                        <div class = "teams-container">
                            <div class ="team-container">
                                <h3>Manchester</h3>
                                <ul class ="team-container-players-list">
                                    <li><a href = "jersey.php?itemId=1">Ronaldo</a></li>
                                </ul>
                            </div>

                            <div class ="team-container">
                                <h3>Chelsea</h3>
                                <ul class ="team-container-players-list">
                                    <li><a href = "jersey.php?itemId=2">Havertz</a></li>
                                </ul>
                            </div>


                            <div class ="team-container">
                                <h3>Liverpool</h3>
                                <ul class ="team-container-players-list">
                                    <li><a href = "jersey.php?itemId=3">Salah</a></li>
                                </ul>
                            </div>

                        </div>
                        
                    </div>


                    <!-- end of premier leauge -->
                </div>

                <div class = "menu-leauge">
                   <h2>La Liga</h2> 
                   <div class = "dropdown-content">
                        <div class = "teams-container">
                            <div class ="team-container">
                                <h3>Barcelona</h3>
                                <ul class ="team-container-players-list">
                                    <li><a href = "jersey.php?itemId=4">Messi</a></li>
                                </ul>
                            </div>

                            <div class ="team-container">
                                <h3>Real Madrid</h3>
                                <ul class ="team-container-players-list">
                                    <li><a href = "jersey.php?itemId=5">Benzema</a></li>
                                </ul>
                            </div>


                            <div class ="team-container">
                                <h3>Atheltico Madrid</h3>
                                <ul class ="team-container-players-list">
                                    <li><a href = "jersey.php?itemId=6">Felix</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>


                   <!-- end of la liga -->
                </div>

                <div class = "menu-leauge">
                    <h2>Serie A</h2>
                    <div class = "dropdown-content">
                        <div class = "teams-container">
                            <div class ="team-container">
                                <h3>AC Milan</h3>
                                <ul class ="team-container-players-list">
                                    <li><a href = "jersey.php?itemId=7">Tonali</a></li>
                                </ul>
                            </div>

                            <div class ="team-container">
                                <h3>Fiorentina</h3>
                                <ul class ="team-container-players-list">
                                    <li><a href = "jersey.php?itemId=8">Biraghi</a></li>
                                </ul>
                            </div>


                            <div class ="team-container">
                                <h3>Napoli</h3>
                                <ul class ="team-container-players-list">
                                    <li><a href = "jersey.php?itemId=9">Insigne</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!-- end of serie A -->
                </div>

                <div class = "menu-leauge">
                   <h2>Bundesliga</h2> 
                   <div class = "dropdown-content">
                        <div class = "teams-container">
                            <div class ="team-container">
                                <h3>Bayern Munich</h3>
                                <ul class ="team-container-players-list">
                                    <li><a href = "jersey.php?itemId=10">Lewandowski</a></li>
                                </ul>
                            </div>

                            <div class ="team-container">
                                <h3>Dortmund</h3>
                                <ul class ="team-container-players-list">
                                    <li><a href = "jersey.php?itemId=11">Haaland</a></li>
                                </ul>
                            </div>


                            <div class ="team-container">
                                <h3>Wolfsburg</h3>
                                <ul class ="team-container-players-list">
                                    <li><a href = "jersey.php?itemId=12">Steffen</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                   <!-- end of Budeliga -->
                </div>
            </div>
            <!-- end of menu -->
        </section>
    </body>
</html>