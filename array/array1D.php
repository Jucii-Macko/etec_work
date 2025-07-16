<?php
    $array = array(1,2 , 'Hello', 63 , false, true);

    $fruit = ["apple", "banana", "orange", "grape", "pineapple"];
    echo $fruit[2]."<br>";

    // use count($array) to count array

    for($i = 0 ; $i < count($array) ; $i++){
        echo "Array[".$i."]=". $array[$i] . "<br>";
    }

    // echo "<br>Fruits: ";
    foreach($fruit as $index => $fruits){ // it alway store index => element/value
        echo "<br>Fruits[".$index."]=". $fruits . "<br>";
    }
    // as is a sign 

    $image = [
        'https://i.pinimg.com/736x/e4/49/89/e44989e035ef33342d0f1fef4641ed78.jpg',
        'https://i.pinimg.com/736x/64/85/17/6485171370c6c33d0ffb334e89d9b627.jpg',
        'https://i.pinimg.com/736x/64/85/17/6485171370c6c33d0ffb334e89d9b627.jpg',
        'https://i.pinimg.com/736x/5b/03/85/5b0385afb6498fd3b34a840680e4d1dc.jpg',
        'https://i.pinimg.com/736x/cc/0a/72/cc0a721e4dcd0debe504db195fd46b26.jpg'
    ];

    foreach($image as $img){
        echo '<br><img width="150px" src="'.$img.'" ';
    }

    
?>