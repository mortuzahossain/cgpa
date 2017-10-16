<?php

$host 		= "localhost";
$user 		= "root";
$password 	= "";
$db_name 	= "cgpa";

$con = mysqli_connect($host,$user,$password,$db_name);


function validate($value)
{
	$value = trim($value);
	$value = stripslashes($value);
	$value = htmlspecialchars($value);
    $value = mysql_real_escape_string($value);
    return $value;
}

?>