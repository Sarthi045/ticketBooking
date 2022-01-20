<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['admin'])) {
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
        <link rel="stylesheet" href="../CSS/admin_sidebar.css">
        <title>admin</title>
    </head>

    <body>
        <div class="sidebar">
            <ul class="navbar-nav">
                <li class="nav-item mx-3">
                    <a class="nav-link tens" href="../Admin/admin_panel.php">ADMIN</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link tens" href="../Admin/admin_coustomers.php">Details</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link tens" href="../Admin/admin_movie_post.php">Post Movie</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link tens" href="../Admin/admin_movie_list_show.php">Movies</a>
                </li>
                <?php
                if (isset($_SESSION['admin'])) {

                    echo '<li class="nav-item  mx-3">
                        <a class="nav-link tens" href="../Admin/admin_logout.php">Logout</a></li>';
                } else {
                    echo '<li class="nav-item  mx-3">
                        <a class="nav-link tens" href="../Admin/admin_login.php">Log in</a></li>';
                }
                ?>
            </ul>
        </div>

    </body>

    </html>
<?php
} else {
    die('<script type="text/javascript">alert("First you need to Login to access");location.replace("admin_login.php")</script>');
    // header("Location:login.php");
}
