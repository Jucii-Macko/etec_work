<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class='p-8'>
    <form action='table2.php' method='post' class='text-white px-3 w-[300px] h-[400px] bg-red-300 rounded'>
        <h1 class='text-black text-[20px] font-bold'>Product</h1>
        <label require for="name">Input Name: </label>
        <input class='text-black w-full rounded' name='name' type="text">
        <label require for="s1">Input Math: </label>
        <input class='text-black w-full rounded' name='s1' type="text">
        <label require for="s2">Input C++: </label>
        <input class='text-black w-full rounded' name='s2' type="text">
        <label require for="s3">Input C#: </label>
        <input class='text-black w-full rounded' name='s3' type="text">
        <label require for="s4">Input Java: </label>
        <input class='text-black w-full rounded' name='s4' type="text">

        <button class='px-5 py-2 rounded mt-3 bg-blue-400' type='submit'>submit</button>
    </form>
</body>
</html>