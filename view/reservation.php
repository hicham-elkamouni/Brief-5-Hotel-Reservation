<?php
include "../controller/Reservation.Controller.php";
//   $obj=new ReservationController();

$reservation = new ReservationController();
$reservation->addReseravation();

if (!isset($_SESSION["clientId"])) {
    header("location: ../view/login.php");
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Reservation</title>
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="../view/index.php">
            <img src="../view/assets/img/hotel_logo.png" width="50" height="50" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link" href="../view/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../view/reservation.php">Reservation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../view/Register.php">Sign up</a>
                </li>

            </ul>
            <?php
            if (isset($_SESSION["clientId"])) { ?>
                <form action="../controller/logout.php">
                    <span class="mr-3">Hi Mr <?php echo ($_SESSION['clientFirstName']); ?></span>
                    <button class="btn btn-success" type="submit" name="logout">Logout</button>
                </form>
            <?php } else { ?>

                <button class="btn btn-success" type="submit">Sign In</button>
            <?php } ?>

        </div>
    </nav>
    <!----------------  ------------------------>
    <div class="container">
        <div class="py-5 text-center">
            <h2>Hello Mr <?php echo ($_SESSION['clientFirstName']) ?> Choose What u want </h2>
        </div>

        <!-------------------- Start of Side Card ------------------------>

        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Your cart</span>
                    <span class="badge bg-primary rounded-pill">3</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Product name</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Second product</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Third item</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Promo code</h6>
                            <small>EXAMPLECODE</small>
                        </div>
                        <span class="text-success">−$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$20</strong>
                    </li>
                </ul>

                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div>
                </form>
            </div>

            <!------------------------- End Of Side Card ----------------------->





            <!------------------------ Start Of Reservation Form ----------------->
            <div class="col-md-7 col-lg-8 mb-5">
                <!-- <h4 class="mb-3">Billing address</h4> -->
                <form class="needs-validation" method="POST">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Check In Date</label>
                            <input type="date" class="form-control" id="checkInDate" name="checkIn_date" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid check in date is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Check Out Date</label>
                            <input type="date" class="form-control" id="checkOutDate" name="checkOut_date" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid check out date is required.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="localType" class="form-label">Local Type</label>
                            <select class="form-select form-control" id="localType" name="localType" required>
                                <option value="" selected hidden>Choose your local</option>
                                <option value="Appartement" id="Appartement">Appartement</option>
                                <option value="Bungalow" id="Bungalow">Bungalow</option>
                                <option value="Room" id="Room">Room</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                        <div class="col-sm-6" id="place">
                        </div>

                        <div class="col-sm-6" id="place2">
                        </div>

                        <div class="col-sm-6" id="place3">
                        </div>

                        <div class="col-lg-12 row" id="pension_place_container">
                            <div class="col-sm-6" id="pension_place">

                            </div>
                            <div class="col-sm-6" id="pension_half_option">

                            </div>
                        </div>

                        <div class="col-sm-6" id="place4">
                        </div>


                        <div class="col-sm-6">

                        </div>
                        <div class="col-lg-12" id="place5">

                        </div>



                        <hr class="my-4">

                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <button class="w-100 btn btn-primary btn-lg mt-3" type="submit" name="book">BOOK NOW</button>
                                </div>
                                <div class="col-sm">
                                    <button class="w-100 btn btn-success btn-lg mt-3" type="" name="add" onClick="window.location.reload();">ADD ANOTHER LOCAL</button>
                                </div>
                                <div class="col-sm">
                                    <button class="w-100 btn btn-danger btn-lg mt-3" type="">REMOVE LOCAL</button>
                                </div>
                            </div>
                        </div>
                        <!-- <button class="w-100 btn btn-primary btn-lg mt-3" type="submit">BOOK NOW</button> -->
                </form>
            </div>
        </div>

    </div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <script src="form-validation.js"></script>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../view/assets/js/reservation.js"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>