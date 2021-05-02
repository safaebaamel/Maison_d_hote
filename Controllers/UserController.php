<?php

    include_once '../Models/user.model.php';
    include_once '../Classes/Session.php';
    include_once '../Classes/Redirect.php';
    class userController {

        public function register() {
            if (isset($_POST['signup'])) {
                $data = array(
                    'name' => $_POST['name'],
                    'lname' => $_POST['lname'],
                    'email' => $_POST['email'],
                    'password' => $_POST['password'],
                );
                $result = User::createUser($data);
                if ($result == 'ok') {
                     Session::set('success', 'Client Added');
                     Redirect::to('signin.php');
                } else {
                    echo $result;
                }

            }
        }

        public function auth(){
            if(isset($_POST['login'])){
                echo"test";
                $data['Email'] = $_POST['Email'];
                $result = User::login($data);
                if($result->Email === $_POST['Email']){
                    $_SESSION['logged'] = true;
                    $_SESSION['Email'] = $result->Email;
                    Redirect::to('reservation.php');
                }else{
                    Session::set('error','Pseudo ou mot de passe est incorrect');
                    echo "<script>alert('yo');</script>";
                    echo "sdd";
                    Redirect::to('signin.php');
                }
            }
        }

        static public function logout(){
            session_destroy();
        }
    

    }




?>