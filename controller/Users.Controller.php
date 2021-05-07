<?php
include_once '../modal/Users.Modal.php';
/* include_once '../view/.php'; */



$Users1 = new Users();

if (isset($_POST['submit'])) {
    if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['passwordConfirmation']) && !empty($_POST['firstName']) && !empty($_POST['lastName'])) {
        if ($_POST['password']!= $_POST['passwordConfirmation'])
 {
     echo("Oops! Password did not match! Try again. ");
 }

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    /* $password = password_hash($_POST['password'], PASSWORD_DEFAULT); */
    $password = $_POST['password'];
    $passwordConfirmation = $_POST['passwordConfirmation'];
    $Users1->createNewUser($email, $password, $firstName, $lastName);

        } else {
            echo ("please fill all your inputs !!");
            return false;
        }
    }
    