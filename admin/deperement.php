<?php
include 'include/header.php';
/*
// Geting Depertment name from url
$depertment_name = $_GET['depertmentName'];
*/
?>
<div class="container main-content">
	<div class="row">
		<div class="col-md-2 right-sidebar">
			<?php include 'include/right_sidebar.php'; ?>
		</div>
		<div class="col-md-10 main-content-penel">
			<h2>Depertment EEE</h2>
			<table class="table table-condensed mytable">
				<tr class="dangerous">
					<td>Level</td>
					<td>Term</td>
					<td class="right">Edit/Update</td>
				</tr>

				<tr>
					<td>1</td>
					<td>1</td>
					<td><a href="#" class="btn btn-success right">View / Edit</a></td>
				</tr>

			</table>
		</div>
	</div>
</div>
<?php
include 'include/footer.php';
?>