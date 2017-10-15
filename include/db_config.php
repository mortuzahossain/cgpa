<?php

$host 		= "localhost";
$user 		= "root";
$password 	= "";
$db_name 	= "cgpa";

$con = mysqli_connect($host,$user,$password,$db_name);

/*if ($con) {
	echo "Database Connection SuccessFull";
}
*/

function validate($value)
{
    $value = mysql_real_escape_string($value);
    return $value;
}

?>