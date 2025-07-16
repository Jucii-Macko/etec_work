<?php
    $students = [
        [1,'John Doe', 21],
        [2,'Mary Jane', 22],
        [3,'Bob Smith', 23]
        
    ];

    for($row = 0; $row< count($students); $row++){
        for($col = 0; $col< count($students[$row]); $col++){ //count($students[0]); iit is count column in index 0 
            echo $students[$row][$col] . " ";
        }
        echo "<br>";
    }
?>