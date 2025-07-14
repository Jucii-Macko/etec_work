<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="icon" href="https://i.pinimg.com/736x/17/22/ce/1722ce9969b7c06dd1e4af66f178811a.jpg">
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
        background-image: url('https://img.freepik.com/free-photo/horizontal-banner-cosmetic-products-with-cucumber_23-2149446590.jpg?semt=ais_items_boosted&w=740');
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
    <form action="" method="post" enctype="multipart/form-data">
        <h2 class="text-center">Register</h2>
        <div class="form-group">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control">
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="sex" class="form-label">Sex</label>
            <select name="sex" id="sex" class="form-select">
                <option value="0">Male</option>
                <option value="1">Female</option>
            </select>
        </div>
        <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="profile" class="form-label">Profile</label>
            <input type="file" name="profile" id="profile" class="form-control">
        </div>
        <div class="form-group d-flex justify-content-center mt-2">
            <a href="login.php">Already have account?</a>
        </div>
        <div class="form-group d-flex justify-content-center mt-3">
            <button class="w-100">Register</button>
        </div>
    </form>
</body>
</html>
<?php
include 'connection.php';
include 'moveFile.php';

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name = $_POST['username'];
        $email = $_POST['email'];
        $sex = $_POST['sex'];
        $password = $_POST['password'];
        if(empty($_FILES['profile']['name'])){
            $insert = "INSERT INTO `users`( `username`, `sex`, `email`, `password`) 
                        VALUES ('$name','$sex','$email','$password')";
        }else{
            $profile = moveFile('profile');
            $insert = "INSERT INTO `users`( `username`, `sex`, `email`, `password`, `profile`) 
                        VALUES ('$name','$sex','$email','$password','$profile')";
        }

        global $con;
        $result = $con->query($insert);
        if($result){
            header('location: login.php');
        }
    }
?>