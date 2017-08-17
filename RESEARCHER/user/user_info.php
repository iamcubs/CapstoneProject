<div class="list-group">
    <div class="list-group-item" style="background-color: #65aaf0;">
      <?php foreach ($images as $i) { ?>
      <?php if ($_SESSION['user_id'] == $i['user_id']) { ?>
        <center><img src="user_images/<?php echo $i['filename']; ?>" alt="User Avatar" style="width: 130px; height: 120px;"></center>
      <?php }} ?>  
    </div>
    <div class="list-group-item text-center">
        <?php 
            if (isset($_GET['user'])) {
                if ($_GET['user'] == 'success') {
                    echo '<div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>User Information successfuly Updated</strong>
                        </div>';
                }
            }
            if (isset($_GET['user'])) {
                if ($_GET['user'] == 'image') {
                    echo '<div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Profile Picture Successfuly Change</strong>
                        </div>';
                }
            }
        ?>
        <?php foreach ($users as $u) {
        if ($_SESSION['user_id'] == $u['user_id']) {?>
            <a href="profile.php?<?php echo $u['fname'].$u['lname'];?>" class="list-group-item"><?php echo $u['fname'].' '.$u['lname'];?></a>
            <a href="" data-toggle="modal" data-target="#pic" class="list-group-item"><span class="fa fa-camera-retro"></span> Change Profile Picture</a>
            <a href="user/user_update.php?id=<?php echo $u['user_id'];?>" class="list-group-item"><span class="fa fa-user"></span> Edit User Information</a>
        <?php }} ?>
    </div>
</div>            
<div class="list-group">
    <a href="" data-toggle="modal" data-target="#save" class="list-group-item"><i class="fa fa-save"></i><span> Saved Templates</span></a>  
    <a href="" data-toggle="modal" data-target="#finish" class="list-group-item"><i class="fa fa-thumbs-o-up"></i><span class="info-box-text"> Finished Works</span></a>
    <a href="" data-toggle="modal" data-target="#list" class="list-group-item"><i class="fa fa-files-o"></i><span class="info-box-text"> List of templates</span></a>  
</div>
<div class="modal fade" id="save" role="dialog">
  <div class="modal-dialog" style="width: 340px;">
    <div class="modal-content">
      <div class="modal-body">
        <form method="POST">
            <button type="button" class="close" data-dismiss="modal">&times;</button><br/><br/>
            
        </form>
      </div>
    </div> 
  </div>
</div>
<div class="modal fade" id="finish" role="dialog">
  <div class="modal-dialog" style="width: 340px;">
    <div class="modal-content">
      <div class="modal-body">
        <form method="POST">
            <button type="button" class="close" data-dismiss="modal">&times;</button><br/><br/>
            
        </form>
      </div>
    </div> 
  </div>
</div>
<div class="modal fade" id="list" role="dialog">
  <div class="modal-dialog" style="width: 340px;">
    <div class="modal-content">
      <div class="modal-body">
        <form method="POST">
            <button type="button" class="close" data-dismiss="modal">&times;</button><br/><br/>
            
        </form>
      </div>
    </div> 
  </div>
</div>
<div class="modal fade" id="pic" role="dialog">
  <div class="modal-dialog" style="width: 340px;">
    <div class="modal-content">
      <div class="modal-body">
        <form method="POST" action="user/image.php" enctype="multipart/form-data">
            <button type="button" class="close" data-dismiss="modal">&times;</button><br/><br/>
            <div class="list-group">
              <div class="list-group-item" style="padding-top: 20px; padding-bottom: 20px;">
                <input type="file" name="user_image" accept="image/*" required/>
              </div><br/>  
                <button name="image" class="form-control btn btn-primary"><span class="glyphicon glyphicon-save"></span>  Upload Profile Picture</button> 
                
            </div>  
        </form>
      </div>
    </div> 
  </div>
</div>