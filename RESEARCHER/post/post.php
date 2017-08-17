<div>
	<div style="margin-left: 15px; margin-right: 15px; margin-top: 15px; margin-bottom: 15px;">	
		<form action="post/add_post.php" method="POST">
	     	<div>
	     		<small>Share some research...</small>
	     		<div style="float: right;">
		     		<select class="form-control" name="privacy">
			   			<option value="Public">Public</option>
						<option value="Private">Private</option>
		       		</select>
			 	</div>
			 	<div style="float: right; margin-right: 5px;">	
			 		<select class="form-control" name="school">
			   			<option value="IT">IT</option>
						<option value="Commerce">Commerce</option>
						<option value="Criminology">Criminology</option>
						<option value="HRM">HRM</option>
					</select>
		    	</div>
		    	<div style="float: right; margin-right: 5px;">	
			 		<select class="form-control" name="dept">
			   			<option value="UC">UC</option>
						<option value="CIT">CIT</option>
						<option value="USC">USC</option>
					</select>
		    	</div>
		    </div><br/>
			<div class="input-group">
				<input type="text" name="post" class="form-control" placeholder="Share some research..." style="margin-top: 10px;">
			   	<span class="input-group-btn">
			   		<input type="submit" name="posting" class="btn btn-primary" value="Share">
				</span>
			</div>
		</form>
	</div>	
</div>
<hr>
<?php 
	if (isset($_GET['post'])) {
		if ($_GET['post'] == 'success') {
			echo '<div class="alert alert-success">
				  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  	<strong>Post successfuly Added</strong>
				</div>';
		}
	}
	if (isset($_GET['post'])) {
		if ($_GET['post'] == 'delete') {
			echo '<div class="alert alert-success">
				  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  	<strong>Post successfuly Deleted</strong>
				</div>';
		}
	}
	if (isset($_GET['post'])) {
		if ($_GET['post'] == 'edit') {
			echo '<div class="alert alert-success">
				  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  	<strong>Post successfuly Edited</strong>
				</div>';
		}
	}
?>
<div>
	<?php foreach ($user_public as $p) { ?>
	<?php if ($_SESSION['user_id'] == $p['user_id']) { ?>
	<div class="panel panel-info">
      	<div class="panel-heading">
	      	<a href="post/delete_post.php?post=<?php echo $p['post_id']; ?>" style="float: right;" onclick="return confirm('You want to delete this post?')"><span class="fa fa-trash-o"></span></a>
	      	<a href="post/edit_post.php?post=<?php echo $p['post_id']; ?>" style="float: right; margin-right: 10px;"><span class="fa fa-edit"></span></a>
	      	<?php 
	      		echo $p['fname'].' '.$p['mname'].' '.$p['lname'].' - '.$p['profession'].'<br/><small style="color:gray;">Shared status: '.$p['status'].', '.$p['school'].', '.$p['dept'].'</small>'
			;?>	
	    </div>
	    <div class="panel-body">
	      	<div class="list-group">
	      		 <div class="list-group-item" style="color: black;">
	      		 	<span class="fa fa-th"></span> <?php echo $p['post'];?>
	      		 </div>
	      	</div>
	      	<small class="label label-info" style="float: right;">
	      		<span class="fa fa-clock-o"></span> <?php echo $p['date_posted'].', '.$p['time_posted'];?>
	      	</small>
	    </div>
    </div>
    <?php }} ?>
</div> 

