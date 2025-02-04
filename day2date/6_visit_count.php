<?php
    $vc_fil = fopen("visit_count.txt", "a") or die("Felaktig filsökväg!");
    $some_user = "användarnamn: " . $_SESSION['username'] . ", IPv6: " . $_SERVER['REMOTE_ADDR'] .
                 ", första besök: " . $_COOKIE['first_visit'] . " <br> \n";
    fwrite($vc_fil, $some_user);
    fclose($vc_fil);

    #print(readfile("visit_count.txt"));
