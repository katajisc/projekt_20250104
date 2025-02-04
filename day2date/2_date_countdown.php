<?php

    # Funar inte, fixar senare :(

    $date_date = $_REQUEST["date_date"];

    $dd = date_create($date_date);
    $dd_formatted = date_format($dd, "j.n.Y");
    $today = date("j.n.Y");
    
    
    print($dd_formatted . "<br>");
    print("dagens datum: <br>");
    print($today);
    