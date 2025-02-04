<?php
$veckodagar = array("söndag","måndag","tisdag","onsdag","torsdag","fredag","lördag");
            $manader = array("januari","februari","mars","april","maj","juni",
            "juli","augusti","september","oktober","november","december");

            print("Idag är det " . $veckodagar[date("N")] . " den " . date("j") . " " 
            . $manader[date("n")] . " " . date("Y") . ", vecka nummer " . date("W"));
