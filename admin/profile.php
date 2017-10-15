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
			 <form action="" method="post">
			    <table class="table table-bordered">
			        <tr>
			            <td>Name</td>
			            <td><input type="text" name="name" class="form-control myinput" placeholder="Name" value="<?php echo $name ?>" ></td>
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
			            <td><input type="text" name="enrollday" class="form-control myinput" placeholder="password" value="<?php echo $result['password'] ?>"></td>
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