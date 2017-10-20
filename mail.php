<?php
include 'include/db_config.php';

if (isset($_POST['sendmail'])) {
    $name       = validate($_POST['name']);
    $email      = validate($_POST['email']);
    $message    = validate($_POST['message']);

    $to         = 'mortuzahossain1997@gmail.com';
    $subject    = 'Form CGPA calculator APP '.$name. 'My Email is' .$email;

    if (!empty($name) AND !empty($email) AND !empty($message)) {
        header('Location: index.php?message=mail_send_successfull');
    } else {
        header('Location: index.php?message=mail_field_empty');
    }
} else {
    header('Location: index.php');
    exit();
}


