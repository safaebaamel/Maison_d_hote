<?php

    session_start();
    include_once '../Models/user.model.php';
    include_once '../Classes/Session.class.php';
    include_once '../Classes/Redirect.class.php';
    class userController {

        public function register() {
            if (isset($_POST['signup'])) {
                $data = array(
                    'firstName' => $_POST['name'],
                    'lastName' => $_POST['lname'], 
                    'email' => $_POST['email'],
                    'loginPassword' => $_POST['password'],
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
                $email = $_POST['Email'];
                $password = $_POST['Password'];
                $result = User::login($email, $password);
                // var_dump($result['email']);
                // var_dump( $result['userId']);
                if($result['email'] === $_POST['Email'] && $result['loginPassword'] == $_POST['Password']){
                    $_SESSION['logged'] = true;
                    $_SESSION['userId'] = 3;
                    Redirect::to('ClientDash.php');
                    echo $result->Email;
                }else{
                    Session::set('error','Pseudo ou mot de passe est incorrect');
                    echo "sdd";
                    Redirect::to('signin.php');
                }
            }
        }

        static public function logout(){
            session_unset();
            session_destroy();
            header('location: index.php');
        }
    

    }

?>
