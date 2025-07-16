<?php
    $id = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';
    $name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '';
    $qty = isset($_GET['qty'])  ? htmlspecialchars($_GET['qty']) : '';
    $price = isset($_GET['price']) ? htmlspecialchars($_GET['price']) : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div class='max-w-md mx-auto'>
        <h1 class='text-2xl font-bold mb-4'>Product Detail</h1>

        <div class='bg-white rounded shadow-lg overflow-hidden'>
            <table class='w-full'>
                <thead class='bg-blue-500 text-white'>
                    <tr>
                        <th class='py-2 px-4 text-left'>ID</th>
                        <th class='py-2 px-4 text-left'>Name</th>
                        <th class='py-2 px-4 text-left'>Quantity</th>
                        <th class='py-2 px-4 text-left'>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class='py-2 px-4 border-b'><?php echo $id; ?></td>
                        <td class='py-2 px-4 border-b'><?php echo $name; ?></td>
                        <td class='py-2 px-4 border-b'><?php echo $qty; ?></td>
                        <td class='py-2 px-4 border-b'><?php echo number_format((float)$price,2); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a href="form.php" class='inline-block mt-4 px-4 py-2 bg-blue-500 rounded hover:bg-blue-600 transition-colors'>Back to Form</a>
    </div>
</body>
</html>