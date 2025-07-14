<?php
    function moveFile($name){
        $image = date('ymd_his').''.$_FILES[$name]['name'];
        $tmp_name = $_FILES[$name]['tmp_name'];
        $path = './uploads/'.$image;
        move_uploaded_file($tmp_name, $path);
        return $image;
    }
// if want to use image url we need to change the path
// file is use to upload image
// data mean that we need to post data  
?>