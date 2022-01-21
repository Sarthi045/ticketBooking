<?php

include('header.php');

require_once "db_booking.php";

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
    <title> Movies Page </title>
</head>

<body>

    <div class="movies">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center col-sm-12 p-3">
                    <?php
                    $result_table = mysqli_query($conn, "select * from movielist");
                    while ($data = mysqli_fetch_array($result_table)) {
                    ?>
                        <div class="card mx-4" style="width: 15rem;">
                            <img class="card-img" src="./Admin/<?php echo $data['uplodeimg']; ?>" alt="img">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $data['movnm']; ?></h5>
                                <p class="card-text"><?php echo $data['moviedisc']; ?></p>
                            </div>
                            <a href="./booking.php" class="btn text-center mx-4 btn-dark">Book tickets</a>
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