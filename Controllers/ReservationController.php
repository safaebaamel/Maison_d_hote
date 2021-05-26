
<?php 

    include_once '../Models/reservation.model.php';
    include_once '../Classes/Session.class.php';
    include_once '../Classes/Redirect.class.php';


class ReservationController{

	public function getAllReservations(){
		$reservation = Reservation::getAll();
		return $reservation;
	}

	public function getOneReservation(){
		if(isset($_POST['id'])){
			$data = array(
				'id' => $_POST['id']
			);
			$res = Reservation::getReservation($data);
			return $res;
		}
	}
	
	public function addReservation(){
		if(isset($_POST['book'])){
			$data = array(
				'date_entrer' => $_POST['Date_entree'],
				'date_sortie' => $_POST['Date_sortie'],
				'chambre_type' => $_POST['reservation'],
				'chambre_view' => $_POST['view'] ?? 'NULL',
				'pension' => $_POST['id_pension'],
				'enfants' => $_POST['child'],
				// 'chambre_plus_type' => $_POST['twoten_kids_add'],
				// 'lit_plus-type' => $_POST['undertwo_kids_add'],
				// 'age_bebe' => $_POST['undertwo_kids'],
				// 'age_enfant' => $_POST['undertwo_kids'],
				// 'age_ado' => $_POST['older_kids'],
				'tarifs' => 100
			);
			$result = Reservation::add($data);
			if($result === 'ok'){
				Session::set('success','Reservation Ajouté');
				Redirect::to('ClientDash.php');
			}else{
				echo $result;
			}
		}
	}

	public function updateReservation(){
		if(isset($_POST['submit'])){
			$data = array(
				'date_entrer' => $_POST['Date_entree'],
				'date_sortie' => $_POST['Date_sortie'],
				'chambre_type' => $_POST['reservation'],
				'chambre_view' => $_POST['view'],
				'pension' => $_POST['id_pension'],
				'enfants' => $_POST['child'],
				'chambre_plus_type' => $_POST['twoten_kids_add'],
				'lit_plus-type' => $_POST['undertwo_kids_add'],
				'age_bebe' => $_POST['undertwo_kids'],
				'age_enfant' => $_POST['undertwo_kids'],
				'age_ado' => $_POST['older_kids'],
				'tarifs' => $_POST['price'],
			);
			$result = Reservation::update($data);
			if($result === 'ok'){
				Session::set('success','Reservation Modifié');
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
				Session::set('success','Reservation Supprimé');
				Redirect::to('ClientDash.php');
			}else{
				echo $result;
			}
		}
	}

}



?>