<?php
if(!isset($_SESSION)){
    session_start();
}

include('admin_header.php');
require_once "../db_booking.php";


    


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['btnsub'])) {
       
        $admin = mysqli_real_escape_string($conn, $_POST['admin']);
        $adpsw = mysqli_real_escape_string($conn, $_POST['adpsw']);
       
        $data = $_POST;     

        if (         
            empty($data['admin']) ||
            empty($data['adpsw'])
           
        ) {
            die('<script type="text/javascript">alert("Please fill all required fields!");location.replace("admin_login.php")</script>');
            
        }
       
        $result_admin = mysqli_query($conn, "select * from admin where admin = '" . $admin . "' ") or die('DATABASE ERROR...');
        $res = mysqli_num_rows($result_admin);
        if ($res == 1)
        {
            $_SESSION['admin']=$_POST['admin'];
            header("location: admin_panel.php");
               
        } else 
            
                echo "Error: " . $sql . "" . mysqli_error($conn);
            
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
    <link rel="stylesheet" href="../CSS/login.css">
    <title>admin</title>
</head>
<body id="12">
<div class="container">
        <div class="signup">
            <div class="row">
                <div class="col-sm-12 col-lg-6 col-md-6 col-xl-6">
                    <div class="heading">
                        <h1>Admin Login </h1>
                        
                    </div>
                    <div class="form">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="input-group">
                            <div class="mb-3">
                                
                                <label for="admin" class="form-label my-2">Admin : </label>
                                <input type="text" class="form-control" name="admin" placeholder="Admin username">

                                <label for="adpsw" class="form-label my-2">Password : </label>
                                <input type="password" class="form-control" name="adpsw" placeholder="Admin Password">

                                <button type="submit" name="btnsub" class="btn btn-dark my-3">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
