<?php
if (!isset($_SESSION)) {
    session_start();
}
include('sidebar_admin.php');
require_once "../db_booking.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['btnmov'])) {

        $movnm = mysqli_real_escape_string($conn, $_POST['movnm']);
        $moviedisc = mysqli_real_escape_string($conn, $_POST['moviedisc']);
        $uplodeimg = mysqli_real_escape_string($conn, $_POST['moviedisc']);

        $data = $_POST;

        if (
            empty($data['movnm']) ||
            empty($data['moviedisc']) ||
            empty($data['moviedisc'])
        ) {
            die('<script type="text/javascript">alert("Please fill all required fields!");location.replace("admin_movie_post.php")</script>');
        }


        if(mysqli_query($conn, "INSERT INTO movielist(movnm,moviedisc,uplodeimg) VALUES('" . $movnm . "', '" . $uplodeimg . "')")) {
            header("location: admin_coustomers.php");
            exit();
        } else {
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
    <link rel="stylesheet" href="../CSS/admin_movie.css">
    <title>Signup</title>
</head>

<body>


    <div class="container-fluid">
        <div class="movie">

            <div class="heading">
                <h1> Movies</h1>
                <h4> Every friday new movie</h4>
            </div>
            <div class="form">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="input-group">
                    <div class="mb-3">

                        <label for="movnm" class="form-label my-2">Movie Name : </label>
                        <input type="text" class="form-control" name="movnm" placeholder="write movie" required>

                        <label for="movnm" class="form-label my-2">Movie Discription : </label>
                        <textarea class="form-control" name="moviedisc" placeholder="write discription"></textarea>

                        <label for="img" class="form-label my-2">Upload Movie Image : </label>
                        <input type="file" class="form-control file" name="uplodeimg" value="" required><br>

                        <button type="submit" name="btnmov" class="btn btn-dark my-3">POST MOVIE</button>
                    </div>
                </form>
            </div>
        </div>

    </div>



</body>

</html>