<?php
include 'include/header.php';

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
       echo "<p class='worning'>Welcome ".$name." . I am very much glad to have you as admin .</p>";
    }
}
?>

			<h1 class="text-center">WelCome Mortuza</h1>
			<h3><?php echo $university; ?> Have This Deertment's</h3>
			<ol class="depertment-list">
				<li><a href="#">EEE</a></li>
				<li><a href="#">EEE</a></li>
				<li><a href="#">EEE</a></li>
				<li><a href="#">EEE</a></li>
			</ol>
			<p class='worning'>Don't Find Your Depertment. Then <a data-toggle="modal" data-target="#add_depertment">Add Here.</a></p>
		</div>
	</div>
</div>

<?php
include 'include/footer.php';
include 'include/add_depertment.php';
?>