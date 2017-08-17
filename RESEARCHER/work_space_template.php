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
		<script src="ckeditor/ckeditor.js"></script>
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
							</ul>
						</div>
					</div>		
	            </div>
	        </nav>		
	    </header>	
		<div class="col-md-offset-3">
			<form method="post">
	    		<textarea class="ckeditor" name="ckeditor"></textarea>
			</form>
		</div>
		<script src="landing_page/js/jquery.js"></script>		
		<script src="landing_page/js/tooltip-viewport.js"></script>		
	    <script src="landing_page/js/bootstrap.min.js"></script>	
		<script src="landing_page/js/wow.min.js"></script>
		<script>wow = new WOW({}).init();</script>	
	</body>
</html>