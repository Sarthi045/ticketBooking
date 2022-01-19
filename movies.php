<?php


include('header.php');
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
    <link rel="stylesheet" href="./CSS/homePage.css">
    <title> Movies Page </title>
</head>

<body>

    <div class="container">
        <div class="movies">
            <div class="row d-flex">
                <div class="col-sm-12 col-lg-4 col-md-4 col-xl-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="./IMG/spiderman.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Spider-Man: No Way Home</h5>
                            <p class="card-text">Spider-Man, marvel character our friendly neighborhood hero is unmasked and no longer able to separate his normal life from the high-stakes of being a Super Hero.</p>
                            <a href="./booking.php" class="btn text-center btn-dark">Book tickets</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4 col-xl-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="./IMG/pushpa.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Pushpa: The Rise - Part 01</h5>
                            <p class="card-text">Based on the smuggling of red sander trees in Seshachalam forest, Andhra Pradesh, Pushpa tells the story of a lorry driver who is part of the illegal business.</p>
                            <a href="./booking.php" class="btn text-center btn-dark">Book tickets</a>
                        </div>
                    </div>
                </div>
            
            <div class="col-sm-12 col-lg-4 col-md-4 col-xl-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./IMG/the-king-s-man.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">The King`s Man</h5>
                        <p class="card-text">As some of history`s worst criminals and tyrants conspire to start a war that will leave humanity in peril, one man braves the odds and races against time to stop them all.</p>
                        <a href="./booking.php" class="btn text-center btn-dark">Book tickets</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


</body>
</html>
