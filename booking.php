<?php
include('header.html');
require_once "db_booking.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['btnconf'])) 
    {
        $seat = $_POST['pr'];
        $seat_conf = "";
        foreach ($seat as $chk1) {
            $seat_conf .= $chk1 . ",";
        }
        $result_seat = mysqli_query($conn, "INSERT INTO seat_booking(seat) VALUES ('" . $seat_conf . "',)") or die('DATABASE ERROR...');

        if ($result_seat == 1) {
            echo '<script>alert("Inserted Successfully")</script>';
        } else {
            echo '<script>alert("Failed To Insert")</script>';
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
    <link rel="stylesheet" href="CSS/booking.css">
    <title>Booking</title>
    <script>
        function checkPrice() {
            var input = document.getElementsByName("pr[]");
            var total = 0;
            for (var i = 0; i < input.length; i++) {
                if (input[i].checked) {

                    total += parseFloat(input[i].value);
                }
            }
            document.getElementsByName("total")[0].value = "" + total.toFixed(2);
        }
    </script>
</head>

<body>

    <div class="content-booking">
        <div class="container  text-center">
            <div class="booking-header">
                <h1> Booking Page </h1>
            </div>

            <div class="form-seat">
                <form action="" method="post">
                    <h2 class="text-success"> SCREEN 1 </h2>
                    <div class="screen-a p-3 border  my-3">
                        <div class="seat-a">
                            <label>A</label><input type="checkbox" id="a1" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="a2" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="a3" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="a4" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="a5" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="a6" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="a7" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="a8" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="a9" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="a10" name="pr[]" value="100" onclick="checkPrice()">
                        </div>
                        <div class="seat-b ">
                            <label>B</label><input type="checkbox" id="b1" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="b2" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="b3" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="b4" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="b5" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="b6" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="b7" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="b8" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="b9" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="b10" name="pr[]" value="100" onclick="checkPrice()">

                        </div>
                        <div class="seat-c ">
                            <label>C</label><input type="checkbox" id="c1" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="c2" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="c3" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="c4" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="c5" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="c6" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="c7" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="c8" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="c9" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="c10" name="pr[]" value="100" onclick="checkPrice()">
                        </div>
                        <div class="seat-d">
                            <label>D</label><input type="checkbox" id="d1" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="d2" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="d3" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="d4" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="d5" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="d6" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="d7" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="d8" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="d9" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="d10" name="pr[]" value="100" onclick="checkPrice()">

                        </div>
                        <div class="seat-e">
                            <label>E</label><input type="checkbox" id="E1" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="E2" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="E3" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="E4" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="E5" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="E6" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="E7" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="E8" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="E9" name="pr[]" value="100" onclick="checkPrice()">
                            <input type="checkbox" id="E10" name="pr[]" value="100" onclick="checkPrice()">

                        </div>
                    </div>
                </form>
            </div>
            <div class="price">
                <div class="pricing ">
                    <h2 class="text-danger"> Ticket Price </h2>
                    <p><b> Ticket Price for 1 Seat : 100 ₹ </b> </p>

                    <p id="add" class="pri"> <b>Total seat price : <input value="0.00" readonly="readonly" type="text" name="total" />
                        </b> </p>

                </div>
                <input type="submit" value="Confirm Booking" name="btnconf" class="btn btn-dark">
            </div>
        </div>
</body>

</html>