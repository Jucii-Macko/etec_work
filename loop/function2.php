<?php
    function info($id, $name , $sex){
        echo "&emsp; $id &emsp; $name &emsp; $sex <br/>";
    }

    info(10001, "Nami", "Female");
    info(10002, "Lily", "Female");
    info(10003, "Moko", "Male");

    function product($id , $qty, $price){
        $total = $price * $qty;
        echo "<br/>Total Products is : $$total<br/>";
    }

    product(10023, 3, 3.4);

?>