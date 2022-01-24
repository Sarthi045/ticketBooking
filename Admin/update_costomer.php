<?php

session_start();

if (isset($_SESSION['admin'])) {

    require_once '../db_booking.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['update'])) {
            $coust_id  =  mysqli_real_escape_string($conn, $_POST['coust_id']);
            $name      =  mysqli_real_escape_string($conn, $_POST['name']);
            $mobile    =  mysqli_real_escape_string($conn, $_POST['mobile']);
            $email     =  mysqli_real_escape_string($conn, $_POST['email']);

            $result    = mysqli_query($conn, "UPDATE signup_booking SET name='$name',mobile='$mobile',email='$email' WHERE coust_id=$coust_id") or die('<script type="text/javascript">alert("Not Update .. Error! ");location.replace("update_costomer.php")</script>');
            mysqli_close($conn);
        }
    }

?>
    <?php
    require_once '../db_booking.php';
    $coust_id = $_GET['coust_id'];
    $result = mysqli_query($conn, "SELECT * FROM signup_booking WHERE coust_id=$coust_id");
    $res = mysqli_fetch_array($result);
    while ($res) {
        $name = $res['name'];
        $mobile = $res['mobile'];
        $email = $res['email'];
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
        <title> update_costomer </title>
    </head>
    <body>
        
        <div class="container">
            <div class="form ">
                <h1> Update costomer </h1>
                <form action="./Admin/update_costomer.php" method="post" class="input-group">
                    <div class="mb-3">
                        <label for="name" class="form-label my-2">Full Name : </label>
                        <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $name; ?>">
                        <label for="mobile" class="form-label my-2">Mobile Number : </label>
                        <input type="text" class="form-control" name="mobile" placeholder="number" value="<?php echo $mobile; ?>">
                        <label for="email" class="form-label my-2">Email : </label>
                        <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $email; ?>">
                        <input type="hidden" name="coust_id" value="<?php echo $_GET['coust_id']; ?>">
                        <button type="submit" name="update" class="btn btn-dark my-3">Update</button>
                    </div>
                </form>
            </div>
            </form>
        </div>
    </body>

    </html>
<?php
} else {
    die('<script type="text/javascript">alert("First you need to Login to access");location.replace("admin_login.php")</script>');
}
?>