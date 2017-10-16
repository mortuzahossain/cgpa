<?php
    session_start();
    include '../include/db_config.php';
    if (isset($_SESSION['name']) AND isset($_POST['updateuser']) )  {
		$userId         	= $_SESSION['userId'];
        $name        		= $_POST['name'];
        $subject    		= $_POST['subject'];
        $level         		= $_POST['level'];
        $term         		= $_POST['term'];
        $password         	= $_POST['password'];

        if (!empty($name) AND !empty($subject) AND !empty($level) AND !empty($term) AND !empty($password)) {
            $sql = "UPDATE admins SET name = '$name',password='$password',current_subject='$subject',current_level='$level',current_tearm='$term' WHERE id =$userId";
            $result = mysqli_query($con,$sql);
            if ($result) {
                header('Location: profile.php?message=successfully_update');
                exit(); 
            } else {
                header('Location: profile.php?message=database_error');
                exit(); 
            }
        } else {
            header('Location: profile.php?message=empty');
            exit(); 
        }
    } else {
        header('Location: ../index.php?message=unableaccess');
        exit(); 
    }
?>
