<?php

session_start();
require_once '../modal/Reservation.Modal.php';
error_reporting(0);

// $Reservation = new Reservation();
// $Reservation->testt($_POST['localType']);

class ReservationController
{

    private $checkInDate;
    private $checkOutDate;
    private $localType;
    private $chambreType;
    private $chambreDoubleType;
    private $vueType;
    private $pensionType;
    private $pensionId;
    private $halfType;

    private $reservationId;
    private $reservationNombre;
    private $bienId;

    private $numberOfChildrens;
    private $ageOfChildrens = array();
    private $childrensOptions = array();
    private $childrensOptionsId = array();



    public function addReseravation()
    {

        $this->checkInDate = $_POST["checkIn_date"] ?? null;
        $this->checkOutDate = $_POST["checkOut_date"] ?? null;
        $this->localType = $_POST["localType"] ?? null;
        $this->chambreType = $_POST["chambreType"] ?? null;
        $this->chambreDoubleType = $_POST["chambreDoubleType"] ?? null;
        $this->vueType = $_POST["vueType"] ?? null;
        $this->pensionType = $_POST["pensionType"] ?? null;
        $this->halfType = $_POST["halfType"] ?? null;
        $this->numberOfChildrens = $_POST["numberOfChildrens"] ?? null; // getting childrens number 

        /* echo var_dump($this->childrensOptionsId);
        echo "<br>";
        foreach($this->childrensOptionsId as $value) {
            echo $value, '<br>';
        } */

        $inserted_data = array(
            'checkIn_date' => $this->checkInDate,
            'checkOut_date' => $this->checkOutDate,
            /* 'clientId_fk' => 29, */
        );

        // ----------- find bienId by name -------------
        if ($this->localType == "Appartement") {

            $this->bienId = 1;
        } else if ($this->localType == "Bungalow") {

            $this->bienId = 2;
        } else {
            if ($this->chambreType == "Simple Room") {
                if ($this->vueType == "internal view") {
                    $this->bienId = 3;
                } else {
                    $this->bienId = 4;
                }
            } else { // double room choice 
                if ($this->chambreDoubleType == "double bed") {
                    if ($this->vueType == "internal view") {
                        $this->bienId = 5;
                    } else { // external view
                        $this->bienId = 6;
                    }
                } else { // 2 simple beds 
                    $this->bienId = 7;
                }
            }
        } // ---------- end of find bienId by name ----------

        $bienId = $this->bienId;

        //------ find pensionId by name -----
        if ($this->pensionType == "Full Pension") {
            $this->pensionId = 1;
        } else if ($this->pensionType == "Whitout Pension") {
            $this->pensionId = 2;
        } else { // ---- half pension choice -----
            if ($this->halfType == "dej") {
                $this->pensionId = 3;
            } else { // ---- halfType = din ----
                $this->pensionId = 4;
            }
        } // ---- end of find pensionId by name -----

        $pensionId = $this->pensionId;

        /* echo ($pensionId); */


        /* -------- getting ages of all childrens and their options --------- */

        $numberOfChildrens = $this->numberOfChildrens;

        for ($i = 1; $i <= $this->numberOfChildrens; $i++) {

            $this->ageOfChildrens[$i] = $_POST["child" . $i];
            $this->childrensOptions[$i] = $_POST["childOption" . $i];

            if ($this->childrensOptions[$i] == "supplement_lit_25%") {

                $this->childrensOptionsId[$i] = 1;
            } else if ($this->childrensOptions[$i] == "sans_supplement_lit") {

                $this->childrensOptionsId[$i] = 2;
            } else if ($this->childrensOptions[$i] == "ajout_50%_chambre_simple") {

                $this->childrensOptionsId[$i] = 3;
            } else if ($this->childrensOptions[$i] == "ajout_chambre_simple") {

                $this->childrensOptionsId[$i] = 4;
            } else if ($this->childrensOptions[$i] == "ajout_70%_chambre_simple+lit") {

                $this->childrensOptionsId[$i] = 5;
            }
        }

        /* ---------------------------- */
        $ageOfChildrens = $this->ageOfChildrens;
        $childrensOptionsId = $this->childrensOptionsId;
        /* ---------------------------- */

        /* if ($_SESSION["counteur"] == NULL) {
            $_SESSION["counteur"] = 0;
            die();
        }

        // die($_SESSION["counteur"]);

        /* if (session_id("counteur") == NULL || !isset($_SESSION)) {
            $_SESSION["counteur"] =
        }
        $_SESSION["counteur"] = array(); */

        if (isset($_POST["add"])) {

            $_SESSION["counteur"]++;

            // var_dump($_SESSION["counteur"]);

            // getting values of those attributes and store it into session variables
            $_SESSION["pensionId" . $_SESSION["counteur"]] = $this->pensionId;
            $_SESSION["bienId" . $_SESSION["counteur"]] = $this->bienId;
            $_SESSION["numberOfChildrens" . $_SESSION["counteur"]] = $this->numberOfChildrens;

            //some arrays [checkIn_checkOut] & [childrensOptionsId] & [ageOfChildrens]  
            $_SESSION["inserted_data" . $_SESSION["counteur"]] = $inserted_data;
            $_SESSION["ageOfChildrens" . $_SESSION["counteur"]] = $ageOfChildrens;
            $_SESSION["childrensOptionsId" . $_SESSION["counteur"]] = $childrensOptionsId;
        } elseif (isset($_POST["book"])) {

            if ($_SESSION["counteur"] > 0) {

                for ($i = 1; $i <= $_SESSION["counteur"]; $i++) {

                    $ReservationModal = new ReservationModal();
                    $fill_reseravation_table = $ReservationModal->insert_in_reservation_table($_SESSION["inserted_data" . $i]);
                    $fill_childrens_table = $ReservationModal->insert_in_childrens_table($_SESSION["ageOfChildrens" . $i], $_SESSION["childrensOptionsId" . $i], $_SESSION["numberOfChildrens" . $i]);
                    $fill_reservations_biens = $ReservationModal->insert_in_reservations_biens_table($_SESSION["bienId" . $i], $_SESSION["pensionId" . $i]);
                }
            }
            /* $_SESSION['localType'] = array();
                $_SESSION['localType'][] = $_POST["localType"];
                echo("session array");
                echo var_dump($_SESSION['localType']); */

            $ReservationModal = new ReservationModal();
            $fill_reseravation_table = $ReservationModal->insert_in_reservation_table($inserted_data);
            $fill_childrens_table = $ReservationModal->insert_in_childrens_table($ageOfChildrens, $childrensOptionsId, $numberOfChildrens);
            $fill_reservations_biens = $ReservationModal->insert_in_reservations_biens_table($bienId, $pensionId);



            $_SESSION["counteur"] = 0;

            clearstatcache();
        }
    }
}
