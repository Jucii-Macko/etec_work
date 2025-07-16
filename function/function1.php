<?php
    function addFunction(){
        $num1 = 20.2;
        $num2 = 30;

        return $num1 + $num2;
    }

    $a = 10;
    echo $a;
    $x = addFunction() + 50;
    echo 'X = '.$x;
    echo '<br> Sum = '.addFunction();

    function mul($a, $b){
        return $a * $b;
    }
    echo '<br> Mul = '.mul(10, 20);
    echo '<br> Y = '.mul(5,8)+5;

    function sub(){
        $i = 50;
        $j = 25;
        echo '<br>'.$i.' - '.$j.' = '.$i-$j;
    }

    sub();
    $k = sub()+5;
    echo '<br> K = '.$k;

    date_default_timezone_set('Asia/Phnom_Penh');

    function div($i , $j){
        if($j == 0){
            $logFile = 'logs/error.log';
            $logDir = dirname($logFile);
            if(!is_dir($logDir)){
                mkdir($logDir, 0777 , true);
            }
            $time = date("Y-m-d H:i:s");
            $errorMessage = "[$time] Division by zero attempted: \$i = $i, \$j = $j".PHP_EOL;
            file_put_contents($logFile, $errorMessage, FILE_APPEND);
            return ;
        }
        echo '<br>'.$i.' / '.$j.' = '.($i/$j);
    }
    div(12,3);
    div(6,0);
?>