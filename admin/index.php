<?php
include 'include/header.php';
include '../include/db_config.php';

?>

<div class="container main-content">
	<div class="row">
		<div class="col-md-2 right-sidebar">
			<?php include 'include/right_sidebar.php'; ?>
		</div>
		<div class="col-md-10 main-content-penel">

<?php
if (isset($_GET['message'])) {
	$message = $_GET['message'];
	if ($message == 'success') {
       echo "<p class='worning'>Welcome <i class='fa fa-heart red' aria-hidden='true'></i>".$name." <i class='fa fa-heart red' aria-hidden='true'></i> I am very much <i class='fa fa-heart red' aria-hidden='true'></i> glad <i class='fa fa-heart red' aria-hidden='true'></i> to have you as admin .</p>";
    }
    elseif ($message == 'empty') {
    	echo "<p class='worning'>Please Fill the input field for adding Depertment.</p>";
    }
    elseif ($message == 'already_exist') {
    	echo "<p class='worning'>This Depertment Already Exist . Please Check Again.</p>";
    }
    elseif ($message == 'database_error') {
    	echo "<p class='worning'>Sorry Something Wrong in our database . Please Check Again.</p>";
    }
    elseif ($message == 'successfully_added') {
    	echo "<p class='worning'>Depertment Added Successfully . </p>";
    }
}
?>

			<h1 class="text-center">WelCome <?php echo $name; ?></h1>
			<h3><?php echo $university; ?> Have This Deertment's</h3>
<?php
// Get Depertmertment list
	$sql = "SELECT * FROM depertments WHERE universityName = '$university'";
	$result = mysqli_query($con,$sql);
	$have_depertment = mysqli_num_rows($result);
	if ($have_depertment) {
		while ($row =mysqli_fetch_assoc($result)) {
			$depertments[] = $row;
		}
		?>
			<ol class="depertment-list">
<?php foreach ($depertments as $depertment) { ?>
				<a href="depertment.php?id=<?php echo $depertment['id'] ?>&depertment=<?php echo $depertment['depertment']; ?>"><li><?php echo $depertment['depertment']; ?></li></a>
<?php } ?>
			</ol>		
		<?php
	}
?>
			<p class='worning'>Don't Find Your Depertment. Then <a data-toggle="modal" data-target="#add_depertment">Add Here.</a></p>
		</div>
	</div>
</div>

<?php
include 'include/add_depertment_model.php';
include 'include/footer.php';

?>