<?php
include '../modal/Database.php';

class Users extends Database {

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
    
}



?>
