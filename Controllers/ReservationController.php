<?php

    include_once '../Models/reservation.model.php';
    include_once '../Classes/Session.class.php';
    include_once '../Classes/Redirect.class.php';

    class reservationController {

        public function stockReservation() {
            if (isset($_POST['book'])) {
                $data = array(
                    'date_entree' => $_POST['date_entree'],
                    'date_sortie' => $_POST['date_sortie'], 
                    'email' => $_POST['email'],
                    'password' => $_POST['password'],
                );
                $result = User::createUser($data);
                if ($result == 'ok') {
                     Session::set('success', 'Client Added');
                     Redirect::to('signin.php');
                } else {
                    echo $result;
                }
            }
        }

   


?>