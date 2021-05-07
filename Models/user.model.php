<?php 

include '../DataBase/db.php';

class User{

	static public function login($data){
		$Email = $data['Email'];
		try{
			$query = 'SELECT * FROM user WHERE Email=:Email';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":Email" => $Email));
			$user = $stmt->fetch(PDO::FETCH_OBJ);
			return $user;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function createUser($data){
		$stmt = DB::connect()->prepare('INSERT INTO user (name,lname,email,password,Status)
			VALUES (:name,:lname,:email,:password,"user")');
		$stmt->bindParam(':name',$data['name']);
		$stmt->bindParam(':lname',$data['name']);
		$stmt->bindParam(':email',$data['email']);
		$stmt->bindParam(':password',$data['password']);

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}
}

 ?>