<?php
    $name = ['Doe', 'John', 'Emily', 'Alice','Bob', 'Manda'];
    echo 'Element of array : ';
    foreach($name as $nm){
        echo $nm . ' ';
    }

    $number = count($name);
    echo '<br>Number of element in array : ' . $number;

    // push add element
    echo '<br>Element of array after push : ' ;
    array_push($name, 'Jane'); // we can push more than one 
    foreach($name as $nm){
        echo $nm . ' ';
    }

    // pop remove
    echo '<br>Element of array after pop : ' ;
    array_pop($name);
    foreach($name as $nm){
        echo $nm . ' ';
    }

    // shift remove the first element
    echo '<br>Element of array after shift : ' ;
    array_shift($name);
    foreach($name as $nm){
        echo $nm . ' ';
    }

    // unshift add element at the beginning
    echo '<br>Element of array after unshift : ' ;
    array_unshift($name, 'Natan', 'Sarah', 'Ivy');
    foreach($name as $nm){
        echo $nm . ' ';
    }

    // checking
    echo '<br>Element of array after checking : ' ;
    $result = in_array('Jane', $name);
    if($result){
        echo 'Yes';
    }else{
        echo 'No';
    }

    // array merge
    $array1 = ['a', 'b', 'c'];
    $array2 = ['d', 'e', 'f'];
    $array3 = ['g', 'h', 'i'];
    $merge = array_merge($array1, $array2, $array3);
    echo '<br>Element of array after merge : ' ;
    foreach($merge as $nm){
        echo $nm . ' ';
    }


    // slicing 
    $slice = array_slice($merge, 1, 3);
    echo '<br>Element of array after slice : ' ;
    foreach($slice as $nm){
        echo $nm . ' ';
    }

    // array sort
    echo '<br>Element of array after sort : ' ;
    sort($name);
    foreach($name as $nm){
        echo $nm . ' ';
    }

    // reverse sort
    echo '<br>Element of array after reverse sort : ' ;
    rsort($name);
    foreach($name as $nm){
        echo $nm . ' ';
    }
?>