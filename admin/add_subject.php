<?php
    session_start();
    include '../include/db_config.php';
    if (isset($_SESSION['name']) AND isset($_POST['add_subject']) AND isset($_SESSION['level'])  AND isset($_SESSION['tearm']) AND isset($_SESSION['depertment'])) {
        $name           = $_SESSION['name'];
        $username       = $_SESSION['username'];
        $email          = $_SESSION['email'];
        $university     = $_SESSION['university'];

        $level          = $_SESSION['level'];
        $tearm          = $_SESSION['tearm'];
        $depertment     = $_SESSION['depertment'];

        $subject        = $_POST['subject'];
        $course_code    = $_POST['course_code'];
        $credit         = $_POST['credit'];


        if (!empty($subject) AND !empty($course_code) AND !empty($credit)) {
            $sql = "SELECT id FROM data WHERE universityName = '$university' AND depertment = '$depertment' AND level = '$level' AND tearm ='$tearm' AND courseCode = '$course_code' OR courseName = '$subject' ";
            $result = mysqli_query($con,$sql);
            $have_subject = mysqli_num_rows($result);

            if (! $have_subject) {
                $sql = "INSERT INTO data (universityName,depertment,level,tearm,courseCode,courseName,courseCredit) VALUES ('$university','$depertment','$level','$tearm','$course_code','$subject','$credit')";
                $result = mysqli_query($con,$sql);
                if ($result) {
                    header('Location: leveltearm.php?message=successfully_added');
                    exit(); 
                } else {
                    header('Location: leveltearm.php?message=database_error');
                    exit(); 
                }
            } else {
                header('Location: leveltearm.php?message=already_exist');
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
