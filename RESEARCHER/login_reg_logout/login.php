<div id="login" class="modal fade" role="dialog">
	<div class="modal-dialog login_modal_background_color">
		<div class="container-fluid" style=" width: 80%">
			<div class="row">
				<form action="login_page/user_login.php" method="post">
					<div style="margin-bottom: 10px;">	
						<input type="text" name="username" placeholder="Username" required class="user"/>
						<input type="password" name="password" placeholder="Password" required class="user"/>
					</div>
					<div style="padding-bottom: 50px;">
						<div style="float: left;">
							<label>
								<div style="float: left;">
									<input type="checkbox" class="checkbox">  
								</div>
								<div style="margin-left: 15px; color: black;">
									Remember Me
								</div>
							</label>
						</div>	
						<div style="float: right; color: blue;">
							<label><a href="">Forgot password?</a></label>
						</div>
					</div>	
					<div>	
						<input type="submit" name="login" value="Login" class="btn btn-primary form-control">
					</div>
				</form>	
			</div>
		</div>   	
	</div>
</div>				