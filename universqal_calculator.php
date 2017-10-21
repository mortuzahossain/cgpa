<?php

	include 'include/header.php';
	include 'include/db_config.php';

	if (! isset($_SESSION['subject_generate'])) {
		header('Location: index.php?message=unableaccess_universal');
		exit();
	}

	if (isset($_POST['generate'])) {
	    $total_subject_no                   = validate($_POST['subject_no']);
	    $_SESSION['subject_generate']       = $total_subject_no;
	    header('Location: universqal_calculator.php');
	    exit();
	}

	$total_subject_no 			= $_SESSION['subject_generate'] ;
?>

<div class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 input-table">

<form action="" method="post" class="form-horizontal">
	<table class="table table-condensed mytable">
		<tr class="dangerous">
			<td width="50%">Subject Name</td>
			<td width="25%">Credit</td>
			<td width="25%">Result</td>
		</tr>
<?php for ($i=1; $i < $total_subject_no + 1 ; $i++) { ?>
		<tr>
			<td width="55%">Subject <?php echo $i; ?></td>
			<td width="20%"><input type="number" step=".1" class="form-control uni-form-input" value="3" name="scredit<?php echo $i; ?>"></td>
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

	if ($_SERVER['REQUEST_METHOD'] == "POST") {

	$subject_credit 		= "scredit";
	$subject_gain 			= "sgain";
	$get_total_subject		= $total_subject_no;

	$totalGain 				= 0;
	$total_credit 			= 0;

	$s_gain 				= array();
	$s_credit 				= array();

	for ($k=1; $k < $get_total_subject + 1 ; $k++) { 
		$s_gain[] 			=  $subject_gain.$k;
		$s_credit[] 		=  $subject_credit.$k;
	}

	for ($i=0; $i < $get_total_subject; $i++) { 
		$total_credit = $total_credit + $_POST[$s_credit[$i]];
	}

	for ($i=0; $i < $get_total_subject; $i++) { 
		$totalGain = $totalGain + ( $_POST[$s_credit[$i]] * $_POST[$s_gain[$i]] );
	}

	$result = $totalGain/$total_credit;

			?>
		<script type="text/javascript">
        	jQuery(document).ready(function($){
    		    swal({
					title: "Your CGPA",
					text: "<?php echo $result; ?>",
			  		imageUrl: 'img/thumbs-up.jpg'
				});
    		});
		</script>
		<?php
	}
?>
