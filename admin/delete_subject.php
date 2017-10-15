<?php
    session_start();
    include '../include/db_config.php';
    if (isset($_SESSION['name']) AND isset($_GET['subject_id'])) {
        
        $id                 = $_GET['subject_id'];

        $sql = "DELETE FROM data WHERE id = $id";
        if (mysqli_query($con,$sql)) {
            header('Location: leveltearm.php?message=delete');
            exit(); 
        }
    } else {
        header('Location: ../index.php?message=unableaccess');
        exit(); 
    }
?>
