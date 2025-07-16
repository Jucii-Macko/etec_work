<?php
    $a = array();

    $a[0][0]  = 1001;
    $a[0][1]  = "Mona";
    $a[0][2]  = 23;
    $a[0][3]  = "RULE";
    $a[0][4]  = 10000;


    $a[1][0]  = 1002;
    $a[1][1]  = "John";

    foreach($a as $row){
        foreach($row as $col){
            echo $col . "<br>";
        }
        echo "<br>";
    }
?>