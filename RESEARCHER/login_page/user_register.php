<?php
	require_once '../function/function.php'; 
	if(empty($_SESSION)) session_start();
    $user = return_user();
	try{	
		$pass = $cpass = "";
		$lnameErr = $fnameErr = $mnameErr = $addrErr = $age = $password = "";
		$unameErr = $passErr = $passwordErr = $birthErr = $dateStarted = "";
		if(isset($_POST['register'])){
			$lname = $_POST['lname'];
			$fname = $_POST['fname'];
			$mname = $_POST['mname'];
			$addr = $_POST['addr'];
			$bdate = $_POST['bdate'];
			$email = $_POST['email'];
			$cnum = $_POST['cnum'];
			$uname = $_POST['username'];
			$pass = $_POST['password'];
			$cpass = $_POST['cpassword'];
			$profession = $_POST['prof'];
			if(!empty($lname) &&  !empty($fname) && !empty($mname) && !empty($addr) && !empty($bdate) && !empty($email) && !empty($cnum) && !empty($uname)  && !empty($pass) && !empty($cpass)){
				$age = date_diff(date_create($bdate), date_create('today'))->y;
				$password = strlen($pass);
				$dateStarted = date("Y/m/d");
				if ($age <= 17) { $birthErr = "Must be 18 and above only"; }
				if ($password <= 7) { $passErr = "Password must be 8 characters and up"; }
				if($pass == $cpass){
					$status = 1;
					addUser($fname, $mname, $lname, $addr, $bdate, $email, $cnum, $profession ,$uname, $pass, $cpass, $dateStarted, $status);
					header("location: ../index.php");
				}else{
					$passwordErr = "Password do not match";
				}
			}
		}
	}
	catch(PDOException $error){  
        $message = $error->getMessage();  
    }
?>	