<?php
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $s1 = isset($_POST['s1']) ? (float)$_POST['s1'] : 0;
    $s2 = isset($_POST['s2']) ? (float)$_POST['s2'] : 0;
    $s3 = isset($_POST['s3']) ? (float)$_POST['s3'] : 0;
    $s4 = isset($_POST['s4']) ? (float)$_POST['s4'] : 0;

    $total = $s1 + $s2 + $s3 + $s4;

    $avg = $total / 4;


    if ($avg >= 90) {
        $grade = 'A';
    } elseif ($avg >= 80) {
        $grade = 'B';
    } elseif ($avg >= 70) {
        $grade = 'C';
    } elseif ($avg >= 60) {
        $grade = 'D';
    } elseif ($avg >= 50) {
        $grade = 'E';
    } else {
        $grade = 'F';
    }

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
    <div class=' mx-auto'>
        <h1 class='text-2xl font-bold mb-4'>Score </h1>

        <div class='bg-white rounded shadow-lg overflow-hidden'>
            <table class='w-full'>
                <thead class='bg-green-300 text-white'>
                    <tr>
                        <th class='py-2 px-4 text-left'>Name</th>
                        <th class='py-2 px-4 text-left'>Math</th>
                        <th class='py-2 px-4 text-left'>C++</th>
                        <th class='py-2 px-4 text-left'>C#</th>
                        <th class='py-2 px-4 text-left'>Java</th>
                        <th class='py-2 px-4 text-left'>Total</th>
                        <th class='py-2 px-4 text-left'>Average</th>
                        <th class='py-2 px-4 text-left'>Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class='py-2 px-4 border-b'><?php echo $name; ?></td>
                        <td class='py-2 px-4 border-b'><?php echo number_format((float)$s1,2); ?></td>
                        <td class='py-2 px-4 border-b'><?php echo number_format((float)$s2,2);?></td>
                        <td class='py-2 px-4 border-b'><?php echo number_format((float)$s3,2); ?></td>
                        <td class='py-2 px-4 border-b'><?php echo number_format((float)$s4,2); ?></td>
                        <td class='py-2 px-4 border-b'><?php echo number_format((float)$total,2); ?></td>
                        <td class='py-2 px-4 border-b'><?php echo number_format((float)$avg,2); ?></td>
                        <td class='py-2 px-4 border-b text-red-500 font-bold'><?php echo $grade; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a href="form2.php" class='inline-block mt-4 px-4 py-2 bg-yellow-400 rounded hover:bg-yellow-200 transition-colors'>Back to Form</a>
    </div>
</body>
</html>