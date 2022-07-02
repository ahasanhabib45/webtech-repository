<?php
session_start();

    if(isset($_POST['submit'])){

        $uname 		= $_POST['username'];
        $password 	= $_POST['password'];
        if(empty($uname) || empty($password)){
            echo "null submission";

        }
        else{

            if(file_exists('data.json'))
            {
                $filename = 'data.json';
                $data = file_get_contents($filename); //data read from json file
                // print_r($data);
                $users = json_decode($data);  //decode a data

                // print_r($users); //array format data printing
                $message = "<h3 class='text-success'>Showing Buyer & Seller information</h3>";
            }else{
                $message = "<h3 class='text-danger'>JSON file Not found</h3>";
            }

            $login_status = false;
                foreach ($users as $user) { 
                    if($uname ==$user->username && $password ==  $user->password){
                        $login_status = true;
                    }
                }

            }
        
            if($login_status){
                
                if(isset($_POST['checkRemember']))
                {
                  setcookie('checkRemember',$_POST['checkRemember'], time()+3600, '/');
                  setcookie('uname', $uname, time()+315360000, '/');
                  setcookie('password', $password, time()+315360000, '/');
                  setcookie('status', "always ok", time()+315360000, '/');
                  setcookie('role', $_POST['username'], time()+3600, '/');
                  header('location: dashboard.php');
               }
               else
               {
                    setcookie('status', "OK", time()+3600, '/');
                    setcookie('checkRemember', $_POST['checkRemember'], time()-315360000, '/');
                    setcookie('role', $_POST['username'], time()+3600, '/');

                    header('location: dashboard.php');

               }
            }
            else{
                echo "Invalid username/password";
            }
        
            
    }
        else{
            echo "Record not found!"; 
            header("location: login.php");
        }


    


?>