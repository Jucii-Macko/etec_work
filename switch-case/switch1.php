<?php
    echo "<h1>Switch Case Day</h1>";

    $d = date('D');

    switch($d){
        case "Mon":
            echo "This is a lession PHP";
            break;
        case "Tue":
            echo "This is a lession Laravel";
            break;
        case "Wed":
            echo "This is a lession Web";
            break;
        case "Thu":
            echo "This is a lession Java";
            break;
        case "Fri":
            echo "This is a lession MongoDB";
            break;
        default:
            echo "This is Holydays";
            break;
    }
?>