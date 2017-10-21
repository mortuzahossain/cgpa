<?php
    session_start();
    include '../include/db_config.php';
    if (isset($_SESSION['name']) AND isset($_POST['add_depertment'])) {
        $name           = $_SESSION['name'];
        $username       = $_SESSION['username'];
        $email          = $_SESSION['email'];
        $university     = $_SESSION['university'];

        $depertment_name = validate($_POST['depertmentname']);

        if (!empty($depertment_name)) {
            // Check the depertment is exist or not
            $sql = "SELECT depertment FROM depertments WHERE universityName = '$university' AND depertment = '$depertment_name'";
            $result = mysqli_query($con,$sql);
            $have_depertment = mysqli_num_rows($result);

            if (! $have_depertment) {
                $sql = "INSERT INTO depertments (universityName,depertment) VALUES ('$university','$depertment_name')";
                $result = mysqli_query($con,$sql);
                if ($result) {
                    header('Location: index.php?message=successfully_added');
                    exit(); 
                } else {
                    header('Location: index.php?message=database_error');
                    exit(); 
                }
            } else {
                header('Location: index.php?message=already_exist');
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
