
<?php 

    include_once '../Models/reservation.model.php';
    include_once '../Classes/Session.class.php';
    include_once '../Classes/Redirect.class.php';


class ReservationController{

	public function getAllReservations(){
		$reservation = Reservation::getAll();
		return $reservation;
	}

    public function addReservation(){
		if(isset($_POST['book'])){
			$data1 = array(
				// 'clientId_fk' => $_SESSION['userId'] ?? ' ',
				'checkIn_date' => $_POST['Date_entree'],
				'checkOut_date' => $_POST['Date_sortie'],
			);
			$data2 = array(
				'chambre_type' => $_POST['reservation'],
				'chambre_view' => $_POST['view'] ?? ' ',
				'pension' => $_POST['id_pension'],
				'enfants' => isset($_POST['child']) ? '1' : '0',
				'chambre_plus_type' => $_POST['twoten_kids_add'] ?? ' ',
				'lit_plus_type' => $_POST['undertwo_kids_add'] ?? ' ',
				'age_bebe' => $_POST['undertwo_kids'] ?? ' ',
				'age_enfant' => $_POST['undertwo_kids'] ?? ' ',
				'age_ado' => $_POST['older_kids'] ?? ' ',
				'tarifs' =>$_POST['hidden_price']
			);
			$result = Reservation::add($data1);
			if($result === 'ok'){
				Session::set('success','Reservation Ajouté');
				Redirect::to('ClientDash.php');
			}else{
				echo $result;
			}
		}
	}

    public function deleteReservation(){
        if(isset($_POST['id'])){
            $data['id'] = $_POST['id'];
            $result = Reservation::delete($data);
            if($result === 'ok'){
                Session::set('error', 'Reservation cancelled!');
                Redirect::to('home');
            }
            else{
                echo $result;
            }
        }
    }

}



?>