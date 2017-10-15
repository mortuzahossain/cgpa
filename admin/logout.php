<?php
	session_start();
	if (isset($_SESSION['name'])) {
		session_unset();
		session_destroy();
		header('Location: ../index.php?message=logout');
		exit();
	} else {
	    header('Location: ../index.php?message=unableaccess');
	    exit(); 
	}
?>