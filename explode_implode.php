<?php
    $guitars = "Fender Gibson Ibanez Taylor";
    $explodedGuitars = explode(" ", $guitars);
    echo $explodedGuitars[0];
    echo "<br />";
    echo $explodedGuitars[2];
    echo "<br />";
    $newGuitars = implode(" || ", $explodedGuitars);
    echo $newGuitars;
?>