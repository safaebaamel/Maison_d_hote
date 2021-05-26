<?php

    include_once '../Models/user.model.php';
    include_once '../Classes/Session.class.php';
    include_once '../Classes/Redirect.class.php';
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
            session_start();
            if(isset($_POST['login'])){
                echo"test";
                $data['Email'] = $_POST['Email'];
                $data['Password'] = $_POST['Password'];
                $result = User::login($data);
                if($result->Email === $_POST['Email'] && $result->Password == $_POST['Password']){
                    $_SESSION['logged'] = true;
                    $_SESSION['Email'] = $result->Email;
                    Redirect::to('ClientDash.php');
                }else{
                    Session::set('error','Pseudo ou mot de passe est incorrect');
                    echo "sdd";
                    Redirect::to('signin.php');
                }
            }
        }

        static public function logout(){
            session_destroy();
            header('location: index.php');
        }
    

    }

?>