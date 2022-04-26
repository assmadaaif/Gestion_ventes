<?php
 class UsersController{
    public function auth(){
        if(isset($_POST['submit'])){

            $username = $_POST['username'];
            $res =User::login($username);
            
        
            if($res->username === $_POST['username'] && $res->password === $_POST['password']){
             $_SESSION['logged']=true;
             $_SESSION['user']= $res->username;       

            Redirect::to('home');
            }else{
                
                session::set('erreur','Pseudo ou mot de passe est incorrect');
                Redirect::to('login');
                
            }
        }

    }
    public function register(){
        if(isset($_POST['submit'])){
            $fullename = $_POST['fullename'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $res=User::createUser($fullename, $username, $password);
                Redirect::to('login');

        }
    }
     static public function logout(){
        session_destroy();
    }


 }



?>