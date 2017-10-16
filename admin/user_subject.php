<?php
include 'include/header.php';
include '../include/db_config.php';

if (isset($userId)) {
	$sql = "SELECT * FROM admins WHERE id = $userId";
	$result = mysqli_query($con , $sql)->fetch_assoc();

	$university = $result['university'];

	$depertment 		= $result['current_subject'];
	$level 				= $result['current_level'];
	$tearm 				= $result['current_tearm'];

	$_SESSION['level'] = $level;
    $_SESSION['tearm'] = $tearm;
    $_SESSION['depertment'] = $depertment;



} else {
	header('Location: logout.php');
    exit(); 
}

?>
<div class="container main-content">
	<div class="row">
		<div class="col-md-2 right-sidebar">
			<?php include 'include/right_sidebar.php'; ?>
		</div>
		<div class="col-md-10 main-content-penel">
			<h2>EEE Level <?php echo $level; ?> Tearm <?php echo $tearm; ?> <span><a  data-toggle="modal" data-target="#add_subject" class="btn btn-success right">Add Subject</a></span></h2>

<?php
	$sql = "SELECT * FROM data WHERE universityName = '$university' AND depertment = '$depertment' AND level = '$level' AND tearm = '$tearm'";
	$result = mysqli_query($con,$sql);
	$have_rows = mysqli_num_rows($result);
	if ($have_rows) {
		while ($row =mysqli_fetch_assoc($result)) {
			$allsubject[] = $row;
		}
	
?>

			<table class="table table-condensed mytable">
				<tr class="dangerous">
					<td width="5%">#</td>
					<td width="45%">Subject Name</td>
					<td width="20%">Code</td>
					<td width="10%">Credit</td>
					<td width="20%" class="text-center">Edit / Delete</td>
				</tr>
<?php $i = 0; foreach ($allsubject as $key) { $i++; ?>
				<tr>
					<td width="5%"><?php echo $i; ?></td>
					<td width="45%"><?php echo $key['courseName']; ?></td>
					<td width="20%"><?php echo $key['courseCode']; ?></td>
					<td width="10%"><?php echo $key['courseCredit']; ?></td>
					<td width="20%" class="text-center"><a href="update_subject.php?subject_id=<?php echo $key['id']; ?>&name=<?php echo $key['courseName']; ?>&courseCode=<?php echo $key['courseCode'] ?>&courseCredit=<?php echo $key['courseCredit']; ?>" class="btn btn-success">Edit</a><a href="delete_subject.php?subject_id=<?php echo $key['id']; ?>" class="btn btn-success margin-left">Delete</a></td>
				</tr>
<?php } ?>
			</table>
<?php  } else {
	echo '<p class="worning">No subject available . Please Add some Subject. <a data-toggle="modal" data-target="#add_subject">Add Subject</a></p>';
} ?>

		</div>
	</div>
</div>
<?php
include 'include/add_subject_model.php';
include 'include/footer.php';
?>