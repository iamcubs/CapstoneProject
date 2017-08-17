<?php
	require_once '../function/function.php';
	if(empty($_SESSION)) session_start();
	$notes = return_note();
	$users = return_user();
	$title = $body = $success = "";
	$id = $_GET['note'];
	try {
		if (isset($_POST['note'])) {
			$body = $_POST['body'];
			$title = $_POST['title'];
			if (!empty($body) && !empty($title)) {
				$date_posted = date("Y/m/d");
				$time_posted = date("h:i:sa");
				note_update($title,$body,$date_posted,$time_posted,$id);      
				echo '<script>';
				echo 'alert("Successfully Updated ...");';
				echo 'window.location.href="../profile.php?note=edit";';
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
	  	<div class="list-group" style="margin-top: 60px; margin-right: 200px; margin-left: 200px;">
	  		<h3>Note Update</h3>
	  		<div class="list-group-item">
		  		<?php foreach ($notes as $n) { ?>
				<?php if($n['note_id'] == $id) { ?>
				<form method="POST">
		        	<input class="form-control" type="text" name="title" value="<?php echo $n['title'];?>"><br/>
			        <textarea class="form-control" name="body" style="height: 300px;"><?php echo $n['note'];?></textarea><br/>
		          <input class=" btn btn-info" type="submit" name="note" value="Update Note"/>
		        </form>
		        <?php }} ?>
		    </div>    
		</div>	
	  	<script src="../landing_page/js/jquery.js"></script>		
		<script src="../landing_page/js/tooltip-viewport.js"></script>		
	    <script src="../landing_page/js/bootstrap.min.js"></script>	
		<script src="../landing_page/js/wow.min.js"></script>
		<script>wow = new WOW({}).init();</script>	
	</body>
</html>