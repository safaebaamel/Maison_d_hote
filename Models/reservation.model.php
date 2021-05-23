<?php
    
    include '../DataBase/db.php';

    class Reservation {

        static public function createNewReservation($data) {

            $query = DB::connect()->prepare('INSERT INTO reservation(Date_entree, Date_sortie) VALUES (:Date_entree, :Date_sortie)');

            $query->bindParam(':date_entree',$data['date_entree']);
            $query->bindParam(':date_sortie',$data['date_sortie']);
            // $query->bindParam(':id_user',$data['id_user']);
            // $query->bindParam(':id_bien',$data['id_bien']);
            // $query->bindParam(':id_pension',$data['id_pension']);

            if($query->execute()){
                return 'ok';
            }else{
                return 'error';
            }
            $query->close();
            $query = null;
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


