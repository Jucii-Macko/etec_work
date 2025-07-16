<?php
    setcookie('login', $name_email , time()-60,'/OOP/cookie/');
    header('location:login.php');
?>