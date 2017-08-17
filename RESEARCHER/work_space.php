<?php
	require_once 'function/function.php';   
	if(empty($_SESSION)) session_start();
	$users = return_user();
	$user_privacy = return_post_privacy();
	$works = return_work();
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
  		<div>	
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
	    </div>
	    <?php foreach ($works as $w) {
		    echo '<div class="col-md-2 col panel panel-default" style="margin-left: 40px; height: 50px;">'.$w['title'].'
		    	<div class="panel-body">
		    		<textarea hidden>'.
		    			$w['content'].
		    		'</textarea>
		    	</div>
		    </div>';
	    	}
	    ?>
	    <div class="col-md-offset-3 panel panel-default" style="margin-right: 40px;">
			<form method="post" action="work_space/work.php">
				<div class="panel-body" >
		    		<input type="text" name="titles" placeholder="Title" required class="form-control" style="width: 300px;"><br/>
		    			<div id="top"></div>
		    			<div  style="height: 900px;  border: 1px solid gray; box-shadow: 0 0 6px 1px rgba(172,181,194,0.56); padding: 40px; ">
							<div contenteditable="true" id="framed1" style="width: 100%; height: 100%;"></div>
						</div>
						<div id="bottom"></div>
		    	</div>
				<div class="panel-footer">
					<select name="category" class="btn btn-info">
						<option value="BSIT">BSIT</option>
					</select>
					<select name="privacy" class="btn btn-info">
						<option value="Private">Private</option>
						<option value="Public">Public</option>
					</select>
					<input type="submit" name="work" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
		<script>
			// Turn off automatic editor creation first.
			CKEDITOR.disableAutoInline = true;

			CKEDITOR.appendTo( 'framed1', {
					extraPlugins: 'sharedspace',
					sharedSpaces: {
						top: 'top',
						bottom: 'bottom'
					}
				},
			);
		</script>
		<script src="landing_page/js/jquery.js"></script>		
		<script src="landing_page/js/tooltip-viewport.js"></script>		
	    <script src="landing_page/js/bootstrap.min.js"></script>	
		<script src="landing_page/js/wow.min.js"></script>
		<script>wow = new WOW({}).init();</script>	
	</body>
</html>