<?php  
session_start();

if($_SERVER['REQUEST_METHOD']=='POST') {
  include "../model/UserModel.php";

  $posts=new modelUsers();

  if (isset($_POST['register'])) {

    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $posts->register($Fname , $Lname , $email , $password);

  }

  else if (isset($_POST['login'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $row=$posts->login($email);

    $passworddb   = $row['password'];
    $role         = $row['role'];
    $selectiduser = $row['id'];
    if($passworddb== $password && $role=='admin') {
      $_SESSION['email']  = $email;
      $_SESSION['role']   = $role;

      header("location: ../view/AdminDash.php");
    }
    else if ($passworddb==$password && $role=='user') {
      $_SESSION['id']     = $selectiduser;
      $_SESSION['email']  = $email;
      $_SESSION['role']   = $role;
      $_SESSION['Fname']  = $rows['Fname'];
      $_SESSION['Lname']  = $rows['Lname'];
      header("location:../view/ClientDash.php");
    }else {
      header("location: ../view/signin.php");
    }
  }

}else {
  echo 'Error';
}