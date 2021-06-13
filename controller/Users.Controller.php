<?php
include_once '../modal/Users.Modal.php';
/* include_once '../view/.php'; */

/* echo file_get_contents('php://input'); */
session_start();

class UsersController
{

    private $email;
    private $password;

    public function addNewUser()
    {
        if (isset($_POST['signUp'])) {
            if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['passwordConfirmation']) && !empty($_POST['firstName']) && !empty($_POST['lastName'])) {
                if ($_POST['password'] == $_POST['passwordConfirmation']) {
                    $firstName = $_POST['firstName'];
                    $lastName = $_POST['lastName'];
                    $email = $_POST['email'];
                    /* $password = password_hash($_POST['password'], PASSWORD_DEFAULT); */
                    $password = $_POST['password'];
                    $passwordConfirmation = $_POST['passwordConfirmation'];

                    $User = new Users();
                    $User->createNewUser($email, $password, $firstName, $lastName);
                } else {
                    echo ("<script>alert(Oops! Password did not match! Try again.)</script> ");
                }
            } else {
                echo ("please fill all your inputs !!");
                return false;
            }
        }
    }


    public function login_checking()
    {
        if (isset($_POST['signIn'])) {
            if (!empty($_POST['email']) and !empty($_POST['loginPassword'])) {

                $this->email = $_POST['email'];
                $this->password = $_POST['loginPassword'];

                $login_array = array(
                    'email' => $this->email,
                    'loginPassword' => $this->password,
                );

                $User1 = new Users();
                $User1->checkUserExistence($login_array);
                $result = $User1->checkUserExistence($login_array);
                // var_dump($result['count']);
                // die();

                if ($result['count'] == 1) {
                    // $_SESSION["clientId"] = $result['fetched_data']['userId'];
                    // die($_SESSION["clientId"]);
                    header("location: ../view/reservation.php");
                } else {
                    echo '<script>alert("this account doesnt exist")</script>';

                    session_unset();
                }
            } else {
                echo '<script>alert("Some required fields are empty")</script>';
            }
        }
    }

    // public function logout_user(){
    //     if(isset($_POST['logout'])){
    //     session_destroy();
    //     header("location: ../view/index.php");
    //     exit();
    //     }
    // }



}
