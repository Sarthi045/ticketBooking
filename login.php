<?php
include('header.html');
require_once "db_booking.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['btnsub'])) {
       
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
       
        $data = $_POST;     

        if (         
            empty($data['email']) ||
            empty($data['password'])
           
        ) {                 
            die('<script type="text/javascript">alert("Please fill all required fields!");location.replace("login.php")</script>');
            
        }
       
        $result_email = mysqli_query($conn, "select email from signup_booking where email = '" . $email . "' ") or die('<script type="text/javascript">alert("Email not match!");location.replace("login.php")</script>');
        $result_psw = mysqli_query($conn, "select password from signup_booking where password = '" . $password . "' ") or die('<script type="text/javascript">alert("Password not match!");location.replace("login.php")</script>');
        $res1 = mysqli_num_rows($result_email);
        $res2 = mysqli_num_rows($result_psw);


        if ($res1 == 1 || $res2 == 1)
        {   
            $_SESSION['email']=$_POST['email'];
            header("location: homePage.php");
               
        } else  {

            echo "Error: " . $sql . "" . mysqli_error($conn);
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
    <link rel="stylesheet" href="./CSS/login.css">
    <title>Login</title>
</head>
<body>
<div class="container">
        <div class="signup">
            <div class="row">
                <div class="col-sm-12 col-lg-6 col-md-6 col-xl-6">
                    <div class="heading">
                        <h1> Login </h1>
                        <h4> for easy booking</h4>
                    </div>
                    <div class="form">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="input-group">
                            <div class="mb-3">
                                
                                <label for="email" class="form-label my-2">Email : </label>
                                <input type="email" class="form-control" name="email" placeholder="Your Email">

                                <label for="password" class="form-label my-2">Password : </label>
                                <input type="password" class="form-control" name="password" placeholder="Your Password">

                                <button type="submit" name="btnsub" class="btn btn-dark my-3">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-md-6 col-xl-6">
                <div class="signup my-3 ">
                    <h3 class="text-dark">New Customers</h3>
                    <p> Creating an account has many benefits: check out faster, keep more than one address, track orders and more</p>
                    <form class="input-group">
                        <div class="form">
                            <a class="btn btn-success my-2" href="signup.php">CREATE AN ACCOUNT</a>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
