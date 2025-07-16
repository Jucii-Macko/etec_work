<?php
    $country = [
        "Cambodia" => 'Phnom Penh',
        "Vietnam" => 'Ho Chi Minh',
        "Thailand" => 'Bangkok ',
    ];

    foreach($country as $item => $city){
        echo $item . " - " . $city . "<br>";
    }
?>