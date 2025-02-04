<?php
    $username = input_san($_REQUEST["username"]);
    $email = input_san($_REQUEST["email"]);
    $_SESSION["username"] = $username;
    $pwd = '';

    print("Välkommen <strong>" . $username . "</strong> <br>");
    print("Vi skickar ditt lösenord till adressen: <strong>" . $email . "</strong>");


$allowed_chars = array(0,1,2,3,4,5,6,7,8,9,"a","c","e","g","i","k","m","o","q","s","u","w","y");
for ($i = 0; $i < 9; $i++) {
    $nxt_num = rand(0,22);
    $pwd .= $allowed_chars[$nxt_num];
}

$pwd_msg = "Lösenordet för ditt konto på Day2Date är: " . $pwd . "<br> Du är nu redo för att leta efter din första dejt!";
mail($email, "Day2Date — Ditt lösenord ", $pwd);