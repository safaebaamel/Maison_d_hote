<?php 
session_start();
include '../DataBase/db.php';

class Reservation {

	static public function getAll(){
		$stmt = DB::connect()->prepare('SELECT * FROM reservations');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}

	static public function getReservation($data){
		try{
			$query = 'SELECT * FROM reservations WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $_SESSION['id']));
			$employe = $stmt->fetch(PDO::FETCH_OBJ);
			return $employe;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function add($data1){
		$stmt = DB::connect()->prepare('INSERT INTO `reservations` (`checkIn_date`, `checkOut_date`) VALUES (:checkIn_date, :checkOut_date);');
		// $stmt->bindParam(':clientId_fk',$data1['clientId_fk']);
		$stmt->bindParam(':checkIn_date',$data1['checkIn_date']);
		$stmt->bindParam(':checkOut_date',$data1['checkOut_date']);

		$stmt->execute();
	}

	static public function delete($data){
		$id = $data['id'];
		try{
			$query = 'DELETE FROM reservation WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			if($stmt->execute()){
				return 'ok';
			}
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

}