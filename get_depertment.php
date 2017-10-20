<?php
include 'include/db_config.php';
if (!empty($_POST["universityName"])) {
	$universityName = $_POST["universityName"];
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

        <option value="<?php echo $key['depertment'] ?>"><?php echo $key['depertment'] ?></option>

<?php } } ?>