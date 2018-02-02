<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">TANGLAW</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">

				<?php 
			if(isset($_SESSION['login_user'])) {
				if(isset($_SESSION['role']) && $_SESSION['role']=='superuser') { 
				?>
					<ul class="nav navbar-nav navbar-right">
						<!-- Trigger the modal with a button -->
						<li><a> <?php echo "Hello ".$_SESSION['login_user']; ?></a></li>
						<li><a data-toggle="modal" href="#add_reg_modal"><span class="fa fa-user-plus"></span> Manage Users</a></li>
						<li><a data-toggle="modal" href="#logout_modal"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					</ul>
					<?php 
				}
				elseif (isset($_SESSION['role']) && $_SESSION['role']=='admin') {

							
					?>
					<ul class="nav navbar-nav">
						<li><a href="catalog.php">Catalog Administration</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<!-- Trigger the modal with a button -->
						<li><a> <?php echo "Hello ".$_SESSION['login_user']; ?></a></li>
						<li><a data-toggle='modal' class='pointer' id='add_item'><i class="fas fa-plus"></i>Add New Item</a></li>;
						<li><a data-toggle="modal" href="#add_reg_modal"><span class="fa fa-user-plus"></span> Add New User</a></li>
						<li><a data-toggle="modal" href="#logout_modal"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					</ul><?php 
						
					$filter = isset($_GET['category']) ? $_GET['category'] : 'All';
					require 'connection.php';
					echo "<form class='navbar-form navbar-left'><select class='form-control' name='category'><option>All</option>";
					$sql = "SELECT * FROM categories";
					$result = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_assoc($result)){
					$id = $row['id'];
					$category = $row['name'];

					echo $filter == $id ? "<option selected value='$id'>$category</option>" : "<option value='$id'>$category</option>";
					}
					echo "</select>";
					echo "<button class='btn btn-default'>Search</button></form>";

				} 
				else { 
					?>
					<ul class="nav navbar-nav">
						<li><a href="home.php">Home</a></li>
						<li><a href="catalog.php">Catalog</a></li>
						<li><a href="#">Store Locations</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<!-- Trigger the modal with a button -->
						<li><a> <?php echo "Hello ".$_SESSION['login_user']; ?></a></li>
						<li><a href="cart.php"><span class="fa fa-shopping-cart" aria-hidden="true"></span> Cart Items</a></li>
						<li><a data-toggle="modal" href="#logout_modal"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					</ul>
				<?php 
					$filter = isset($_GET['category']) ? $_GET['category'] : 'All';
					require 'connection.php';
					echo "<form class='navbar-form navbar-left'><select class='form-control' name='category'><option>All</option>";
					$sql = "SELECT * FROM categories";
					$result = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_assoc($result)){
					$id = $row['id'];
					$category = $row['name'];

					echo $filter == $id ? "<option selected value='$id'>$category</option>" : "<option value='$id'>$category</option>";
					}
					echo "</select>";
					echo "<button class='btn btn-default'>Search</button></form>";
				} 
			} 
			else { 
				?>
				<ul class="nav navbar-nav">
					<li><a href="home.php">Home</a></li>
					<li><a href="catalog.php">Catalog</a></li>
					<li><a href="#">Store Locations</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<!-- Trigger the modal with a button -->
					<li><a data-toggle="modal" href="#reg_modal"><span class="glyphicon glyphicon-user"></span> Register</a></li>
					<li><a data-toggle="modal" href="#log_modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
				<?php 
				$filter = isset($_GET['category']) ? $_GET['category'] : 'All';
					require 'connection.php';
					echo "<form class='navbar-form navbar-left'><select class='form-control' name='category'><option>All</option>";
					$sql = "SELECT * FROM categories";
					$result = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_assoc($result)){
					$id = $row['id'];
					$category = $row['name'];

					echo $filter == $id ? "<option selected value='$id'>$category</option>" : "<option value='$id'>$category</option>";
					}
					echo "</select>";
					echo "<button class='btn btn-default'>Search</button></form>";
			} 
				?>
		</div>
	</div>
</nav>

<!-- ADD ADMIN USER -->
<div class="modal fade" id="add_reg_modal" role="dialog">
    <div class="modal-dialog modal-md">
    <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New User</h4>
        </div>
        <!-- REGISTRATION FORM -->
        <div class="modal-body">
          <form id="add_reg_form" class="form-horizontal" action="adduser_endpoint.php" method="POST">
            <div class="form-group">
              <label class="control-label col-sm-3" for="add_first_name">First Name:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="add_first_name" name="add_first_name" placeholder="Enter First Name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="add_last_name">Last Name:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="add_last_name" name="add_last_name" placeholder="Enter Last Name">
              </div>
            </div>
             <div class="form-group">
              <label class="control-label col-sm-3" for="add_email_address">Email Address:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="add_email_address" name="add_email_address" placeholder="name@example.com">
              </div>
            </div>
            <div class="form-group">
             <span id="add_username_error"></span> <label class="control-label col-sm-3" for="add_reg_user">Userame:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="add_reg_user" name="add_reg_user" placeholder="Enter Username"> 
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="add_reg_pwd">Password:</label>
              <div class="col-sm-8"> 
                <input type="password" class="form-control" id="add_reg_pwd" name="add_reg_pwd" placeholder="Enter password">
              </div>
            </div>
            <div class="form-group">
              <span id="add_pw_error"></span><label class="control-label col-sm-3" for="add_conf_pwd">Confirm Password:</label>
              <div class="col-sm-8"> 
                <input type="password" class="form-control" id="add_conf_pwd" name="add_conf_pwd" placeholder="Confirm password">
              </div>
            </div>
          </form>
      </div>
      <!-- REGISTRATION FORM -->
      <div class="modal-footer">
        <div class="col-sm-offset-2 col-sm-10">
          <input id="add_reg_button" type="submit" class="btn btn-default" name="add" value="Add" disabled>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>