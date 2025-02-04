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
            <li><a id="current" href="login.php">PH LOGIN</a></li>
            <li><a href="home.php">Hem</a></li>
            <li><a href="rapport.php">Rapport</a></li>
        </ul>
        <hr>
    </nav>

    <section class="main-article"> 
        <article>
            <h3> Logga in </h3>            
            <form action = "login.php" method="POST">
                <label for="username">Användarnamn:</label> <br>
                <input type="text" name="username"> <br>
                <label for="pwd">Lösenord:</label> <br>
                <input type="password" name="pwd"> &emsp;
                <input type="submit" value="OK"> <br>
            </form> 
            <?php include "4_login.php" ?>

        </article>
    </section>

    <section class="main-article"> 
        <article>
            <h3> Skapa ett konto? </h3>            
                <form action = "login.php" method="POST">
                    <label for="username">Ange ett användarnamn:</label> <br>
                    <input type="text" name="username"> <br>
                    <label for="email">Epost:</label> <br>
                    <input type="text" name="email"> &emsp;
                    <input type="submit" value="OK"> <br>
            </form> 


        </article>
        <?php include "3_register.php" ?>
    </section>

    <footer>
        Day2Date <br>
        2025
    </footer>
</body>

</html>
