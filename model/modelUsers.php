<?php
include "connection.php";   
class modelUsers {


    public function __construct(){

        $connection = new connection();
        $this->conn= $connection->connect();
    }
    public function register($Fname , $Lname , $email , $password){

        $checkuser  =    $this->conn->prepare("SELECT id FROM users WHERE email= ?");
        $checkuser->execute([$email]);

        $result    =   $checkuser->rowCount();
        if ($result == 0) {  
            $registerUser = $this->conn->prepare("INSERT into users (email, password, role) VALUES (?,?,'user')");
            $registerUser->execute([$email,$password]);
            $iduser  = $this->conn->lastInsertId();
            $sqlCstmr       =   "INSERT INTO client (`idCustomer`, `Fname`, `Lname`) VALUES (?,?,?) ";
            $registerCstmr   =   $this->conn->prepare($sqlCstmr);
            $registerCstmr->execute([$iduser,$Fname,$Lname]);
            header("location: ../signin.php");
              
        } else {  
            die('error'); 
        }  
    }
    public function login($email){
        $selectUser   =   $this->conn->prepare("SELECT * FROM users WHERE email = ?");
        $selectUser->execute([$email]);
        $row            =   $selectUser->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
}