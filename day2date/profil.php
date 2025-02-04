<?php include "0_methods.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Min profil | Day2Date</title>
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
            <li><a id="current" href="profil.php">Min profil</a></li>
            <li><a href="login.php">PH LOGIN</a></li>
            <li><a  href="home.php">Hem</a></li>
            <li><a href="rapport.php">Rapport</a></li>
        </ul>
        <hr>
    </nav>


    <section class="main-article">
        <article>
            <h3> <?php print("Du är inloggad som: " . $_SESSION['username']) ?> </h3>

            <h4>Ändra profilbild</h4>
            <form action="profil.php" method="POST">
                <input type="submit" value="Ladda upp">
                <input type="file" name="img_upload" id="img_upload" value="Välj fil">
            </form>

        </article>

        <p>
            Besöksräknare: <br>
            <?php include "6_visit_count.php" ?>
        </p>
    </section>

    <section class="main-article">
        <?php include "1_tek_data.php" ?>
    </section>

    <footer>
        Day2Date <br>
        2025
    </footer>
</body>

</html>