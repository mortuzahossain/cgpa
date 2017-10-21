<?php
    session_start();
    include '../include/db_config.php';
    if (isset($_SESSION['name']) AND isset($_POST['update_depertment'])) {

        $university     	= $_SESSION['university'];
		$depertmentId 		= $_SESSION['depertmentId'];
        $depertment_name 	= validate($_POST['depertmentname']);

        if (!empty($depertment_name)) {
            // Add it Update it into database
            $sql = "UPDATE depertments SET depertment = '$depertment_name' WHERE id = $depertmentId";
            $result = mysqli_query($con,$sql);
            if ($result) {
		        header('Location: index.php?message=update_dept_name');
		        exit(); 
            } else {
	            header('Location: index.php?message=database_error');
	            exit(); 
            }
        } else {
            header('Location: index.php?message=empty');
            exit(); 
        }

    } else {
        header('Location: ../index.php?message=unableaccess');
        exit(); 
    }
?>
