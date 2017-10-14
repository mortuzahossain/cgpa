<?php
include 'inc/db_connect.php';
if (!empty($_POST["uni_id"])) {
	$uni_id = $_POST["uni_id"];
?>
<option value="">Select Your depertment</option>

<?php
	$sql = "SELECT * FROM depertment WHERE uni_value = 'baust'";
	$query = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_assoc($query))
	{
	    $depertment_name[] = $row;
	}
        foreach ($depertment_name as $name) {
    ?>

    <option value="<?php echo $name['dept_value'];?>"><?php echo $name['dept_name'];?></option>

<?php
}
}

?>