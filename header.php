<?php
if (!isset($_SESSION)) {
    session_start();
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
    <link rel="stylesheet" href="./CSS/header.css">
    <title> Home Page </title>
</head>

<body>

    <div class="header">
        <div class="navmenu container-fluid">
            <nav class="navbar navbar-expand-sm navbar-dark">
                <ul class="navbar-nav">
                    <li class="nav-item mx-5">
                        <a class="nav-link tens" href="./homePage.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tens" href="./booking.php">Booking</a>
                    </li>

                    <?php
                    if (isset($_SESSION['email'])) {
                                                                                                                                                                                                                                    
                        echo '<li class="nav-item dropdown d-flex">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Hello, ' . $_SESSION["email"] . '</a>
                        <div class="sub-menu dropdown-menu">                        
                        <a class="dropdown-item" href="./logout.php"">logout</a></div></li>';
                    } else {
                        echo ' <li class="nav-item">
                        <a class="nav-link tens" href="./login.php">Login</a>
                    </li> <li class="nav-item">
                    <a class="nav-link tens" href="./signUP.php">Sign up</a>
                </li>';
                    }
                    ?>

                </ul>
            </nav>
        </div>
    </div>

</body>

</html>