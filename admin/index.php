<?php
include 'include/header.php';

?>

<div class="container main-content">
	<div class="row">
		<div class="col-md-2 right-sidebar">
			<table>
				<tr><td><a href="">Home</a></td></tr>
				<tr><td><a href="">Profile</a></td></tr>
				<tr><td><a href="">All Deertments</a></td></tr>
				<tr><td><a href="">Change Password</a></td></tr>
				<tr><td><a href="">Logout</a></td></tr>
			</table>
		</div>
		<div class="col-md-10 main-content-penel">
			<h1 class="text-center">WelCome Mortuza</h1>
			<h3>Your University Have This Deertment's</h3>
			<ol class="depertment-list">
				<li><a href="#">EEE</a></li>
				<li><a href="#">EEE</a></li>
				<li><a href="#">EEE</a></li>
				<li><a href="#">EEE</a></li>
			</ol>
			<p class='worning'>Don't Find Your University. Then <a data-toggle="modal" data-target="#add_depertment">Add Here.</a></p>
		</div>
	</div>
</div>

<?php
include 'include/footer.php';
include 'include/add_depertment.php';
?>