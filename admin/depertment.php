<?php
include 'include/header.php';
//$depertmentId = $_GET['id'];
$depertmentName = $_GET['depertment'];


?>
<div class="container main-content">
	<div class="row">
		<div class="col-md-2 right-sidebar">
			<?php include 'include/right_sidebar.php'; ?>
		</div>
		<div class="col-md-10 main-content-penel">
			<h2>Depertment <?php echo $depertmentName; ?></h2>
			<table class="table table-condensed mytable">
				<tr class="dangerous">
					<td>Level</td>
					<td>Term</td>
					<td class="right">Edit/Update</td>
				</tr>
<?php
for ($i=0; $i < 4 ; $i++) {
	for ($j=0; $j <3 ; $j++) { 
?>
				<tr>
					<td><?php echo $i+1; ?></td>
					<td><?php echo $j+1; ?></td>
					<td><a href="leveltearm.php?level=<?php echo $i+1; ?>&tearn=<?php echo $j+1; ?>" class="btn btn-success right">View / Edit</a></td>
				</tr>
<?php }} ?>
			</table>
		</div>
	</div>
</div>
<?php
include 'include/footer.php';
?>