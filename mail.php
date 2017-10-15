<?php

$showMessage = "";
if (isset($_POST['sendmail'])) {
    $name       = validate($_POST['name']);
    $email      = validate($_POST['email']);
    $message    = validate($_POST['message']);

    $to         = 'mortuzahossain1997@gmail.com';
    $subject    = 'Form CGPA calculator APP '.$name. 'My Email is' .$email;

    if (!empty($name) AND !empty($email) AND !empty($message) AND mail($to, $subject, $message)) {
        $showMessage =  "Thanks For Your FeedBack . I will come back to you right now.";
    } else {
        $showMessage = "Something Went Wrong Please Try Again.";
    }
} else {
    header('Location: index.php');
}

include 'include/header.php';
?>
<div class="main-content text-center">
    <div class="container">
        <div class="row">
            <div class="center message">
                <h2><?php echo $showMessage; ?></h2>
                <h1>Or</h1>
                <p><a href="index.php" class="btn btn-success">GO HOME</a></p>
            </div>
        </div>
    </div>
</div>

<?php include 'include/footer.php'; ?>
