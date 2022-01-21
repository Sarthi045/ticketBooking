<?php
if (!isset($_SESSION)) {
    session_start();
    include('header.php');

    if (isset($_SESSION['email'])) {
        require_once "db_booking.php";



        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $checkBox = implode(',', $_POST['pr']);
            if (isset($_POST['btnbook'])) {
                if (mysqli_query($conn, "INSERT INTO seat_booking(seat,coust_id) VALUES('" . $checkBox . "','" . $checkBox . "')")) {

                    die('<script type="text/javascript">alert("Booking done.");location.replace("movies.php")</script>');
                    exit();
                } else {
                    die('<script type="text/javascript">alert("Unable to booking, please retry");location.replace("booking.php")</script>');
                }
            }
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
        <link rel="stylesheet" href="./CSS/booking.css">
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
                                <label>A</label><input type="checkbox" id="a1" name="pr[]" value="1" onclick="checkPrice()">
                                <input type="checkbox" id="a2" name="pr[]" value="2" onclick="checkPrice()">
                                <input type="checkbox" id="a3" name="pr[]" value="3" onclick="checkPrice()">
                                <input type="checkbox" id="a4" name="pr[]" value="4" onclick="checkPrice()">
                                <input type="checkbox" id="a5" name="pr[]" value="5" onclick="checkPrice()">
                                <input type="checkbox" id="a6" name="pr[]" value="6" onclick="checkPrice()">
                                <input type="checkbox" id="a7" name="pr[]" value="7" onclick="checkPrice()">
                                <input type="checkbox" id="a8" name="pr[]" value="8" onclick="checkPrice()">
                                <input type="checkbox" id="a9" name="pr[]" value="9" onclick="checkPrice()">
                                <input type="checkbox" id="a10" name="pr[]" value="10" onclick="checkPrice()">
                            </div>
                            <div class="seat-b ">
                                <label>B</label><input type="checkbox" id="b1" name="pr[]" value="11" onclick="checkPrice()">
                                <input type="checkbox" id="b2" name="pr[]" value="12" onclick="checkPrice()">
                                <input type="checkbox" id="b3" name="pr[]" value="13" onclick="checkPrice()">
                                <input type="checkbox" id="b4" name="pr[]" value="14" onclick="checkPrice()">
                                <input type="checkbox" id="b5" name="pr[]" value="15" onclick="checkPrice()">
                                <input type="checkbox" id="b6" name="pr[]" value="16" onclick="checkPrice()">
                                <input type="checkbox" id="b7" name="pr[]" value="17" onclick="checkPrice()">
                                <input type="checkbox" id="b8" name="pr[]" value="18" onclick="checkPrice()">
                                <input type="checkbox" id="b9" name="pr[]" value="19" onclick="checkPrice()">
                                <input type="checkbox" id="b10" name="pr[]" value="20" onclick="checkPrice()">

                            </div>
                            <div class="seat-c ">
                                <label>C</label><input type="checkbox" id="c1" name="pr[]" value="21" onclick="checkPrice()">
                                <input type="checkbox" id="c2" name="pr[]" value="22" onclick="checkPrice()">
                                <input type="checkbox" id="c3" name="pr[]" value="23" onclick="checkPrice()">
                                <input type="checkbox" id="c4" name="pr[]" value="24" onclick="checkPrice()">
                                <input type="checkbox" id="c5" name="pr[]" value="25" onclick="checkPrice()">
                                <input type="checkbox" id="c6" name="pr[]" value="26" onclick="checkPrice()">
                                <input type="checkbox" id="c7" name="pr[]" value="27" onclick="checkPrice()">
                                <input type="checkbox" id="c8" name="pr[]" value="28" onclick="checkPrice()">
                                <input type="checkbox" id="c9" name="pr[]" value="29" onclick="checkPrice()">
                                <input type="checkbox" id="c10" name="pr[]" value="30" onclick="checkPrice()">
                            </div>
                            <div class="seat-d">
                                <label>D</label><input type="checkbox" id="d1" name="pr[]" value="31" onclick="checkPrice()">
                                <input type="checkbox" id="d2" name="pr[]" value="32" onclick="checkPrice()">
                                <input type="checkbox" id="d3" name="pr[]" value="33" onclick="checkPrice()">
                                <input type="checkbox" id="d4" name="pr[]" value="34" onclick="checkPrice()">
                                <input type="checkbox" id="d5" name="pr[]" value="35" onclick="checkPrice()">
                                <input type="checkbox" id="d6" name="pr[]" value="36" onclick="checkPrice()">
                                <input type="checkbox" id="d7" name="pr[]" value="37" onclick="checkPrice()">
                                <input type="checkbox" id="d8" name="pr[]" value="38" onclick="checkPrice()">
                                <input type="checkbox" id="d9" name="pr[]" value="39" onclick="checkPrice()">
                                <input type="checkbox" id="d10" name="pr[]" value="40" onclick="checkPrice()">

                            </div>
                            <div class="seat-e">
                                <label>E</label><input type="checkbox" id="E1" name="pr[]" value="41" onclick="checkPrice()">
                                <input type="checkbox" id="E2" name="pr[]" value="42" onclick="checkPrice()">
                                <input type="checkbox" id="E3" name="pr[]" value="43" onclick="checkPrice()">
                                <input type="checkbox" id="E4" name="pr[]" value="44" onclick="checkPrice()">
                                <input type="checkbox" id="E5" name="pr[]" value="45" onclick="checkPrice()">
                                <input type="checkbox" id="E6" name="pr[]" value="46" onclick="checkPrice()">
                                <input type="checkbox" id="E7" name="pr[]" value="47" onclick="checkPrice()">
                                <input type="checkbox" id="E8" name="pr[]" value="48" onclick="checkPrice()">
                                <input type="checkbox" id="E9" name="pr[]" value="49" onclick="checkPrice()">
                                <input type="checkbox" id="E10" name="pr[]" value="50" onclick="checkPrice()">
                                <br>
                                <input class="m-3 btn text-center btn-dark" type="submit" name="btnbook" value="BOOK">


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

                </div>
    </body>

    </html>
<?php
} else {
    die('<script type="text/javascript">alert("First you need to Login or Sign up for booking ticket");location.replace("login.php")</script>');
    // header("Location:login.php");
}
?>