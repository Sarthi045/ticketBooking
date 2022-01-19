<?php

if (!isset($_SESSION)) {
    session_start();
}
include('header.php');
require_once "db_booking.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['btnsub'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
        $data = $_POST;

        if (
            empty($data['name']) ||
            empty($data['email']) ||
            empty($data['mobile']) ||
            empty($data['password']) ||
            empty($data['cpassword'])
        ) {
            die('<script type="text/javascript">alert("Please fill all required fields!");location.replace("signUP.php")</script>');
        }
        if ($data['password'] !== $data['cpassword']) {
            die('<script type="text/javascript">alert("Password and Confirm password should match!");location.replace("signUP.php")</script>');
        }
        $result_email = mysqli_query($conn, "select * from signup_booking where email = '" . $email . "' ") or die('DATABASE ERROR...');
        $res = mysqli_num_rows($result_email);
        if ($res == 0) {
            if (mysqli_query($conn, "INSERT INTO signup_booking(name,mobile,email,password,cpassword) VALUES('" . $name . "', '" . $mobile . "', '" . $email . "', '" . md5($password) . "', '" . md5($cpassword) . "')")) {
                header("location: login.php");
                exit();
            } else {
                echo "Error: " . $sql . "" . mysqli_error($conn);
            }
        } else {
            die('<script type="text/javascript">alert("Email address already exists.. please try with different email.");location.replace("signUP.php")</script>');
        }

        mysqli_close($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./CSS/signup.css">
    <title>Signup</title>
</head>

<body>


    <div class="container-fluid">
        <div class="signup">


            <div class="heading">
                <h1> date and time selection </h1>
                <h4> for booking easy!</h4>
            </div>
            <div class="form">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="input-group">
                    <div class="mb-3">
                        <label for="name" class="form-label my-2">Full Name : </label>
                        <input type="text" class="form-control" name="name" placeholder="Your Name">

                        <label for="date" class="form-label my-2">Select Date : </label>
                        <input type="date" class="form-control" name="date">

                        <label for="time" class="form-label my-2">Select time : </label>
                        <input type="time" class="form-control time" name="date">
        

                        <button type="submit" name="btnsub" class="btn btn-dark my-3"> Select Seat</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    </div>
    </div>


</body>

</html>