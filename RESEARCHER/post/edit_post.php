<?php
	require_once '../function/function.php';
	if(empty($_SESSION)) session_start();
	$posts = return_post();
	$users = return_user();
	$success = "";
	$id = $_GET['post'];
	try {
		if (isset($_POST['posting'])) {
			$post = $_POST['post'];
			$privacy = $_POST['privacy'];
			$school = $_POST['school'];
			$dept = $_POST['dept'];
			if (!empty($post)) {
				$date_posted = date("Y/m/d");
				$time_posted = date("h:i:sa");
				post_update($post,$privacy,$school,$dept,$date_posted,$time_posted,$id);
				echo $success = " User information successfuly updated!";
				echo '<script>';
				echo 'alert("Successfully Updated ...");';
				echo 'window.location.href="../profile.php?post=edit";';
				echo '</script>';    
			}	
		}
	} catch (PDOException $e) {
		$message = $e->getMessage(); 
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
  		<div>
			<div style="margin-left: 200px; margin-right: 200px; margin-top: 100px; margin-bottom: 15px;">	
				<form method="POST">
					<h3>Post Update</h3>
					<?php foreach ($posts as $post) { ?>	
					<?php if($post['post_id'] == $id) { ?>
			     	<div class="list-group-item">
						<div style="float: right;">
				     		<select class="form-control" name="privacy">
				     			<option><?php echo $post['status']; ?></option>
					   			<option value="Public">Public</option>
								<option value="Private">Private</option>
				       		</select>
					 	</div>
					 	<div style="float: right; margin-right: 5px;">	
					 		<select class="form-control" name="school">
					 			<option><?php echo $post['school']; ?></option>
					   			<option value="IT">IT</option>
								<option value="Commerce">Commerce</option>
								<option value="Criminology">Criminology</option>
								<option value="HRM">HRM</option>
							</select>
				    	</div>
				    	<div style="float: right; margin-right: 5px;">	
					 		<select class="form-control" name="dept">
					 			<option><?php echo $post['dept']; ?></option>
					   			<option value="UC">UC</option>
								<option value="CIT">CIT</option>
								<option value="USC">USC</option>
							</select>
				    	</div><br/><br/><br/>
						<input type="text" name="post" class="form-control" value="<?php echo $post['post']; ?>">
						<input type="submit" name="posting" class="btn btn-danger" value="Update">
					</div>
					<?php }} ?>	
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