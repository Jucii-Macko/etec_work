<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Schedule</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center mb-4">Teacher Schedule</h1>
        
        <div class="row">
            <?php 
            // put the images into array ('profile' => '....') 
            $teacher = [
                ['id' => 1 , 'name' => 'Mr. Dara', 'course' => 'HTML' ,'time' => '8:00 AM'],// call it key id , key name,....
                ['id' => 2 , 'name' => 'Ms. Sreypov', 'course' => 'CSS' ,'time' => '9:00 AM'],
                ['id' => 3 , 'name' => 'Mr. Vuthy', 'course' => 'JS' ,'time' => '10:00 AM'],
                ['id' => 4 , 'name' => 'Ms. Linda', 'course' => 'PHP' ,'time' => '11:00 AM'],
                ['id' => 5 , 'name' => 'Mr. Sokha', 'course' => 'MySQL' ,'time' => '1:00 PM'],
                ['id' => 6 , 'name' => 'Ms. Nita', 'course' => 'Laravel' ,'time' => '2:00 PM'],
                ['id' => 7 , 'name' => 'Mr. Rith', 'course' => 'React' ,'time' => '3:00 PM'],
                ['id' => 8 , 'name' => 'Ms. Pich', 'course' => 'Vue' ,'time' => '4:00 PM'],
                ['id' => 9 , 'name' => 'Mr. Chamroeun', 'course' => 'Angular' ,'time' => '5:00 PM'],
                ['id' => 10 , 'name' => 'Ms. Malis', 'course' => 'Node' ,'time' => '6:00 PM'],
            ];
            
            $img =[
                'https://i.pinimg.com/736x/84/b1/cf/84b1cfe57b0618d58c5d35ea3ae6c225.jpg',
                'https://i.pinimg.com/736x/4a/7b/e8/4a7be891e385b6ae52298cddc301d974.jpg',
                'https://i.pinimg.com/736x/84/b1/cf/84b1cfe57b0618d58c5d35ea3ae6c225.jpg',
                'https://i.pinimg.com/736x/4a/7b/e8/4a7be891e385b6ae52298cddc301d974.jpg',
                'https://i.pinimg.com/736x/84/b1/cf/84b1cfe57b0618d58c5d35ea3ae6c225.jpg',
                'https://i.pinimg.com/736x/4a/7b/e8/4a7be891e385b6ae52298cddc301d974.jpg',
                'https://i.pinimg.com/736x/84/b1/cf/84b1cfe57b0618d58c5d35ea3ae6c225.jpg',
                'https://i.pinimg.com/736x/4a/7b/e8/4a7be891e385b6ae52298cddc301d974.jpg',
                'https://i.pinimg.com/736x/84/b1/cf/84b1cfe57b0618d58c5d35ea3ae6c225.jpg',
                'https://i.pinimg.com/736x/4a/7b/e8/4a7be891e385b6ae52298cddc301d974.jpg',
                
            ];
            foreach($teacher as $index => $value) {
                echo '
                <div class="col-md-3 mb-3">
                    <div class="card" style="width: 15rem;">
                        <img src="'.$img[$index].'" class="card-img-top" alt="Teacher Image">
                        <div class="card-body">
                            <p class="card-text">
                                <strong>Name:</strong> ' . $value['name'] . '<br>
                                <strong>Course:</strong> ' . $value['course'] . '<br>
                                <strong>Time:</strong> ' . $value['time'] . '<br>
                                <strong>ID:</strong> ' . $value['id'] . '
                            </p>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
    
</body>
</html>