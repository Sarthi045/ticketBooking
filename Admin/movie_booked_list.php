<?php

if (!isset($_SESSION)) {
    session_start();
}

include('admin_header.php');
include('sidebar_admin.php');

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
    <link rel="stylesheet" href="../CSS/admin_panel.css">
    <title> Booked Movie list</title>
</head>

<body>

    <div class="booked-seat">
        <div class="container">
            <h2>Booked Movie list </h2>
            <div class="row">
                <div class="d-flex justify-content-center col-sm-12 p-3">


                    <table class="table table-success">
                    
                    <thead>
                        <tr>
                            <th>Coustomer Name:</th>
                            <th>Coustomer ID:</th>
                            <th>Coustomer's Booked Seat :</th>
                            
                        </tr>
                    </thead>
                        <tr>
                            

                                <?php
                                $result_table = mysqli_query($conn, "SELECT seat_booking.coust_id,seat_booking.seat,signup_booking.name FROM seat_booking INNER JOIN signup_booking WHERE seat_booking.coust_id = signup_booking.coust_id;");
                                while ($data = mysqli_fetch_array($result_table)) {

                                ?>
                                <td><?php echo $data['name']; ?> </td> 
                                <td><?php echo $data['coust_id']; ?> </td>                                    
                                    <td><?php echo $data['seat']; ?><br></td>
                        </tr>
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