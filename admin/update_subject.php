<?php
include 'include/header.php';

if (isset($_GET['subject_id']) AND isset($_GET['name']) AND isset($_GET['courseCode']) AND isset($_GET['courseCredit'])) {
	$subjectId 					= $_GET['subject_id'];
	$_SESSION['subject_id'] 	= $subjectId;
	$subject_name 				= $_GET['name'];
	$courseCode 				= $_GET['courseCode'];
	$courseCredit 				= $_GET['courseCredit'];
}

else {
	header('Location: logout.php');
    exit(); 
}


?>
<div class="container main-content">
	<div class="row">
		<div class="col-md-2 right-sidebar">
			<?php include 'include/right_sidebar.php'; ?>
		</div>
		<div class="col-md-10 main-content-penel">
			<h2>Update Subject : <?php echo $subject_name; ?></h2>
				<hr>
				<form class="form-horizontal myform-update-subject" method="post" action="update_subject.init.php">
					<div class="form-group">
						<label class="col-sm-1 col-sm-offset-1 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Electrical Circuits I" value="<?php echo $subject_name; ?>" name="subject" required="1">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-1 col-sm-offset-1 control-label">Code</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="EEE3102" value="<?php echo $courseCode; ?>" name="course_code" required="1">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-1 col-sm-offset-1 control-label">Credit</label>
						<div class="col-sm-10">
							<input type="number" step="0.1" class="form-control" value="<?php echo $courseCredit; ?>" placeholder="3.00" name="credit" required="1">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-10 col-sm-2">
							<button name="update_subject" type="submit" class="btn btn-success">Update</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php
include 'include/footer.php';
?>