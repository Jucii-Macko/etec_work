<?php
    $person = [
        'name' => 'Nami',
        'id' => '32',
        'sex' => 'Female' 
    ];

    foreach($person as $key => $per){
        echo $key . " : " . $per . "<br>";
    }

    $student = [
        [
            'name' => 'Mono',
            'id' => '21',
            'sex' => 'Female'
        ],
        [
            'name' => 'Luffy',
            'id' => '22',
            'sex' => 'Male'
        ],
        [
            'name' => 'Zoro',
            'id' => '23',
            'sex' => 'Male'
        ],
        [
            'name' => 'Usopp',
            'id' => '24',
            'sex' => 'Male'
        ]
    ];

    foreach($student as $key => $per){
        echo $key . " : " . $per['name'] . "<br>";
    }
?>
//key in array