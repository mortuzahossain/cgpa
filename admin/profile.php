<?php
include 'include/header.php';
include '../include/db_config.php';
$sql = "SELECT * FROM admins WHERE id = $userId";
$result = mysqli_query($con , $sql)->fetch_assoc();
?>
<div class="container main-content">
	<div class="row">
		<div class="col-md-2 right-sidebar">
			<?php include 'include/right_sidebar.php'; ?>
		</div>
		<div class="col-md-10 main-content-penel">
			<h2 class="text-center"><?php echo $name; ?>'s Profile</h2>
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
			            <td><input type="text" name="name" class="form-control myinput" placeholder="Name" value="<?php echo $name ?>" ></td>
			        </tr>
			        <tr>
			            <td>Subject</td>
			            <td><input type="text" name="subject" class="form-control myinput" placeholder="EEE" value="<?php echo $result['current_subject'] ?>"></td>
			        </tr>
			        <tr>
			            <td>Level</td>
			            <td><input type="number" name="level" class="form-control myinput" placeholder="0" value="<?php echo $result['current_level'] ?>"></td>
			        </tr>
			        <tr>
			            <td>Tearm</td>
			            <td><input type="number" name="term" class="form-control myinput" placeholder="0" value="<?php echo $result['current_tearm'] ?>"></td>
			        </tr>
			        <tr>
			            <td>Password</td>
			            <td><input type="text" name="password" class="form-control myinput" placeholder="password" value="<?php echo $result['password'] ?>"></td>
			        </tr>
			    </table>

			    <button type="submit" name="updateuser" class="btn btn-primary mybtn">Update</button>
			</form>
		</div>
	</div>
</div>
<?php
include 'include/footer.php';
?>