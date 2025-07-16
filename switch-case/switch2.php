<?php
    $op = "+";
    $x = 300;
    $y = 100;

    switch ($op){
        case '+':{
            echo "X + Y : ".$x + $y."  ";
        }break;
        case '-':{
            echo "X - Y : ".$x - $y."  ";
        }break;
        case '/':{
            echo "X / Y : ".$x / $y."  ";
        }break;
        case '*':{
            echo "X * Y : ".$x * $y."  ";
        }break;
    }
?>