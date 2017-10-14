<?php
	// //echo $val;
	// // For Geting Information Form The Databse
	// $allsub = array();
	// $all_sub_credit = array();
	// // For showin the serial no
	// $sl_no = 0;
	// // For name generate
	// $i = 0;
	// $sql = "SELECT * FROM $val";
	// $query = mysqli_query($con,$sql);
	// if ($query) {
		// 	while ($row = mysqli_fetch_assoc($query))
		// 	{
			// 		$allsub[] = $row;
			// 		$i++;
		// 	}
	// }

	
	// // For calculation
	// $total_credit = 0;
	// $totalGain = 0;
	// $res  = "res";
	
?>
<?php
include 'include/header.php';
include 'include/db_config.php';
	
	session_start();
	$goto = 0;
	$goto = $_SESSION['goto'];
	
	if ($goto>0 AND isset($goto)) {
		$dynamic_sql = $_SESSION['sql'];
	} else {
		header("Location: index.php");
	}

	//echo $dynamic_sql;

	$result = mysqli_query($con,$dynamic_sql);
	$have_rows = mysqli_num_rows($result);
	if ($have_rows) {
		while ($row =mysqli_fetch_assoc($result)) {
			$allsubject[] = $row;
		}

	}
	//print_r($allsubject);
	
	$total_credit = 0;
	$totalGain = 0;
	$res  = "result";
	$all_sub_credit = array();

?>
<div class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 input-table">
<?php if($have_rows){ ?>
				<form action="" method="post" class="form-horizontal">
					<table class="table table-condensed mytable">
						<tr class="dangerous">
							<td width="5%">#</td>
							<td width="45%">Subject Name</td>
							<td width="20%">Code</td>
							<td width="10%">Credit</td>
							<td width="20%">Result</td>
						</tr>
<?php $i = 0; foreach ($allsubject as $key) {
	$i++;
	$total_credit =$total_credit + $key['courseCredit'];
	$all_sub_credit[] = $key['courseCredit'];
?>
						<tr>
							<td width="5%"><?php echo $i;?></td>
							<td width="45%"><?php echo $key['courseCode'];?></td>
							<td width="20%"><?php echo $key['courseName'];?></td>
							<td width="10%"><?php echo $key['courseCredit'];?></td>
							<td width="20%">
								<select class="mypickeri selectpicker show-tick" name="<?php echo "result".$i; ?>">
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
<?php } else { ?>
<p class='worning'>No Data To Show.. Plese Contact with admin or Be an <a data-toggle="modal" data-target="#login">admin</a>  OR Go <a href="index.php">Home</a>.</p>
<?php } ?>
			</div>
		</div>
	</div>
</div>




<?php
include 'include/footer.php';
?>


<?php

// Start Calculating
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		for ($k=1; $k < $i+1 ; $k++) { 
			$name[] =  $res.$k;
		}
		$totalGain = 0;
		for($n = 0; $n < $i ; $n++){
			$totalGain = $totalGain + ($all_sub_credit[$n] * $_POST[$name[$n]]);
		}
		$result = $totalGain/$total_credit;
		?>
		<script type="text/javascript">
			//alert('<?php echo $result; ?>');
        	
        	jQuery(document).ready(function($){
    		    swal({
					title: "Your CGPA",
					text: "<?php echo $result; ?>",
			  		imageUrl: 'img/thumbs-up.jpg'
				});
    		});



			//window.location="index.php"
		</script>
		<?php
	}

?>