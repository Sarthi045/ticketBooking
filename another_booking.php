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

    <?php
    include('header.html');

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "booking";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die('Could not Connect MySql Server:');
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $checkbox1 = $_POST['pr'];
        if ($_POST["Submit"] == "Submit") {
            for ($i = 0; $i < sizeof($checkbox1); $i++) {
                $query = "INSERT INTO seat_booking(seat) VALUES ('" . $checkbox1[$i] . "')";
            }
        }
    }
    ?>
    <div class="content-booking">
        <div class="container  text-center">
            <div class="booking-header">
                <h1> Booking Page </h1>
            </div>
            <div class="seat-table">
                <table class="table table-border">
                    <tr>
                        <td id="seat-1">1</td>
                        <td id="seat-2">2</td>
                        <td id="seat-3">3</td>
                        <td id="seat-4">4</td>
                        <td id="seat-5">5</td>
                        <td id="seat-6">6</td>
                        <td id="seat-7">7</td>
                        <td id="seat-8">8</td>
                        <td id="seat-9">9</td>
                        <td id="seat-10">10</td>
                    </tr>
                    <tr>
                        <td id="seat-11">11</td>
                        <td id="seat-12">12</td>
                        <td id="seat-13">13</td>
                        <td id="seat-14">14</td>
                        <td id="seat-15">15</td>
                        <td id="seat-16">16</td>
                        <td id="seat-17">17</td>
                        <td id="seat-18">18</td>
                        <td id="seat-19">19</td>
                        <td id="seat-20">20</td>
                    </tr>
                   
                    <tr>
                        <td id="seat-21">21</td>
                        <td id="seat-22">22</td>
                        <td id="seat-23">23</td>
                        <td id="seat-24">24</td>
                        <td id="seat-25">25</td>
                        <td id="seat-26">26</td>
                        <td id="seat-27">27</td>
                        <td id="seat-28">28</td>
                        <td id="seat-29">29</td>
                        <td id="seat-30">30</td>
                    </tr>

                </table>
            </div>

</body>

</html>