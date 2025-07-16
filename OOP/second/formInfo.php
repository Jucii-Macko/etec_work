<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<style>
    form{
        width: 400px;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #ccc;
    }
    .alert{
        position: absolute;
        top: 10px;
        left: 45%;
        animation: drop .2s ease-in-out forwards;
    }
    @keyframes drop{
        0%{
            transform: translateY(-50px);
        }
        100%{
            transform: translateY(0);
        }
    }
</style>
<body>
    <form class="position-relative" action="" method="post" enctype="multipart/form-data">
        <h3 class="text-center">Register</h3>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" name="password" id="password">
        </div>
        <div class="form-group">
            <label for="c-password">Confirm Password</label>
            <input type="text" class="form-control" name="c-password" id="c-password">
        </div>
        <div class="form-group">
            <label for="profile">Profile</label>
            <input type="file" class="form-control" name="profile" id="profile">
        </div>
        <div class="form-group">
            <button class="btn btn-primary w-100 mt-3">Sign Up</button>
        </div>
    </form>

    <table class="table text-center align-middle" style="table-layout:  fixed;">
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Confirm Password</th>
            <th>Profile</th>
            <th>Action</th>
        </tr>
    
    <?php
        date_default_timezone_set('Asia/Phnom_Penh');

        if($_SERVER['REQUEST_METHOD']=="POST"){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $c_password = $_POST['c-password'];
            // $profile = $_POST['profile'];
            if($password == $c_password){
                $profile=date('Y-m-d_H-i-s').'_'.$_FILES['profile']['name'];
                $tmp_name=$_FILES['profile']['tmp_name']; // tmp is temporary
                $path='./upload/'.$profile;
                move_uploaded_file($tmp_name, $path);//(from , to)
                echo '
                    <tr>
                        <td>'.$username.'</td>
                        <td>'.$email.'</td>
                        <td>'.$password.'</td>
                        <td>'.$c_password.'</td>
                        <td><img width="80" height="80" class="rounded-circle" src="./upload/'.$profile.'" alt=""></td>
                        <td>
                            <button class="btn btn-danger">Delete</button>
                            <button class="btn btn-primary">Edit</button>
                        </td>
                    </tr>
                ';
            }else{
                echo'
                    <div class="alert alert-danger" id="myAlert" role="alert"> 
                        Password not match!
                    </div>
                ';
            }
        }
    ?>
    </table>

</body>
<script>
    setTimeout(function() {
        document.getElementById('myAlert').style.display = 'none';
    }, 5000);
</script>
</html>
<!-- //temporary file -->

