<?php

    # anv. namn, anv. IP , servernamn, serverns tidszon
    print($_SERVER['MELLON_displayName'] . "<br>");
    print($_SERVER['REMOTE_ADDR'] . "<br>");
    print($_SERVER['SERVER_NAME'] . "<br>");
    print(date_default_timezone_get());