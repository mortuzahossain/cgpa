<?php
	// include 'inc/db_connect.php';
	// session_start();
	// // Geting information from index page
	// $goto = 0;
	// $goto = $_SESSION['goto'];
	// if ($goto>0) {
		// 	$val = $_SESSION['sql'];
	// } else {
		// 	header("Location: index.php");
	// }
	
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
$university = $_POST['university'];
$deptertment = $_POST['deptertment'];
$level = $_POST['level'];
$term = $_POST['term'];

$total_credit 	= 0;
$totalGain 		= 0;
$dynamic_sql 	= "";
$i 				= 0;

$sl_no 			= 0;
$res  			= "res";

if (!empty($university) && !empty($deptertment) && !empty($level) && !empty($term)) {
	$dynamic_sql = "SELECT * FROM data WHERE universityName = '$university' AND depertment = '$deptertment' AND level = '$level' AND tearm = '$term'";
} else {
	header("Location: index.php");
}
//echo $dynamic_sql
$result = mysqli_query($con,$dynamic_sql);
$have_rows = mysqli_num_rows($result);
if ($have_rows) {
	while ($row =mysqli_fetch_assoc($result)) {
		$allsubject[] = $row;
	}
}
//print_r($allsubject);
	
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
<?php foreach ($allsubject as $key) { $i++; ?>
						<tr>
							<td width="5%"><?php echo $i;?></td>
							<td width="45%"><?php echo $key['courseCode'];?></td>
							<td width="20%"><?php echo $key['courseName'];?></td>
							<td width="10%"><?php echo $key['courseCredit'];?></td>
							<td width="20%">
								<select class="mypickeri selectpicker show-tick" name="<?php echo "res".$i; ?>">
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
				</form>
<?php } else { ?>
Nothing Found.
<?php } ?>
			</div>
		</div>
	</div>
</div>
<?php
include 'include/footer.php';
?>