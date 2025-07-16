<?php 
    $menuItem = [
        "🏠" => '#',
        "កម្ពុជា" => "#",
        "បច្ចេកវិទ្យា" => '#',
        "ជីវិតនិងសង្គម" => '#',
        "កីឡាដំណើរស្រុក" => '#',
        "AUTO TALK" => '#',
        "PODCAST" => '#',
        "DEALS" => '#'
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Sansation:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');
</style>
<body>
    <nav class='w-[80%] m-auto bg-red-500'>
        <ul>
            <li class="text-white p-4 ">
                <?php foreach($menuItem as $text => $link): ?>
                    <a class='p-3 hover:text-blue-700 focus:text-blue-700 hover:bg-red-600' href="<?php echo $link ?>"><?php echo $text     ?></a>
                <?php endforeach; ?>
            </li>
        </ul>
    </nav>
</body>
</html>