<?php
    session_start();
    include '../include/db_config.php';
    if (isset($_SESSION['name']) ) {

        $subject        = validate($_POST['subject']);
        $course_code    = validate($_POST['course_code']);
        $credit         = validate($_POST['credit']);
        $subject_Id     = $_SESSION['subject_id'];

        if (!empty($subject) AND !empty($course_code) AND !empty($credit)) {
            $sql = "UPDATE data SET courseCode = '$course_code',courseName = '$subject',courseCredit = '$credit' WHERE id = '$subject_Id'";
            $result = mysqli_query($con,$sql);
            if ($result) {
                header('Location: leveltearm.php?message=successfully_updated');
                exit(); 
            } else {
                header('Location: leveltearm.php?message=database_error');
                exit(); 
            }
        } else {
            header('Location: leveltearm.php?message=empty');
            exit(); 
        }
    } else {
        header('Location: ../index.php?message=unableaccess');
        exit(); 
    }
?>
