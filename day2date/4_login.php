<?php
    $username = input_san($_REQUEST["username"]);
    $_SESSION["username"] = $username;
    $pwd = input_san($_REQUEST["pwd"]);
    
    # Verkställ

    print("Du är inloggad som: <strong>" . $username . "</strong> <br>");
    print("Du besökte webbsidan för första gången " . $_COOKIE['first_visit']);

    if(!isset($username)) {
        print("Användare: " . $username);
    }