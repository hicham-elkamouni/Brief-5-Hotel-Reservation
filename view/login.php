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

    <!---------------------- navbar section ------------------------->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="#">
            <img src="../img/hotel_logo.png" width="50" height="50" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sign up</a>
                </li>

            </ul>

            <button class="btn btn-success" type="submit">Sign In</button>
        </div>
    </nav>

    <!--------------------------- start of sign in & sign up formsign in & sign up form ---------------------------->

    <section>
        <form class="container1" action="./controller/Users.Controller.php" method="POST">

            <!--------------- sign up form  ------------->

            <div id="sign-up1" class="formbox1">

                <div class="choice1">
                    <h1>SIGN UP</h1>
                </div>

                <div class="input-row1">
                    <label for="">First Name</label>
                    <input type="text" class="login-input1" placeholder="Enter Your First Name" name="firstName">
                </div>

                <div class="input-row1">
                    <label for="">Last Name</label>
                    <input type="text" class="login-input1" placeholder="Enter Your Last Name" name="lastName">
                </div>

                <div class="input-row1">
                    <label for="">Email</label>
                    <input type="text" class="login-input1" placeholder="Enter Your Email" name="email">
                </div>

                <div class="input-row1">
                    <label for="">Password</label>
                    <input type="password " class="login-input1 " placeholder="Enter Your Password" name="password">
                </div>

                <div class="input-row1 ">
                    <label for=" ">Confirm password</label>
                    <input type="password " class="login-input1 " placeholder="Confirm Your Password" name="passwordConfirmation">
                </div>

                <center><button type="submit" class="btn1" name="submit">Sign Up</button></center>
                <center>
                    <p>Already have an account ? <a id="sign_in_btn" class="btn_create_acccount " onclick="sign_in()" href="#sign-in1">Sign In</a></p>
                </center>
            </div>

            <!-------------- login form ---------------->



            <div id="sign-in1" class="formbox1 ">

                <div class="choice1">
                    <h1>SIGN IN</h1>
                </div>

                <div class="input-row1 ">
                    <label for=" ">Email</label>
                    <input type="text " class="login-input1 " placeholder="Enter Your Email ">
                </div>

                <div class="input-row1 ">
                    <label for=" ">Password</label>
                    <input type="password " class="login-input1 " placeholder="Enter Your Password ">
                </div>

                <center><button type="button" class="btn1">Sign In</button></center>
                <center>
                    <p>Not registred yet ?<a id="sign_up_btn" class="btn_create_acccount " onclick="sign_up()" href="#sign-up1"> Create a new account </a></p>
                </center>



            </div>
        </form>
    </section>

    <!------------------------- End of sign in & sign up form ---------------------------->






    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js " integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s " crossorigin="anonymous "></script>
    <script src="../view/assets/js/main.js"></script>
</body>



</html>