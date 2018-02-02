<?php
session_start();
require 'connection.php';
// $string = file_get_contents("assets/users.json");
// $users = json_decode($string, true);
if(isset($_POST['login']) || $_POST['login_user'] /*|| $_POST['reg_user']*/){ /*DISABLES USERNAME AUTHENTICATION*/
	$username = $_POST['login_user']; //user input
	$password = sha1($_POST['login_pwd']); //user input

	$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'"; //step 1
	$result = mysqli_query($conn,$sql); //step 2

	if(mysqli_num_rows($result)!=0){
		if (isset($_SESSION['role']) && $_SESSION['role']=='admin') {
			$row = mysqli_fetch_assoc($result);
			$_SESSION['login_user'] = $username;
			$_SESSION['role'] = $row['role'];
			header('location: catalog.php');	
		}
		else {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['login_user'] = $username;
		$_SESSION['role'] = $row['role'];
		header('location: home.php');
		}
	} 
	else {
		echo "invalid";
	}
}

if(isset($_POST['register'])){
	$username = $_POST['reg_user'];
	$sql = "SELECT * FROM users WHERE username = '$username'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		echo "invalid";
	} else {
		echo "valid";
	}
}



?>



<!-- (isset($_SESSION['role']) && $_SESSION['role']=='admin') { -->