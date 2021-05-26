<?php
    
    include '../DataBase/db.php';

    class Reservation {

        static  function createNewReservation($data)
        {
            $strm = DB::connect()->prepare('INSERT INTO `reservation`(`Date_entree`, `Date_sortie`, `ID_user`) VALUES
            (:date_entrer,:date_sortie,:id_user) ');
            // INSERT INTO `reservation`(`ID_reservation`, `Date_entree`, `Date_sortie`, `id_pension`, `id_bien`, `id_tarifs`, `ID_user`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')
            $strm->bindParam((':date_entrer'), $data['date_entrer']);
            $strm->bindParam((':date_sortie'), $data['date_sortie']);
            // $strm->bindParam((':id_user'), 1);
            
            // if ($strm->execute()) {
            //     return 'ok';
            // } else {
            //     return 'error';
            // }
            // Redirect::to('ClientDash.php');
        }

        static public function deleteReservation($id)
        {
            $query = DB::connect()->prepare('DELETE FROM reservation WHERE id_user =" . $id');

            $query->execute();
            if($query->execute()){
                return 'ok';
            }else{
                return 'error';
            }
            $query->close();
            $query = null;
        }
    }

?>


