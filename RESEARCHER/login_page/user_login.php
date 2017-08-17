<?php
    try{
        require_once '../function/function.php';
        if(empty($_SESSION)) session_start();
        $mess = "";
        if(isset($_POST["login"])){  
            $username = $_POST['username'];
            $password = $_POST['password'];

            if(!empty($username) && !empty($password)){  
                user_login($username,$password);
            }

            foreach ($user as $u) {
                if ($u['username'] != $username || $u['password'] != $password) {
                    $mess = "Invalid Username or Password";
                }
            }    
        }  
    }  
    catch(PDOException $error){  
        $message = $error->getMessage();  
    }  
?>