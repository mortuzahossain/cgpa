<?php
include 'include/db_config.php';
if (!empty($_POST["universityName"])) {
	$universityName = validate($_POST["universityName"]);
}
?>
<option value="">Select Your depertment</option>
<?php
$sql 		= "SELECT depertment FROM depertments WHERE universityName = '$universityName'";
$result 	= mysqli_query($con,$sql);
$row 		= mysqli_num_rows($result);
if ($row) { 
    while ($row =mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
foreach ($data as $key) { ?>

        <option value="<?php echo validate($key['depertment']) ?>"><?php echo validate($key['depertment']) ?></option>

<?php } } ?>