<?php
include 'include/db_config.php';



if (isset($_POST['sendmail'])) {

    $name       = validate($_POST['name']);
    $email      = validate($_POST['email']);
    $message    = validate($_POST['message']);
	
	$email_body = "";
	$email_body = $email_body . "Name: " . $name . "<br>";
	$email_body = $email_body . "Email: " . $email . "<br>";
	$email_body = $email_body . "Message: " . $message . "<br>";



	require_once('include/class.phpmailer.php');
	$mail             = new PHPMailer();

	if (! $mail->ValidateAddress($email)) {
		header('Location: index.php?message=iea');
		exit();
	}

    if (!empty($name) AND !empty($email) AND !empty($message)) {

    	// Send Email
		$mail->SetFrom($email,$name);
		$address = "mortuzahossain1997@gmail.com";
		$mail->AddAddress($address, "CGPA Calculator");
		$mail->Subject    = "Contact From CGPA || ".$name;
		$mail->MsgHTML($email_body);
		if(!$mail->Send()) {
			header('Location: index.php?message=msw');
        	exit();
		} else {
			header('Location: index.php?message=mail_send_successfull');
	        exit();
		}
    } else {
        header('Location: index.php?message=mail_field_empty');
        exit();
    }
} else {
    header('Location: index.php');
    exit();
}


