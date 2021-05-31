<?php 

include "../model/ReservationModel.php";

if(isset($_POST['reserver'])) {
    session_start();
    $reservation =  new ReservationModel();
    $id_client    =   $_SESSION['id'];
    $c_in        =   $_POST['checkin'];
    $c_out    =   $_POST['checkout'];
    $id_r  =   $reservation->reservation($id_client,$c_in,$c_out);
    $c_in       =   strtotime($c_in);
    $c_out      =   strtotime($c_out);
    $reservation->reserve_room($_POST['chamber'],$id_r);
    $reservation->pension($_POST['pension'],$id_r);
    $reservation->kids($_POST['child'],$id_r);
    $reservation->InsertBA($_POST['bientype'],$id_r);
    $nbrOfseconds   =   $c_out - $c_in;
    $nbrOfDays      =   $nbrOfseconds/(60*60*24) ;
    $finalPrice     =   $reservation->bill($nbrOfDays,$id_r);

    header('location:../view/reservation.php');
}









?>