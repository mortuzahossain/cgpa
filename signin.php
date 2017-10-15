<?php
session_start();
include 'include/db_config.php';

if (isset($_POST['login'])) {
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);

	$sql = "SELECT * FROM admins WHERE username = '$username' OR email = '$username' AND password = '$password'";
	$result = mysqli_query($con,$sql);

	$user_check = mysqli_num_rows($result);

	if ($user_check>0) {
		if ($row = mysqli_fetch_assoc($result)) {
			
			$_SESSION['userId'] 		= $row['id'];
			$_SESSION['name'] 			= $row['name'];
			$_SESSION['username'] 		= $row['username'];
			$_SESSION['email'] 			= $row['email'];
			$_SESSION['university'] 	= $row['university'];

			header('Location: admin/index.php?message=success');
			exit();
		}
	} else {
		header('Location: index.php?message=usernotexist');
		exit();
	}

} else {
	header('Location: index.php?message=unableaccess');
	exit();	
}