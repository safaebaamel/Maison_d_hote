<?php // include '..model/connection.php';  
session_start();

if($_SERVER['REQUEST_METHOD']=='POST') {
  include "../model/modelUsers.php";

  $posts=new modelUsers();

/* Sign Up */
  if (isset($_POST['register'])) {

    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $posts->register($Fname , $Lname , $email , $password);

  }

/* Login */
  else if (isset($_POST['login'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];
    /*  */
    /*  */
    $row=$posts->login($email);

    $passworddb   = $row['password'];
    $role         = $row['role'];
    $selectiduser = $row['id'];
    /* if Admin */
    if($passworddb== $password && $role=='admin') {
      $_SESSION['email']  = $email;
      $_SESSION['role']   = $role;

      header("location: ../view/AdminDash.php");
    }
    /* If Customer */
    else if ($passworddb==$password && $role=='user') {
      $_SESSION['id']     = $selectiduser;
      $_SESSION['email']  = $email;
      $_SESSION['role']   = $role;
      /* Get The Information Of Customers */
      $rows=$posts->selectCustmer($selectiduser);
      $_SESSION['Fname']  = $rows['Fname'];
      $_SESSION['Lname']  = $rows['Lname'];
      header("location:../view/ClientDash.php");
    }else {
      header("location: ../view/signin.php");
    }
  }

}else {
  echo 'Error : You Can\'t  Browse This Page';
}