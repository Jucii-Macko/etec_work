<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class='p-8'>
    <form action='table.php' method='get' class='text-white px-3 w-[300px] h-[400px] bg-blue-300 rounded'>
        <h1 class='text-black text-[20px] font-bold'>Product</h1>
        <label require for="id">Input ID: </label>
        <input class='text-black w-full rounded' name='id' type="text">
        <label require for="name">Input Name: </label>
        <input class='text-black w-full rounded' name='name' type="text">
        <label require for="qty">Input Qty: </label>
        <input class='text-black w-full rounded' name='qty' type="text">
        <label require for="price">Input Price: </label>
        <input class='text-black w-full rounded' name='price' type="text">

        <button class='px-5 py-2 rounded mt-3 bg-green-300' type='submit'>submit</button>
    </form>
</body>
</html>