<?php 

include '../DataBase/db.php';

class User{

	static public function login($email, $password){
		try{
			$query = "SELECT * FROM users WHERE email = '$email' AND loginPassword= '$password'";
			$stmt = DB::connect()->query($query);
			$user = $stmt->fetch();
			$_SESSION['id'] = $user['userId'];
			return $user;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function createUser($data){
		$stmt = DB::connect()->prepare('INSERT INTO users (userRole, email, loginPassword)
			VALUES ("user",:email,:loginPassword)');
		$stmt->bindParam(':email',$data['email']);
		$stmt->bindParam(':loginPassword',$data['loginPassword']);

		$sq = 'SELECT userId FROM users ORDER BY users.userId DESC LIMIT 1';
		$rq = DB::connect()->query($sq);
		$fetc = $rq->fetch();
		
		$ins = DB::connect()->prepare('INSERT INTO clients (firstName, lastName, userId_fk) VALUES (:firstName, :lastName, :userId_fk)');
		$ins->bindParam('firstName', $data['firstName']);
		$ins->bindParam('lastName', $data['lastName']);
		$ins->bindParam('userId_fk', $lastID);

		$stmt->execute();
		$ins->execute();

	}
}

 ?>