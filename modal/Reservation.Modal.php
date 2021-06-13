<?php
include '../database/Database.php';

if(empty(session_id())){
    session_start();
}
class ReservationModal extends Database {

    public function insert_in_reservation_table($inserted_data){
        $sql = "INSERT INTO reservations (checkIn_date,checkOut_date,clientId_fk) VALUES (:checkIn_date,:checkOut_date,:clientId_fk)";
        $stmt = $this->getConnexion()->prepare($sql);
        $stmt->bindParam((':checkIn_date'), $inserted_data['checkIn_date']);
        $stmt->bindParam((':checkOut_date'), $inserted_data['checkOut_date']);
        $stmt->bindParam((':clientId_fk'), $_SESSION['clientId']);
        $stmt->execute();

        return $stmt;
    }

    public function insert_in_childrens_table($ageOfChildrens,$childrensOptionsId,$numberOfChildrens){
        for($i=1 ; $i <= $numberOfChildrens ; $i++){
            $childAge = $ageOfChildrens[$i];
            $childOptionId= $childrensOptionsId[$i];

            $sql1 = "INSERT INTO childrens (childAge, optionId_fk,clientId_fk) VALUES ($childAge,$childOptionId,1)";
            $stmt = $this->getConnexion()->query($sql1);
            
        }
    }

    public function insert_in_reservations_biens_table($bienId,$pensionId){

        //get the last id from reservations table
        $sql1 = 'SELECT reservationId FROM reservations ORDER BY reservations.reservationId DESC LIMIT 1';
        $stmt = $this->getConnexion()->query($sql1);
        $row = $stmt->fetch();
        $last_reservationId = $row['reservationId'];
   

        $sqll = 'INSERT INTO reservations_biens (bienId_fk,pensionId_fk,reservationId_fk) values (:bienId_fk,:pensionId_fk,:reservationId_fk)';
        $stmt2 = $this->getConnexion()->prepare($sqll);
        $stmt2->bindParam(':bienId_fk',$bienId);
        $stmt2->bindParam(':pensionId_fk',$pensionId);
        $stmt2->bindParam(':reservationId_fk',$last_reservationId);
        $stmt2->execute();

    }



}
