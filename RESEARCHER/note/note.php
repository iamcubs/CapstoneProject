<div class="list-group">
  <div class="list-group-item">  
    <i class="fa fa-clipboard" style="color: black;"></i>
    <label style="color: black;">To Do List</label>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#note" style="float: right;"><i class="fa fa-plus"></i> Add Note</button>
  </div>  
</div>  
<div class="modal fade" id="note" role="dialog">
  <div class="modal-dialog" style="width: 340px;">
    <div class="modal-content">
      <div class="modal-body">
        <form method="POST" action="note/add_note.php">
        	<button type="button" class="close" data-dismiss="modal">&times;</button><br/><br/>
        	<input class="form-control" type="text" name="title" placeholder="Note title..." required><br/>
	        <textarea class="form-control" name="body" placeholder="Place your note here..." style="height: 300px;"></textarea><br/>
          <input class="form-control btn btn-info" type="submit" name="note" value="Add Note"/>
        </form>
      </div>
    </div> 
  </div>
</div>
<?php 
  if (isset($_GET['note'])) {
    if ($_GET['note'] == 'success') {
      echo '<div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Note successfuly Added</strong>
        </div>';
    }
  }
  if (isset($_GET['note'])) {
    if ($_GET['note'] == 'delete') {
      echo '<div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Note successfuly Deleted</strong>
        </div>';
    }
  }
  if (isset($_GET['note'])) {
    if ($_GET['note'] == 'edit') {
      echo '<div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Note successfuly Edited</strong>
        </div>';
    }
  }
?>
<?php foreach ($note as $n) { ?>
<?php if ($_SESSION['user_id'] == $n['user_id']) { ?>
<div class="list-group">
  <div class="list-group-item" style="color:black;">
    <a href="note/delete_note.php?note=<?php echo $n['note_id'];?>" style="float: right;" onclick="return confirm('You want to delete this note?')"><span class="fa fa-trash-o"></span></a>
    <a href="note/edit_note.php?note=<?php echo $n['note_id'];?>" style="float: right; margin-right: 10px;"><span class="fa fa-edit"></span></a>
    <?php echo 'Title: '.$n['title'];?>
    <div class="list-group-item">
      <span class="glyphicon glyphicon-tags" style="padding-right: 15px;"></span><?php echo $n['note'];?>  
    </div>
  </div>
</div>
<?php }} ?>
