<?php
include '../database/Database.php';

class Users extends Database
{

    public function createNewUser($email, $password, $firstName, $lastName)
    {

        // insert into users table 
        $sql = 'INSERT INTO users(email, loginPassword, userRole) VALUES (?, ?, ?)';
        $stmt = $this->getConnexion()->prepare($sql);
        $stmt->execute([$email, $password, "client"]);

        //get the last id from visitor table
        $sql1 = 'SELECT userId FROM users ORDER BY users.userId DESC LIMIT 1';
        $stmt = $this->getConnexion()->query($sql1);
        $row = $stmt->fetch();
        $last_id = $row['userId'];

        // insert into clients table
        $sql2 = 'INSERT INTO clients(firstName, lastName, userId_fk) VALUES (?,?,?)';
        $stmt = $this->getConnexion()->prepare($sql2);
        $stmt->execute([$firstName, $lastName, $last_id]);
    }

    public function checkUserInput($email, $password, $passwordConfirmation, $firstName, $lastName)
    {
        if (!empty($email) && !empty($password) && !empty($passwordConfirmation) && !empty($firstName) && !empty($lastName)) {
            return true;
        } else {
            return false;
        }
    }

    public function checkUserExistence($login_array)
    {
        $sql2 = "SELECT * FROM users WHERE email = :email AND loginPassword= :loginPassword";
        $stmt = $this->getConnexion()->prepare($sql2);
        $stmt->bindParam((':email'), $login_array['email']);
        $stmt->bindParam((':loginPassword'), $login_array['loginPassword']);
        $stmt->execute();
        $stmt_count = $stmt->rowCount();
        // var_dump($stmt->rowCount());
        // die();
        $login_result = $stmt->fetch(PDO::FETCH_ASSOC);
        $result = array('count' => $stmt_count, 'fetched_data' => $login_result);


        // 
        if ($login_result) {
            $userId = $login_result["userId"];
            $sql2 = "SELECT * FROM clients WHERE userId_fk ='$userId'";
            $stmt = $this->getConnexion()->prepare($sql2);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['clientId'] = $row['clientId'];
            $_SESSION['clientFirstName'] = $row['firstName'];
        }
        return ($result);
        /* die($_SESSION['clientFirstName']); */
    }
}
