<?php
session_start();
require 'connection.php';

if(isset($_POST['add'])){
	$username = $_POST['add_reg_user'];
	$sql = "SELECT * FROM users WHERE username = '$username'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		echo "invalid";
	} else {
		echo "valid";
	}
}

?>