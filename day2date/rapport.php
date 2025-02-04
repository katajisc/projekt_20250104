<?php include "0_methods.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Day2Date</title>
    <link rel="stylesheet" href="style_main.css">
    <style>
        div > img {
            border:1px solid black;
            border-radius:100px;
            max-height:200px; 
        }
    </style>
</head>

<body>
    <header>
        <h1>
            Day2Date
            <a href="profil.php" id = profile-icon> 
                <?php print($_SESSION["username"]); ?>
                <img src="img_uploads/default_birb.jpg" alt="grå fågel" id="profile-img" > 
            </a>
        </h1>
    </header>
    <hr>

    <nav>
        <ul id="nav">
            <li><a href="profil.php">Min profil</a></li>
            <li><a href="login.php">PH LOGIN</a></li>
            <li><a href="home.php">Hem</a></li>
            <li><a id="current" href="rapport.php">Rapport</a></li>
        </ul>
        <hr>
    </nav>
    <section class="main-article">
            <h3>Rapport</h3>
                <p>
                    Projektet har gått helt ok. Jag har följt med föreläsningarna på distans genom att se på inspelningarna, 
                    vilket har fungerat bra i att minska förlorad tid i resor och ökad koncentration. I början av kursen kände 
                    jag mig osäker över så gott som allt, eftersom jag inte förstod hurudan kapacitet php har som programmeringsspråk 
                    utan användning av databasverktyg. Jag har haft svårt att driva mig själv till att arbeta på projektet anefter 
                    delvis p.g.a. detta. <br>
                    Jag uppskattar att jag använt närmare 40 arbetstimmar hittils på projektet, då jag läst, sökt upp information, 
                    tittat på videon och kodat. Det är för litet och det beror på att jag inte gjort en tidsbelagd plan att följa. <br>
                    Projektet har inte varit värst roligt p.g.a. tidigare nämnd osäkerhet, men intressant ändå. Föreläsningarna var 
                    motiverande/inspirerande och exempelkoden hjälpsam för gestaltning. <br>
                    Jag lämnar in mitt projekt halvfärdigt för att få sinnesro. Jag får lov att fortsätta att arbeta på funktionerna 
                    som saknas från webbsidan i nuläget då Projekt 2 direkt bygger dem. Jag strävar till att planera en vettigare arbetsprocess inför följande del och att göra förändringar som gynnar genomförande av det. 

                </p>
    </section>

    <footer>
        Day2Date <br>
        2025
    </footer>
</body>

</html>