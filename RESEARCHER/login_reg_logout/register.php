<div id="register" class="modal fade" role="dialog">
	<div class="modal-dialog register_modal_background_color">
		<div class="container-fluid" style=" width: 80%">
			<div class="row">
				<form action="login_page/user_register.php" method="post">
					<div style="margin-bottom: 10px;">	
						<div>
							<div style="float: left; padding-right: 20px;">
								<input type="text" name="fname" placeholder="First Name" required class="user"/ style="width: 180px;">	
							</div>
							<div style="float: left; padding-right: 20px;">
								<input type="text" name="mname" placeholder="Middle Name" required class="user"/ style="width: 150px;">
							</div>
							<div style="float: left;">
								<input type="text" name="lname" placeholder="Last Name" required class="user"/ style="width: 235px;">
							</div>
						</div>
						<input type="date" name="bdate" required class="user"/ style="width: 300px; color: #696969;">
						<div>
							<div style="float: left; padding-right: 20px;">
								<input type="email" name="email" placeholder="Email" required class="user"/ style="width: 190px;">	
							</div>
							<div style="float: left; padding-right: 20px;">
								<input type="text" name="prof" placeholder="Profession" required class="user"/ style="width: 225px;">
							</div>
							<div style="float: left;">
								<input type="text" name="cnum" placeholder="Contact Number" required class="user"/ style="width: 150px;">
							</div>
						</div>
						<input type="text" name="addr" placeholder="Address" required class="user"/>
						<input type="text" name="username" placeholder="Username" required class="user"/>
						<input type="password" name="password" placeholder="Password" id="pass1" required class="user"/>
						<span id="confirmMessage" class="confirmMessage"></span>
						<input type="password" name="cpassword" id="pass2" onkeyup="checkPass(); return false;" placeholder="Confirm Password" required class="user"/>
					</div>
					<div>	
						<input type="submit" name="register" value="Register" class="btn btn-primary form-control">
					</div>
				</form>	
			</div>
		</div>   	
	</div>
</div>
<script type="text/javascript">
function checkPass()
{
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    var message = document.getElementById('confirmMessage');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    if(pass1.value == pass2.value){
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
        $("#submit").attr("disabled", "disabled");
    }
}  
</script>									