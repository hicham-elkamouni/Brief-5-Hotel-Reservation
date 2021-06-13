<?php
session_start();

/* if  (!isset($_SESSION["clientId"])){
    header("location: ../view/login.php");
} */

/* $users = new UsersController();
$users->logout_user(); */


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Home Page</title>
</head>

<body>
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
            <div>

                <?php
                if (isset($_SESSION["clientId"])) { ?>
                    <form action="../controller/logout.php">
                        <span class="mr-3">Hello Mr <?php echo ($_SESSION['clientFirstName']); ?></span>
                        <button class="btn btn-success" type="submit" name="logout">Logout</button>
                    </form>
                <?php } else { ?>
                    <form action="../view/login.php">
                        <button class="btn btn-success" type="submit">Sign In</button>
                    </form>
                <?php } ?>
            </div>

        </div>
    </nav>
    <div class="mid">
        <video autoplay muted loop>
            <source class="embed-responsive" src="../view/assets/img/vid.mp4" type="video/mp4">
        </video>
        <div class="hero text-center">
            <h2 class="text-light display-4 font-weight-bold">WELCOME TO NORTHON HOTEL</h2>
            <p class="text-light mx-auto ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias commodi repellat eligendi, praesentium alias totam voluptates </p>
            <a class="mt-5" href="#">Get Started</a>
        </div>
    </div>

    <section class="service py-2">
        <div class="col mx-auto align-items-center">
            <div class="heading text-center pt-5">
                <h2 class="font-weight-bold pb-5 ">Our Services</h2>
            </div>
            <div class="row mx-auto justify-content-center align-items-center text-center container pb-5">
                <div class="one col-lg-4 col-md-4 col-12 w-100">
                    <img class="img-fluid w-100" src="../view/assets/img/appt.jpg" alt="">
                    <h5 class="font-weight-bold">Appartement</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quas odio quis a unde nisi eos veritatis animi laborum quod?</p>
                </div>
                <div class="one col-lg-4 col-md-4 col-12 w-100">
                    <img class="img-fluid w-100" src="../view/assets/img/bungalow.jpg" alt="">
                    <h5 class="font-weight-bold">Bungalow</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quas odio quis a unde nisi eos veritatis animi laborum quod?</p>
                </div>
                <div class="one col-lg-4 col-md-4 col-12 w-100 h-100">
                    <img class="img-fluid w-100" src="../view/assets/img/room.jpg" alt="">
                    <h5 class="font-weight-bold">Room</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quas odio quis a unde nisi eos veritatis animi laborum quod?</p>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: black;">

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">By EL KAMOUNI HICHAM © 2021 Copyright:
            <a class="text-white" href="#">www.Northonhotels.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>




</html>