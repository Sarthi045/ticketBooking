


<?php
include('header.html');
require_once "db_booking.php";
if($_SERVER["REQUEST_METHOD"] == "POST") {
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
            if (mysqli_query($conn, "INSERT INTO signup_booking(name,mobile,email,password,cpassword) VALUES('" . $name . "', '" . $mobile . "', '" . $email . "', '" . $password . "', '" . $cpassword . "')")) {
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
    <link rel="stylesheet" href="CSS/signup.css">
    <title>Signup</title>
</head>

<body>


    <div class="container-fluid">
        <div class="signup">
            <div class="row">
                <div class="col-sm-12 col-lg-8 col-md-8 col-xl-8 ">
                    <img class ="w-70" src="IMG/seat.jpg" alt="booking">
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4 col-xl-4">
                    <div class="heading">
                        <h1> Create new account</h1>
                        <h4> for booking easy!</h4>
                    </div>
                    <div class="form">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="input-group">
                            <div class="mb-3">
                                <label for="name" class="form-label my-2">Full Name : </label>
                                <input type="text" class="form-control" name="name" placeholder="Your Name">

                                <label for="mobile" class="form-label my-2">Mobile Number : </label>
                                <input type="text" class="form-control" name="mobile" placeholder="Your number">

                                <label for="email" class="form-label my-2">Email : </label>
                                <input type="email" class="form-control" name="email" placeholder="Your Email">

                                <label for="password" class="form-label my-2">Password : </label>
                                <input type="password" class="form-control" name="password" placeholder="Your Password">

                                <label for="cpassword" class="form-label my-2">Confirm Password : </label>
                                <input type="password" class="form-control" name="cpassword" placeholder="Your Password">

                                <button type="submit" name="btnsub" class="btn btn-dark my-3">CREATE ACCOUNT</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


</body>

</html>
