<?php
    $array = array("Pete", "Marcia", "Alexander");
    echo $array[1] . " and " . $array[2] . " are my favorites!";
    echo "<br />";
    $array2 = array("pete" => 35, "marcia" => 34, "alexander" => "&lt;1");
    echo $array[0] . " is " . $array2["pete"] . ".";
    echo "<br />";
    echo $array[2] . " is " . $array2["alexander"] . ".";
?>