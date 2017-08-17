<?php
	require_once 'function/function.php';   
	if(empty($_SESSION)) session_start();
	$users = return_user();
	$user_privacy = return_post_privacy();
?>
<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>MAX RESEARCHER</title>

	    <link href="landing_page/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="landing_page/css/font-awesome.min.css">
		<link rel="stylesheet" href="landing_page/css/animate.css">
		<link href="landing_page/css/animate.min.css" rel="stylesheet"> 
		<link href="landing_page/css/tooltip-viewport.css" rel="stylesheet" />	
		<link href="landing_page/css/style.css" rel="stylesheet" />	
  	</head>
  	<body>	
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
					                  		<a href="profile.php?<?php echo $u['fname'].$u['lname'];?>"><?php echo '<span style="padding-right:10px;">Hello</span>'.$u['fname'];?></a>
					            	<?php }} ?>
					            </li>
								<li class="dropdown presentation">
							        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Notification &nbsp;<span class="badge">5</span></a>
							        <ul class="dropdown-menu">
								      	<li><a href="">Admin's Updates</a></li>
								      	<li class="divider"></li>
							         	<li><a href="#">Page 1-2</a></li>
							          	<li class="divider"></li>
							          	<li><a href="">View All</a></li> 
						        	</ul>
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
		<div class="about">
			<div class="container">
				<div class="pull-right">
					<form method="GET">
		    			<div class="input-group">
			    			<div style="float: left; width: 500px;">
			    				<input type="text" name="s" class="form-control" placeholder="Search by School and Department...">
			    			</div>
			    			<div style="float: left;">
			    				<button type="submit" name="search" class="form-control" style="background-color: #1E90FF; color: white;">Search</button>
			    			</div>	
			    		</div>	
		    		</form>
				</div>	
			</div>
			<div class="container" style="padding-top: 30px;">
				<div class="col-md-offset-3" style="color: black;">	
					<?php foreach ($user_privacy as $up) { ?>
						<div class="well" style="background-color: #d0d0e1;">
			    			<h4>	
			    				<a href="" style="color: blue;">
			    					<?php echo $up['fname'].' '.$up['lname'];?>
			    				</a>
			    				<?php echo ' - '.$up['profession'];?><br/>
		    				</h4>
		    				<small>
		    					Shared status - <?php echo $up['status'].', '.$up['school'].', '.$up['dept'];?>
		    				</small>
		    				<hr>
		    				<?php
		            			echo '<i class="glyphicon glyphicon-comment"></i>'.'<span style="margin-left:10px;">'.$up['post'].' '.'<small class="label label-info" style="float:right;"><i class="fa fa-clock-o"></i>'.' '.$up['date_posted'].'</small><span>';
		            		?>
		    			</div>
					<?php } ?>
				</div>	
			</div>			
		</div>
		<script src="landing_page/js/jquery.js"></script>		
		<script src="landing_page/js/tooltip-viewport.js"></script>		
	    <script src="landing_page/js/bootstrap.min.js"></script>	
		<script src="landing_page/js/wow.min.js"></script>
		<script>wow = new WOW({}).init();</script>	
	</body>
</html>