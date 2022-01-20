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
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="./homePage.php">
                <img src="./IMG/pngtree-m-letter-logo-abstract-vector-image_321123.jpg" width="30" height="30" class="d-inline-block align-top" alt="">  
                MCRe Show </a>
                
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link tens" href="./movies.php">Movies</a>
                    </li>

                    <?php
                    if (isset($_SESSION['email'])) {

                        echo '<li class="nav-item dropdown d-flex">
                        <a class="nav-link">Hello, ' . $_SESSION["email"] . '</a>
                                               
                        <a class="nav-link" href="./logout.php"">logout</a> </li>';
                    } else {
                        echo '<li class="nav-item">
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