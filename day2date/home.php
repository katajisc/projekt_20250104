<?php include "0_methods.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Day2Date</title>
    <link rel="stylesheet" href="style_main.css">
</head>

<body>
    <header>
        <h1>
            Day2Date
            <a href="profil.php" id = profile-icon> 
                <?php print($_SESSION["username"]); ?>
                <img src="img_uploads/default_birb.jpg" alt="grå fågel" id="profile-img" height="50px" width="50px"> 
            </a>
        </h1>
    </header>
    <hr>

    <nav>
        <ul id="nav">
            <li><a href="profil.php">Min profil</a></li>
            <li><a href="login.php">PH LOGIN</a></li>
            <li><a id="current" href="home.php">Hem</a></li>
            <li><a href="rapport.php">Rapport</a></li>
        </ul>
        <hr>
    </nav>
    <section class="main-article">
        <article>
            <?php
                print("<h2>Välkommen tillbaka " . $_SESSION["username"] . "!</h2><br>"); ?>

            <?php include "2_datum.php"?>

            <form action="home.php" method="GET" >
                <label for="date_date">Ange träffens datum:</label> <br>
                <input type="date" name="date_date"> &emsp;
                <input type="submit" value = "OK">
            </form>
            <?php include "2_date_countdown.php"?>

        </article>
    </section>

    <footer>
        Day2Date <br>
        2025
    </footer>
</body>

</html>
