<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<style>
    form{
        width: 500px;
        padding: 30px;
        margin: 30px;
        background-color: #fff;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        border-radius: 5px;
    }
</style>
<body>
    <form action="" method="post">
        <h1 class="tetx-center text-success">Your Event</h1>
        <div class="bg-success p-2 text-center text-light fs-5 mt-3">Online Registration</div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" class="form-control" name="firstname" id="firstname">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text" class="form-control" name="lastname" id="lastname">
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" id="email">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="">Company</label>
                <input type="text" class="form-control" name="company" id="company">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="">PhysicalAddress</label>
                <input type="text" class="form-control" name="address" id="address">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="">Date of Birth</label>
                <input type="date" class="form-control" name="dob" id="dob" min="2000-01-01" max="2015-12-31">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <button class="btn btn-success w-100" name="submit">Submit</button>
            </div>
        </div>
    </form>
    <table class="table mt-3 text-center" style="table-layout: fixed;">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Company</th>
            <th>Physical Address</th>
            <th>Date of Birth</th>
        </tr>
        <?php
            include 'Employee.php';
            if(isset($_POST['submit'])){
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $email = $_POST['email'];
                $company = $_POST['company'];
                $address = $_POST['address'];
                $dob = $_POST['dob'];
                $employee = new Employee($firstname, $lastname, $email, $company, $address, $dob);
                $employee->output();
            }
        ?>
    </table>
</body>
</html>