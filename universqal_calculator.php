<?php
	if (!isset($_POST['generate'])) {
		header('Location: index.php?message=unableaccess_universal');
		exit();
	}
	include 'include/header.php';
	include 'include/db_config.php';

	$total_subject_no 		= $_POST['subject_no'];

	$total_cradit			= 0;
	$totalGain 				= 0;
	$result 				= 0;

?>

<div class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 input-table">

<form action="" method="post" class="form-horizontal">
	<table class="table table-condensed mytable">
		<tr class="dangerous">
			<td width="5%">#</td>
			<td width="55%">Subject Name</td>
			<td width="20%">Credit</td>
			<td width="20%">Result</td>
		</tr>
<?php for ($i=1; $i < $total_subject_no + 1 ; $i++) { ?>
		<tr>
			<td width="5%"><?php echo $i; ?></td>
			<td width="55%">Subject <?php echo $i; ?></td>
			<td width="20%"><input type="number" step=".1" min=".25" max="20" class="form-control uni-form-input" value="3" name="scredit<?php echo $i; ?>"></td>
			<td width="20%">
				<select class="mypickeri selectpicker show-tick" name="sgain<?php echo $i; ?>">
					<option value="4.0" >A+</option>
					<option value="3.75" >A</option>
					<option value="3.5" >A-</option>
					<option value="3.25" >B+</option>
					<option value="3" >B</option>
					<option value="2.75" >B-</option>
					<option value="2.50" >C+</option>
					<option value="2.25" >C</option>
					<option value="2.0" >D</option>
					<option value="0" >F</option>
				</select>
			</td>
		</tr>
<?php } ?>
	</table>
	<div class="form-group inputbutton">
	    <div class="col-sm-offset-5 col-sm-7">
		    <input class="btn btn-success" type="submit" name="calculate" value="Calculate">
			<input class="btn btn-danger" type="reset" name="Reset">
	    </div>
	</div>
</form>
			</div>
		</div>
	</div>
</div>

<?php
	include 'include/footer.php';
?>