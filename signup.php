<?php

include 'include/db_config.php';

if (isset($_POST['signup'])) {
	$name 			= validate($_POST['name']);
	$username 		= validate($_POST['username']);
	$email 			= validate($_POST['email']);
	$password 		= validate($_POST['password']);
	$university 	= validate($_POST['university']);

	// Check For Empty Field
	if (empty($name) OR empty($username) OR empty($email) OR empty($password) OR empty($password)) {
		header('Location: index.php?message=emptyField');
		exit();
	}
	else {
		// USER ALREADY EXIST OR NOT
		$sql 			= "SELECT * FROM admins WHERE username = '$username' OR email = '$email'";
		$result 		= mysqli_query($con,$sql);
		$user_exist 	= mysqli_num_rows($result);
		if ($user_exist) {
			header('Location: index.php?message=userexist');
			exit();	
		}
		else {
			// Save Into Database
			$sql 			= "INSERT INTO admins (name,username,email,password,university) VALUES ('$name','$username','$email','$password','$university')";
			$result 		= mysqli_query($con,$sql);
			if ($result) {
				// CHeck The University Table If it is new university or not
				$sql 				= "SELECT * FROM universitys WHERE universityName = '$university'";
				$result 			= mysqli_query($con,$sql);
				$university_exist 	= mysqli_num_rows($result);
				if (!$university_exist) {
					# Add The University
					$sql = "INSERT INTO universitys (universityName) VALUES ('$university')";
					mysqli_query($con,$sql);
				}
				header('Location: index.php?message=successfull');
				exit();	
			}
			else{
				header('Location: index.php?message=signupfailed');
				exit();
			}
		}			
	}

} else {
	header('Location: index.php');
	exit();
}