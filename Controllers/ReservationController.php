<?php
    
    session_start();

    include_once '../Models/reservation.model.php';
    include_once '../Classes/Session.class.php';
    include_once '../Classes/Redirect.class.php';


    class ReservationController {
        
        public function book()  {
            $reservation = new Reservation();
            if (isset($_POST['book'])) {
        
                $data = array(
                    'Date_entree' => $_POST['Date_entree'],
                    'Date_sortie' => $_POST['Date_sortie'],
                    // 'id_bien' => $_POST['id_bien'],
                    // 'id_pension' => $_POST['pension']
                );
                $reservation->createNewReservation($data);
            }
        }
        
        public function delete() {
            if (isset($_GET['delete'])) {
                $id = $_GET['delete'];
            
                $reservation->deleteReservation($id);
            }
        }
    }

?> 