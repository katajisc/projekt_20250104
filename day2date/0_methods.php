<?php
    session_start();    


    if (!isset($_COOKIE["first_visit"])) {
    $cookie1_val = date("Y-m-d-H-i-s");
    setcookie("first_visit", $cookie1_val);
    }

    # input sanitization
    function input_san($input) {
        $input = htmlspecialchars($input);
        $input = stripslashes($input);
        $input = trim($input);
        return $input;
    }
