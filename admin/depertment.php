<?php
include 'include/header.php';
if ($_GET['depertment'] AND $_GET['id']) {
	$depertmentName 	= $_GET['depertment'];
	$depertmentId 		= $_GET['id'];
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
			<h2>Depertment <?php echo $depertmentName; ?><span><a data-toggle="modal" data-target="#add_depertment" class="btn btn-success right">Edit Depertment</a></span></h2>
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
					<td><a href="leveltearm.php?level=<?php echo $i+1; ?>&tearm=<?php echo $j+1; ?>&depertment=<?php echo $depertmentName; ?>" class="btn btn-success right">View / Edit</a></td>
				</tr>
<?php }} ?>
			</table>
		</div>
	</div>
</div>
<?php
include 'include/edit_depertment_model.php';
include 'include/footer.php';
?>