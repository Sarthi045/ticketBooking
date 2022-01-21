<?php
include('admin_header.php');
include('sidebar_admin.php');

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['admin'])) {
?>

    <?php
    require_once "../db_booking.php";

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
        <link rel="stylesheet" href="../CSS/admin_movie.css">
        <title>Movie Details</title>
    </head>

    <body>
        <div class="movie">
            <div class="container">
                <div class="movie-header">
                    <h1> Movie Details </h1>
                </div>

                <div class="row">
                    <div class=" d-flex  justify-content-center col-sm-12">

                        <?php
                        $result_table = mysqli_query($conn, "select * from movielist");
                        while ($data = mysqli_fetch_array($result_table)) {
                        ?>
                            <div class="card mx-3" style="width: 18rem;">
                                <img class="card-img-top" src="<?php echo $data['uplodeimg']; ?>" alt="img">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $data['movnm']; ?></h5>
                                    <p class="card-text"><?php echo $data['moviedisc']; ?></p>
                                   
                                </div>
                                <a href="#" class="btn text-center btn-dark">Book Now</a>
                            </div>
                        <?php
                        }
                        ?>
                        </table>
                        <?php mysqli_close($conn); ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>

    </html>

<?php
} else {
    die('<script type="text/javascript">alert("First you need to Login to access");location.replace("admin_login.php")</script>');
    // header("Location:login.php");
}
