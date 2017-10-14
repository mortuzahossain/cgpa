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
?>

    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 input-table">
                    <form action="" method="post" class="form-horizontal">
						<table class="table table-condensed mytable">
							<tr class="dangerous">
								<td width="5%">#</td>
								<td width="45%">Subject Name</td>
								<td width="20%">Code</td>
								<td width="10%">Credit</td>
								<td width="20%">Result</td>
							</tr>

							<?php
								if ($query) {
									if(sizeof($allsub)>0){
										foreach ($allsub as $sub) {
										$sl_no++;
										$total_credit =$total_credit + $sub['credit'];
										$all_sub_credit[] = $sub['credit'];

							?>

							<tr>
								<td width="5%"><?php echo $sl_no;?></td>
								<td width="45%"><?php echo $sub['s_name'];?></td>
								<td width="20%"><?php echo $sub['s_code'];?></td>
								<td width="10%"><?php echo $sub['credit'];?></td>
								<td width="20%">
									<select class="mypickeri selectpicker show-tick" name="<?php echo "res".$sl_no; ?>">
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
						<?php
							// End of Foreatch
							}
						?>
							</table>
							<div class="form-group inputbutton">
							    <div class="col-sm-offset-5 col-sm-7">
								    <input class="btn btn-success" type="submit" name="calculate" value="Calculate">
									<input class="btn btn-danger" type="reset" name="Reset">
							    </div>
							</div>
						<?php
							// End Of IF
							} else{
								// It is possiable to heppen
								echo "<p class='worning'>No Data To Show.. Plese Contact with admin or Be an admin.</p>";
							}
							// End of Query
							} else {
								// Posible of happening 0%
								// Only for fallback
								echo "<p class='worning'>Data Table Does Not Exist. Please create one.</p>";
							}
						?>
							
					</form>
                </div>
            </div>
        </div>
    </div>



<!-- // For Calculation part in the same page. // -->
<!-- 
<?php

// For calculation part

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
        	swal({
			  title: "Your CGPA",
			  text: "<?php echo $result; ?>",
			  imageUrl: 'assets/thumbs-up.jpg'
			});
			// window.location="index.php"
		</script>
		<?php
	}

?>
 -->


<?php
include 'include/footer.php';
?>
