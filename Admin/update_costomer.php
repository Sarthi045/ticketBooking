<?php
session_start();
if (isset($_SESSION['admin'])) {
?>

    <?php
    require_once "../db_booking.php";
    if (isset($_POST['update'])) 
    {       
        $coust_id = $_POST['coust_id'];
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $result = mysqli_query($conn, "UPDATE signup_booking SET name='$name',email='$email',mobile='$mobile' WHERE coust_id='$coust_id'");
        header("Location: admin_coustomer.php");
    }
    ?>
    <?php
        $coust_id = $_GET['coust_id'];
        $result = mysqli_query($conn, "SELECT * FROM signup_booking WHERE coust_id='$coust_id'");
        while ($user_data = mysqli_fetch_array($result))
        {
            $coust_id = $user_data['coust_id'];
            $name = $user_data['name'];
            $email = $user_data['email'];
            $mobile = $user_data['mobile'];
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
        <a href="admin_panel.php">Home</a>
        <br /><br />

        <form name="update_user" method="post" action="update_costomer.php">
            <table border="0">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value=<?php echo $name; ?>></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value=<?php echo $email; ?>></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input type="text" name="mobile" value=<?php echo $mobile; ?>></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value=<?php echo $_GET['coust_id']; ?>></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>

    </html>
<?php
} else {
    die('<script type="text/javascript">alert("First you need to Login to access");location.replace("admin_login.php")</script>');
    // header("Location:login.php");
}
