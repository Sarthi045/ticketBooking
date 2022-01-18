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
    <title>Coustomers Details</title>
</head>

<body>
    <div class="coustomer">
        <div class="container">
            <div class="coustomer-header">
                <h1> Coustomers Details </h1>
            </div>
            <div class="table">
                <table class="table table-success">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <?php
                        $result_table = mysqli_query($conn, "select * from signup_booking");
                        while($data = mysqli_fetch_array($result_table))
                        {                       
                     ?>

                            <tr>
                            <td><?php echo $data['coust_id']; ?></td>
                             <td><?php echo $data['name']; ?></td>
                                <td><?php echo $data['mobile']; ?></td>
                                <td><?php echo $data['email']; ?></td>                                
                            </tr>
                            <?php
                        }
                        ?>
                </table>
                <?php   mysqli_close($conn); ?>
            </div>
        </div>
    </div>
</body>

</html>