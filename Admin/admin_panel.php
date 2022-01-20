<?php
include('sidebar_admin.php');
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
        <link rel="stylesheet" href="../CSS/admin_header.css">
        <link rel="stylesheet" href="../CSS/admin_panel.css">
        <title>admin</title>
    </head>

    <body>
        <div class="content">
            <h1> admin panel </h1>
        </div>

    </body>

    </html>
<?php
} else {
    die('<script type="text/javascript">alert("First you need to Login to access");location.replace("admin_login.php")</script>');
    // header("Location:login.php");
}
?>