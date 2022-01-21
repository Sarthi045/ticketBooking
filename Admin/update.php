<?php
require_once '../db_booking.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['update'])) {
        $coust_id = mysqli_real_escape_string($conn, $_POST['coust_id']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);

        $data = $_POST;

        if (
            empty($data['coust_id']) ||
            empty($data['name']) ||
            empty($data['email']) ||
            empty($data['mobile'])

        ) {
            die('<script type="text/javascript">alert("Please fill all required fields!");location.replace("update_costomer.php")</script>');
        }



        $result = mysqli_query($conn, "UPDATE signup_booking SET name='$name',mobile='$mobile',email='$email' WHERE coust_id=$coust_id");

        die('<script type="text/javascript">alert("Update successufuly..");location.replace("admin_coustomers.php")</script>');
        


        mysqli_close($conn);
    }
}
