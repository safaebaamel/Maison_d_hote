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
            header("location: ../view/signin.php");
              
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

    public function selectCustmer($selectiduser){
        $selectCustmor      = $this->conn->prepare("SELECT * FROM client WHERE idCustomer = ?");
        $selectCustmor->execute([$selectiduser]);
        $rows                =   $selectCustmor->fetch(PDO::FETCH_ASSOC);
        return $rows;
    }





}