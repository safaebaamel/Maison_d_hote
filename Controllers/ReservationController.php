<?php

    include_once '../Models/reservation.model.php';
    include_once '../Classes/Session.class.php';
    include_once '../Classes/Redirect.class.php';

    class ReservationController {
        
        public function book()  {
            $reservation = new Reservation();
            if (isset($_POST['book'])) {
        
                $data = array(
                    'Date_entree' => $_POST['Date_entree'],
                    'Date_sortie' => $_POST['Date_sortie']
                    // 'ID_user' => $_POST['ID_user'],
                    // 'id_bien' => $_POST['id_bien'],
                    // 'id_pension' => $_POST['id_pension']
                );
                echo '<script>alert("ok");</script>';
                $reservation->createNewReservation($data);
            }
        }
        
        public function delete() {
            if (isset($_GET['delete'])) {
                echo '<script>alert("ok");</script>';
                $id = $_GET['delete'];
            
                $reservation->deleteReservation($id);
            }
        }
    }

?> 