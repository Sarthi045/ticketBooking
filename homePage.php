<?php
if (!isset($_SESSION)) {
    session_start();
}
include('header.php');
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
    <link rel="stylesheet" href="./CSS/homePage.css">
    <title> Home Page </title>
</head>

<body>
    <div class="homecontent">
        <div class="container-fluid main">
            <div class="content py-5 ">
                <div class="mainimg ">
                    <div class="col-sm text-center text-white ">
                        <h1> Easy Booking with </h1>
                        <h3> MCre Show </h3>
                    </div>
                    <div class="row ">
                        <div class="col-sm-12 col-lg-6 col-md-6 col-xl-6 mt-4 py-5  text-white ">
                            <p>BOOK with us</p>
                            <div class="col-sm-12 col-lg-6 col-md-6 col-xl-6 text-white py-2 ">
                                <a class="nav-link" href="./movies.php">Watch your favourite movie</a>
                                <?php
                                if (isset($_SESSION['email'])) 
                                {
                                   
                                } else {
                                    echo '<a class="nav-link" href="./signUP.php">New User ? Create Account</a>';
                                }
                                ?>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
        </div>


</body>

</html>