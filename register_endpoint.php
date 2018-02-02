<?php

require 'connection.php';
session_start();

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$username = $_POST['reg_user'];
$password = sha1($_POST['reg_pwd']);

$sql = "INSERT INTO users (fname,lname,username,password,role) VALUES ('$firstname','$lastname','$username','$password','regular')";
mysqli_query($conn,$sql) or die(mysqli_error($conn));

$_SESSION['login_user'] = $username;
$_SESSION['role'] = 'regular';
header('location: home.php');

?>