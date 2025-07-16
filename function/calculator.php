<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post">
        <h3 class="text-center">Calculator</h3>
        <div class="form-group">
            <label for="" class="form-label">Number 1</label>
            <input type="text" name="num1" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Number 1</label>
            <input type="text" name="num1" id="" class="form-control">
        </div>

        <div class="form-group mt-2 d-flex gap-2 justify-content-center">
            <input type="submit" name="op" value="+" class="btn btn-primary">
            <input type="submit" name="op" value="-" class="btn btn-danger">
            <input type="submit" name="op" value="*" class="btn btn-warning">
            <input type="submit" name="op" value="/" class="btn btn-info">
            <input type="submit" name="op" value="%" class="btn btn-success">
        </div>

        <?php echo result() ?>
    </form>
</body>
</html>

<?php 
    function calculator($num1, $num2, $operator){
        switch($operator){
            case '+':{
                return $num1 + $num2;
            }break;
            case '-':{
                return $num1 - $num2;
            }break;
            case '*':{
                return $num1 * $num2;
            }break;
            case '/':{
                if($num2 == 0){
                    return 'Can`t calculator.';
                }
                return $num1 / $num2;
            }break;
            case '%':{
                if($num2 == 0){
                    return 'Can`t calculator.';
                }
                return $num1 % $num2;
            }break;
        }
    }

    function result(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['op'];
            $result = calculator($num1, $num2, $operator);
            return '<h3 class="text-center mt-2" >Result : '.$result.'</h3>';
        }
    }
?>