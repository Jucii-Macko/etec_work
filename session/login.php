<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<style>
    form{
        width: 500px;
        padding: 30px;
        margin: 30px;
        background-color: #fff;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        border-radius: 5px;
    }

</style>
<body>
    <form action="" method="post">
        <h3 class="text-center">Login</h3>
        <div class="form-group">
            <label for="" class="form-label">Email/Username</label>
            <input type="text" name="name_email" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Password</label>
            <input type="password" name="password" id="" class="form-control">
        </div>
        <div class="form-group">
            <button class="btn btn-primary w-100 mt-3">Login</button>
        </div>
    </form>
</body>
</html>
<?php
    session_start();
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name_email = $_POST['name_email'];
        $password = $_POST['password'];
        if($name_email == 'admin' || 'admin@gmail.com'){
            if($password == 'admin123'){
                $_SESSION['is_login'] = $name_email;
                header('location: index.php');
            }
        }
    }
?>