<!-- LOGIN MODAL -->
	<div class="modal fade" id="log_modal" role="dialog">
		<div class="modal-dialog modal-md">
		<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Login to Purchase</h4>
				</div>
				<!-- LOGIN FORM -->
				<div class="modal-body"> 
					<form id="login_form" class="form-horizontal" method="POST" action="authenticate.php">
						<div class="form-group">
							<label class="control-label col-sm-3" for="login_user">Username:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="login_user" name="login_user">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3" for="login_pwd">Password:</label>
							<div class="col-sm-8"> 
								<input type="password" class="form-control" id="login_pwd" name="login_pwd">
							</div>
						</div>
					</form>
				</div>
				<!-- LOGIN FORM -->
				<div class="modal-footer">
					<div class="modal-footer-division1"><span id="login_error"></span></div>
					<div class="modal-footer-division2">
						<label><input type="checkbox"> Remember me </label>
						<input id="login" type="button" name="login" class="btn btn-default" value="Login">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- LOGOUT MODAL -->
	<div class="modal fade" id="logout_modal" role="dialog">
	  	<div class="modal-dialog modal-sm">
		    <!-- Modal content-->
		    <div class="modal-content">
	      		<div class="modal-header">
	        		<button type="button" class="close" data-dismiss="modal">&times;</button>
	        		<h4 class="modal-title">Confirm Logout</h4>
	      		</div>
			    <!-- LOGOUT CONFIRMATION -->
			    <div class="modal-body"> Are you sure you want to logout?</div>
			    <!-- LOGOUT CONFIRMATION -->
			    <div class="modal-footer">
			        <div class="modal-footer-division1"><span id="login_error"></span></div>
			        <div class="modal-footer-division2">
	            		<a href="logout.php"><input id="logout" type="button" name="logout" class="btn btn-default" value="Logout"></a>
	          			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
	        		</div>  
	      		</div>
	    	</div>
	  	</div>
	</div>

<!-- REGISTRATION MODAL -->
<div class="modal fade" id="reg_modal" role="dialog">
    <div class="modal-dialog modal-md">
    <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register to Login</h4>
        </div>
        <!-- REGISTRATION FORM -->
        <div class="modal-body">
          <form id="reg_form" class="form-horizontal" action="register_endpoint.php" method="POST">
            <div class="form-group">
              <label class="control-label col-sm-3" for="first_name">First Name:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="last_name">Last Name:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name">
              </div>
            </div>
             <div class="form-group">
              <label class="control-label col-sm-3" for="email_address">Email Address:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="email_address" name="email_address" placeholder="name@example.com">
              </div>
            </div>
            <div class="form-group">
             <span id="username_error"></span> <label class="control-label col-sm-3" for="reg_user">Userame:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="reg_user" name="reg_user" placeholder="Enter Username"> 
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="reg_pwd">Password:</label>
              <div class="col-sm-8"> 
                <input type="password" class="form-control" id="reg_pwd" name="reg_pwd" placeholder="Enter password">
              </div>
            </div>
            <div class="form-group">
              <span id="pw_error"></span><label class="control-label col-sm-3" for="conf_pwd">Confirm Password:</label>
              <div class="col-sm-8"> 
                <input type="password" class="form-control" id="conf_pwd" name="conf_pwd" placeholder="Confirm password">
              </div>
            </div>
          </form>
      </div>
      <!-- REGISTRATION FORM -->
      <div class="modal-footer">
        <div class="col-sm-offset-2 col-sm-10">
          <input id="reg_button" type="submit" class="btn btn-default" name="register" value="Register" disabled>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>