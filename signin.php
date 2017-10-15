<?php

if (isset($_POST['login'])) {
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
} else {
	header("Locaion: index.php");
	exit();
}

?>