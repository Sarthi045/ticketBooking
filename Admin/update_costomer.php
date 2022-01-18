<?php
require_once "../db_booking.php";
if (isset($_POST['update'])) {
    $coust_id = $user_data['coust_id'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    $result = mysqli_query($mysqli, "UPDATE signup_booking SET name='$name',email='$email',mobile='$mobile' WHERE coust_id=$coust_id");
    header("Location: admin_coustomer.php");
}
$coust_id = $_GET['coust_id'];
$result = mysqli_query($conn, "SELECT * FROM signup_booking WHERE coust_id=$coust_id");
while ($user_data = mysqli_fetch_array($result)) {
    $coust_id = $user_data['coust_id'];
    $name = $user_data['name'];
    $email = $user_data['email'];
    $mobile = $user_data['mobile'];
}
?>
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