<?php
include 'include/header.php';
/*
// Geting Depertment name from url
$depertment_name = $_GET['depertmentName'];
*/
?>
<div class="container main-content">
	<div class="row">
		<div class="col-md-2 right-sidebar">
			<?php include 'include/right_sidebar.php'; ?>
		</div>
		<div class="col-md-10 main-content-penel">
			<h2 class="text-center">Mortuza's Profile</h2>
			 <form action="" method="post">
			    <table class="table table-bordered">
			        <tr>
			            <td>Name</td>
			            <td><input type="text" name="name" class="form-control myinput" placeholder="Name" value="" ></td>
			        </tr>
			        <tr>
			            <td>ID</td>
			            <td><input type="text" name="roll" class="form-control myinput" placeholder="ID" value=""></td>
			        </tr>
			        <tr>
			            <td>Father Name</td>
			            <td><input type="text" name="fname" class="form-control myinput" placeholder="father namename" value=""></td>
			        </tr>
			        <tr>
			            <td>Mother Name</td>
			            <td><input type="text" name="mname" class="form-control myinput" placeholder="father namename" value=""></td>
			        </tr>
			        <tr>
			            <td>Phone</td>
			            <td><input type="text" name="phone" class="form-control myinput" placeholder="phone" value=""></td>
			        </tr>
			        <tr>
			            <td>Email</td>
			            <td><input type="text" name="email" class="form-control myinput" placeholder="email" value=""></td>
			        </tr>
			        <tr>
			            <td>Enrole Day</td>
			            <td><input type="date" name="enrollday" class="form-control myinput" placeholder="enroll day" value=""></td>
			        </tr>
			    </table>

			    <button type="submit" name="updateme" class="btn btn-primary mybtn">Update</button>

			    

			</form>
		</div>
	</div>
</div>
<?php
include 'include/footer.php';
?>