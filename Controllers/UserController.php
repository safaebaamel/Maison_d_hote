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
                $data['email'] = $_POST['email'];
                $result = User::login($data);
                if($result->email === $_POST['email'] && password_verify($_POST['password'],$result->password)){
    
                    $_SESSION['logged'] = true;
                    $_SESSION['email'] = $result->email;
                    Redirect::to('index.php');
    
                }else{
                    Session::set('error','Pseudo ou mot de passe est incorrect');
                    Redirect::to('signin.php');
                }
            }
        }

        static public function logout(){
            session_destroy();
        }
    

    }




?>