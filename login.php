<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="icon" href="https://i.pinimg.com/736x/34/c3/33/34c3332cb8eb6c448bb4544cd7df4bcd.jpg">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<style>
    *{
        padding:0;
        margin: 0;
        box-sizing: border-box;
    }
    body{
        height: 86vh;
        background-image: url('https://img.freepik.com/free-photo/top-view-spa-element-collection_23-2148200205.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }
    form{
        width: 400px;
        padding: 30px;
        border-radius: 10px;
        margin: 100px auto;
        background-color: rgba(255, 252, 252, 0.07);
        box-shadow: rgba(0, 0, 0, 0.2) 0px 5px 15px;
    }
    button{
        padding: 7px 20px;
        border: none;
        border-radius: 5px;
        color: #000;
        background-color: rgba(255, 252, 252, 0.07);
        box-shadow: rgba(0, 0, 0, 0.2) 0px 5px 15px;
    }
    button:hover{
        background-color: rgba(255, 252, 252, 0.42);
    }
</style>
<body>
    <form action="" method="post">
        <h2 class="text-center">Login</h2>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group d-flex justify-content-center mt-2">
            <a href="register.php">Create an account?</a>
        </div>
        <div class="form-group d-flex justify-content-center mt-3">
            <button class="w-100">Login</button>
        </div>
    </form>
</body>
</html>
<?php
include 'connection.php';
session_start();

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $select = "SELECT `email`, `password` FROM `users` WHERE `email` = '$email' AND `password` = '$password'";

        global $con;
        $result = $con->query($select); //execute the query

        if($result->num_rows <= 0){
            echo '
                <div class="alert alert-danger alert-dismissible fade show" id="myAlert" role="alert" style="position:absolute; top: 30px; right:40%; " >
                    <p>Invalid email or password</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ';
        }else{
            $_SESSION['login']=$email;
            header('location: index.php');
        }
    }
?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function(){
            const alert=bootstrap.Alert.getOrCreateInstance(document.getElementById('myAlert'));
            alert.close();
        }, 5000);
    });
</script>