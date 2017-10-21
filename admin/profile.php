<?php
include 'include/header.php';
$sql = "SELECT * FROM admins WHERE id = $userId";
$result = mysqli_query($con , $sql)->fetch_assoc();
?>
<div class="container main-content">
	<div class="row">
		<div class="col-md-2 right-sidebar">
			<?php include 'include/right_sidebar.php'; ?>
		</div>
		<div class="col-md-10 main-content-penel">
			<h2 class="text-center"><?php echo validate($name); ?>'s Profile</h2>
<?php
if (isset($_GET['message'])) {
	$message = $_GET['message'];
	if ($message == 'successfully_update') {
       echo "<p class='worning'>Data Updated Successfully</p>";
    }
    elseif ($message == 'empty') {
    	echo "<p class='worning'>Please Fill the input field for adding Depertment.</p>";
    }
    elseif ($message == 'database_error') {
    	echo "<p class='worning'>Sorry Something Wrong in our database . Please Check Again.</p>";
    }
}
?>

			 <form action="update_user.ini.php" method="post">
			    <table class="table table-bordered">
			        <tr>
			            <td>Name</td>
			            <td><input type="text" name="name" class="form-control myinput" placeholder="Name" value="<?php echo validate($name); ?>" ></td>
			        </tr>
<?php
$sql = "SELECT depertment FROM depertments WHERE universityName = '$university'";
$user_depertments = mysqli_query($con , $sql);
$count_depertment = mysqli_num_rows($user_depertments);
if ($count_depertment) {
	while ($row =mysqli_fetch_assoc($user_depertments)) {
	    $data[] = $row;
	}
?>

			        <tr>
			            <td>Subject</td>
			            <td>
							<select class="form-control subject_picker selectpicker show-tick " id="depertment_list" name="subject" required="1">
<?php foreach ($data as $key) {?>
							    <option value="<?php echo $key['depertment']; ?>" <?php if ($key['depertment'] == $result['current_subject'] ) {echo 'selected'; } ?> ><?php echo validate($key['depertment']); ?></option>
<?php }  ?>
							</select>
			            </td>
			        </tr>
<?php } else { ?>
<p class='worning'>Depertment is not added yet. <a data-toggle="modal" data-target="#add_depertment">Add Here.</a></p>
<?php } ?>	        

			        <tr>
			            <td>Level</td>
			            <td><input type="number" name="level" class="form-control myinput" placeholder="0" value="<?php echo validate($result['current_level']); ?>"></td>
			        </tr>
			        <tr>
			            <td>Tearm</td>
			            <td><input type="number" name="term" class="form-control myinput" placeholder="0" value="<?php echo validate($result['current_tearm']); ?>"></td>
			        </tr>
			        <tr>
			            <td>Password</td>
			            <td><input type="text" name="password" class="form-control myinput" placeholder="password" value="<?php echo validate($result['password']); ?>"></td>
			        </tr>
			    </table>

			    <button type="submit" name="updateuser" class="btn btn-primary mybtn">Update</button>
			</form>
		</div>
	</div>
</div>
<?php
include 'include/add_depertment_model.php';
include 'include/footer.php';
?>