<?php
if(!isset($_SESSION)){
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
    <link rel="stylesheet" href="../CSS/admin_header.css">
    <title> Header </title>
</head>

<body>

    <div class="header">
        <div class="navmenu container-fluid">
            <nav class="navbar d-flex justify-content-end ">
                <ul class="navbar-nav">
                    

                    <?php
                    if (isset($_SESSION['admin'])) {

                        echo '<li class="nav-item d-flex">
                        
                        <a class="nav-link tens" href="../Admin/admin_logout.php">Logout</a></li>';
                    } else {
                        echo '<li class="nav-item d-flex">
                        
                        <a class="nav-link tens" href="../Admin/admin_login.php">Log in</a></li>';
                    }
                    ?>


                </ul>
            </nav>
        </div>
    </div>

</body>

</html>