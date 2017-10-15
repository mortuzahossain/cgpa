<?php
include 'include/header.php';
include '../include/db_config.php';

if ($_GET['level'] AND $_GET['tearm'] AND ) {
	$level = $_GET['level'];
	$tearm = $_GET['tearm'];
} else {
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
			<h2>EEE Level <?php echo $level; ?> Tearm <?php echo $tearm; ?> <span><a class="btn btn-success right">Add Subject</a></span></h2>

<?php
	$sql = "SELECT * FROM data WHERE universityName = '$university' AND depertment ";

?>

			<table class="table table-condensed mytable">
				<tr class="dangerous">
					<td width="5%">#</td>
					<td width="45%">Subject Name</td>
					<td width="20%">Code</td>
					<td width="20%">Credit</td>
					<td width="10%">Edit</td>
				</tr>

				<tr>
					<td width="5%">#</td>
					<td width="45%">Subject Name</td>
					<td width="20%">Code</td>
					<td width="20%">Credit</td>
					<td width="10%"><a href="#" class="btn btn-success">Edit</a></td>
				</tr>

			</table>


		</div>
	</div>
</div>
<?php
include 'include/footer.php';
?>