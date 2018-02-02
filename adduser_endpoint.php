<?php

require 'connection.php';
session_start();

$firstname = $_POST['add_first_name'];
$lastname = $_POST['add_last_name'];
$username = $_POST['add_reg_user'];
$password = sha1($_POST['add_reg_pwd']);

$sql = "INSERT INTO users (fname,lname,username,password,role) VALUES ('$firstname','$lastname','$username','$password','admin')";
mysqli_query($conn,$sql) or die(mysqli_error($conn));

/*$_SESSION['username'] = $username;
$_SESSION['role'] = 'admin';*/
header('location: home.php');

?>