<?php 

include '../DataBase/db.php';

class Reservation {

	static public function getAll(){
		$stmt = DB::connect()->prepare('SELECT * FROM reservation');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}

	static public function getReservation($data){
		try{
			$query = 'SELECT * FROM reservation WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $_SESSION['id']));
			$employe = $stmt->fetch(PDO::FETCH_OBJ);
			return $employe;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function add($data){
		$stmt = DB::connect()->prepare('INSERT INTO reservation (date_entrer,date_sortie,chambre_type,chambre_view,pension,enfants,chambre_plus_type,lit_plus_type,age_bebe,age_enfant,age_ado,tarifs)
			VALUES (:date_entrer,:date_sortie,:chambre_type,:chambre_view,:pension,:enfants,:chambre_plus_type,:lit_plus_type,:age_bebe,:age_enfant,:age_ado,:tarifs)');
		$stmt->bindParam(':date_entrer',$data['date_entrer']);
		$stmt->bindParam(':date_sortie',$data['date_sortie']);
		$stmt->bindParam(':chambre_type',$data['chambre_type']);
		$stmt->bindParam(':chambre_view',$data['chambre_view']);
		$stmt->bindParam(':pension',$data['pension']);
		$stmt->bindParam(':enfants',$data['enfants']);
		$stmt->bindParam(':chambre_plus_type',$data['chambre_plus_type']);
		$stmt->bindParam(':lit_plus_type',$data['lit_plus_type']);
		$stmt->bindParam(':age_bebe',$data['age_bebe']);
		$stmt->bindParam(':age_enfant',$data['age_enfant']);
		$stmt->bindParam(':age_ado',$data['age_ado']);
		$stmt->bindParam(':tarifs',$data['tarifs']);

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}
	static public function update($data){
		$stmt = DB::connect()->prepare('UPDATE reservation SET date_entrer= :date_entrer,date_sortie=:date_sortie,chambre_type=:chambre_type,pension=:pension,enfants=:enfants,chambre_plus_type=:chambre_plus_type,lit_plus_type=:lit_plus_type,age_bebe=:age_bebe, age_enfants=:age_enfants, age_ado=:age_ado, tarifs=:tarifs WHERE id=:id');
		$stmt->bindParam(':date_entrer',$data['date_entrer']);
		$stmt->bindParam(':date_sortie',$data['date_sortie']);
		$stmt->bindParam(':chambre_type',$data['chambre_type']);
		$stmt->bindParam(':pension',$data['pension']);
		$stmt->bindParam(':enfants',$data['enfants']);
		$stmt->bindParam(':chambre_plus_type',$data['chambre_plus_type']);
		$stmt->bindParam(':lit_plus_type',$data['lit_plus_type']);
		$stmt->bindParam(':age_bebe',$data['age_bebe']);
		$stmt->bindParam(':age_enfant',$data['age_enfant']);
		$stmt->bindParam(':age_ado',$data['age_ado']);
		$stmt->bindParam(':tarifs',$data['tarifs']);

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
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