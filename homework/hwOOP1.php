<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Event</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container m-4 w-[60%]">
        <h4 class="text-center p-[15px] bg-blue-300 ">Online Registration</h4>

        <form action="submit.php" method="POST">
            <div class="d-flex justify-content-between align-items-center">
                <label >First Name</label>
                <input class="form-control w-[40%]" type="text" name="first_name" required>

                <label>Last Name</label>
                <input class="form-control w-[40%]" type="text" name="last_name" required>
            </div>
            
            <label>Email Address</label>
            <input class="form-control" type="email" name="email" required>

            <label>Company (if applicable)</label>
            <input class="form-control" type="text" name="company">

            <label>Physical Address</label>
            <input class="form-control" type="text" name="address" required>

            <label >Date of Birth</label><br>
            <div class="d-flex">
                <select class="form-select" name="month" required>
                    <option value="">Month</option>
                    <?php
                        $months = ['January', 'February', 'March', 'April', 'May', 'June', 
                                'July', 'August', 'September', 'October', 'November', 'December'];
                        foreach($months as $month) {
                            echo "<option value='$month'>$month</option>";
                        }
                    ?>
                </select>

                <select class="form-select" name="day" required>
                    <option value="">Day</option>
                    <?php
                        for ($i = 1; $i <= 31; $i++) {
                            
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>

                <select class="form-select" name="year" required>
                    <option value="">Year</option>
                    <?php
                        for($i = $date ; $i >= 1900; $i++ ){
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select><br><br>
            </div>
            <button class="form-control" type="submit">Submit</button>
        </form>
    </div>
</body>
</html>