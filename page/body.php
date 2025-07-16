<?php 
    $ListPerson = [
        ['id' => 100, 'Name' => 'Nami', 'salary' => '3000$'],
        ['id' => 101, 'Name' => 'Lily', 'salary' => '2500$'],
        ['id' => 102, 'Name' => 'Moko', 'salary' => '4000$'],

    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class='p-8'>
    <h1 class='text-3xl text-blue-700 bg-white p-3'>List Name</h1>
    <table class='w-[100%] bbg-red-400'>
        <thead>
            <tr class="bg-blue-600 text-white">
                <th class="p-2">ID</th>
                <th class="p-2">Name</th>
                <th class="p-2">Salary</th>
                <th class="p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($ListPerson as $item): ?>
                <tr class="text-center border-t border-gray-200 text-red-50">
                    <td class="p-2"><?php echo $item['id']?></td>
                    <td class="p-2"><?php echo $item['Name']?></td>
                    <td class="p-2"><?php echo $item['salary']?></td>

                    <td class="p-2">
                        <button class='px-5 rounded bg-green-600'>Edit</button>
                        <button class='px-5 rounded bg-green-800'>Delete</button>
                    </td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
</body>
</html>