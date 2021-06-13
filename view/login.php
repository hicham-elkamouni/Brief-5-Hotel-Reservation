<?php
require "../controller/Users.Controller.php";

if (isset($_SESSION["clientId"])) {
    header("location: ../view/index.php");
}

$users = new UsersController();
$users->login_checking();

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Login Page</title>
</head>

<body>

    <!---------------------- navbar section ------------------------->
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
            <form action="../view/login.php">
                <button class="btn btn-success" type="submit">Sign In</button>
            </form>
        </div>
    </nav>

    <!--------------------------- start of sign in & sign up formsign in & sign up form ---------------------------->

    <section class="sign_in_up">
        <form class="container1" method="POST">

            <!-------------- login form ---------------->

            <div id="sign-in1" class="formbox1 ">

                <div class="choice1">
                    <h1>SIGN IN</h1>
                </div>

                <div class="input-row1 ">
                    <label for=" ">Email</label>
                    <input type="text" class="login-input1 " placeholder="Enter Your Email" name="email">
                </div>

                <div class="input-row1 ">
                    <label for=" ">Password</label>
                    <input type="password" class="login-input1 " placeholder="Enter Your Password" name="loginPassword">
                </div>

                <center><button type="submit" class="btn1" name="signIn">Sign In</button></center>
                <center>
                    <p>Not registred yet ?<a id="sign_up_btn" class="btn_create_acccount " href="#"> Create a new account </a></p>
                </center>

            </div>
        </form>
    </section>

    <!------------------------- End of login form ---------------------------->


    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: black;">

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">By EL KAMOUNI HICHAM © 2021 Copyright:
            <a class="text-white" href="#">www.Northonhotels.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js " integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s " crossorigin="anonymous "></script>
    <script src="../view/assets/js/main.js"></script>
</body>



</html>