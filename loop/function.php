<?php
    function Sum($a , $b){
        echo "Result : ". $a + $b;
    }

    function Demo($x , $y){
        return $x + $y;
    }

    $score = 80;
    function Grade($i){
        if($i >= 90){
            $grade = 'A';
        }elseif($i >= 80){
            $grade = 'B';
        }elseif($i >= 70){
            $grade = 'C';
        }elseif($i >= 60){
            $grade = 'D';
        }elseif($i >= 50){
            $grade = 'E';
        }else{
            $grade = 'F';
        };
        return $grade;
    }
    // Argument
    Sum(5,7);

    // Return
    echo "<br> ".Demo(5,7);

    //Grade
    echo "<br>";
    echo "Grade : " . Grade($score) . " ";
?>