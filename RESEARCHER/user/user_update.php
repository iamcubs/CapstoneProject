<?php
	require_once '../function/function.php';   
	if(empty($_SESSION)) session_start();
	$users = return_user();
	$success = $error = $birthErr = "";
	try{	
		if(isset($_POST['update_user'])){
			$lname = $_POST['lname'];
			$fname = $_POST['fname'];
			$mname = $_POST['mname'];
			$addr = $_POST['addr'];
			$bdate = $_POST['bdate'];
			$email = $_POST['email'];
			$cnum = $_POST['cnum'];
			$profession = $_POST['prof'];
			
			if(!empty($lname) &&  !empty($fname) && !empty($mname) && !empty($addr) && !empty($bdate) && !empty($email) && !empty($cnum)){
				$age = date_diff(date_create($bdate), date_create('today'))->y;
				if ($age <= 17) { $birthErr = "Must be 18 and above only"; }
				user_update($fname, $mname, $lname, $addr, $bdate, $email, $cnum, $profession, $_SESSION['user_id']);
				echo $success = " User information successfuly updated!";
				echo '<script>';
				echo 'alert("Successfully Updated ...");';
				echo 'window.location.href="../profile.php?user=success";';
				echo '</script>';
			}else{
				echo $error = " User information not updated!";
			}
		}
	}
	catch(PDOException $error){  
        $message = $error->getMessage();  
    }
?>
<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>MAX RESEARCHER</title>

	    <link href="../landing_page/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="../landing_page/css/font-awesome.min.css">
		<link rel="stylesheet" href="../landing_page/css/animate.css">
		<link href="../landing_page/css/animate.min.css" rel="stylesheet"> 
		<link href="../landing_page/css/tooltip-viewport.css" rel="stylesheet" />	
		<link href="../landing_page/css/style.css" rel="stylesheet" />	
		<link href="../login_page/login.css" rel="stylesheet" />
  	</head>
  	<body style="background-color: #65aaf0;">
  		<header id="header">
	        <nav class="navbar navbar-default navbar-static-top" role="banner">
	            <div class="container">
	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                        <span class="sr-only">Toggle navigation</span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                    </button>
	                   <div class="navbar-brand">
							<a href="index.php"><h1>MAX RESEARCHER</h1></a>
						</div>
	                </div>				
	                <div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li>
					            	<?php foreach ($users as $u) {
									    if ($_SESSION['user_id'] == $u['user_id']) {?>
					                  		<a href="../profile.php?<?php echo $u['fname'].$u['lname'];?>"><?php echo '<span style="padding-right:10px;">Hello</span>'.$u['fname'];?></a>
					            	<?php }} ?>
					            </li>
								<li>
					            	<a href="login_reg_logout/logout.php">Logout</a>
					            </li>
							</ul>
						</div>
					</div>		
	            </div>
	        </nav>		
	    </header>	
  		<div class="container-fluid" style=" width: 50%; padding-top: 40px;">
			<div class="row">
				<form method="post">
					<div style="margin-bottom: 10px;">	
						<?php foreach ($users as $us) { ?>
						<?php if ($_SESSION['user_id']==$us['user_id']) { ?>
						<div>
							<?php  
						        if($success){
						     		echo '<div class="alert alert-info">';
						               	echo '<strong>Success! </strong>';
						                echo $success;  
						            echo '</div>';
						        }
						        if($error){
						     		echo '<div class="alert alert-danger">';
						               	echo '<strong>Sorry! </strong>';
						                echo $error;  
						            echo '</div>';
						        }
						        if($birthErr){
						     		echo '<div class="alert alert-danger">';
						               	echo '<strong>Sorry! </strong>';
						                echo $birthErr;  
						            echo '</div>';
						        }
						    ?>
							<h3>User Information Update</h3><br/>
							<div style="float: left; padding-right: 20px;">
								<input type="text" name="fname" value="<?php echo $us['fname'] ?>" class="user"/ style="width: 180px;">	
							</div>
							<div style="float: left; padding-right: 20px;">
								<input type="text" name="mname" value="<?php echo $us['mname'] ?>" class="user"/ style="width: 150px;">
							</div>
							<div style="float: left;">
								<input type="text" name="lname" value="<?php echo $us['lname'] ?>" class="user"/ style="width: 235px;">
							</div>
						</div>
						<input type="date" name="bdate" value="<?php echo $us['birthdate'] ?>" class="user"/ style="width: 300px;">
						<div>
							<div style="float: left; padding-right: 20px;">
								<input type="email" name="email" value="<?php echo $us['email'] ?>" class="user"/ style="width: 215px;">	
							</div>
							<div style="float: left; padding-right: 20px;">
								<input type="text" name="prof" value="<?php echo $us['profession'] ?>" class="user"/ style="width: 225px;">
							</div>
							<div style="float: left;">
								<input type="text" name="cnum" value="<?php echo $us['contact'] ?>" class="user"/ style="width: 150px;">
							</div>
						</div>
						<input type="text" name="addr" value="<?php echo $us['address'] ?>" class="user"/>
					</div>
					<?php }} ?>
					<div>	
						<input type="submit" name="update_user" value="Update" class="btn btn-primary form-control">
					</div>
				</form>	
			</div>
		</div>   

		<script src="../landing_page/js/jquery.js"></script>		
		<script src="../landing_page/js/tooltip-viewport.js"></script>		
	    <script src="../landing_page/js/bootstrap.min.js"></script>	
		<script src="../landing_page/js/wow.min.js"></script>
		<script>wow = new WOW({}).init();</script>	
	</body>
</html>