<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="p-5">
    <?php
        $count = 0;

    ?>
    <div class='m-auto w-[400px] h-[250px] bg-blue-300 p-5'>
        <button onclick="<?php $count--?>" class='text-white text-[20px] px-5 bg-red-700 rounded'>-</button>
        <button onclick="<?php $count++?>" class='text-white text-[20px] px-5 bg-green-700 rounded'>+</button>
        <p class='text=[6rem] '>0</p>
    </div>
</body>
</html>