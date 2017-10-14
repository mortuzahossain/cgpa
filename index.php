<?php
include 'include/header.php';
include 'include/db_config.php';

/*
    TODO:
    01. Showing University in university Selector                       -- Done
    02. Showing Depertment using JQUERY                                 -- Done
    03. Generate Dynamic Query and send it into calculation part        -- Pending
*/
/*session_start();
if (isset($_POST['student_select'])) {
    $university = $_POST['university'];
    $deptertment = $_POST['deptertment'];
    $level = $_POST['level'];
    $term = $_POST['term'];

    $goto = 1;
    $_SESSION['goto'] = $goto;

    if (!empty($university) && !empty($deptertment) && !empty($level) && !empty($term)) {
        $dynamic_sql = "SELECT * FROM data WHERE universityName = '$university' AND depertment = '$deptertment' AND level = '$level' AND tearm = '$term'";
        $_SESSION['sql'] = $dynamic_sql;
        //echo $dynamic_sql;
        header("Location: input.php");
    } else {
        header("Location: index.php");
    }
}
*/


?>
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class=".col-sm-4 col-md-4 about-me .col-xs-2 ">
                <div class="about-top text-center">
                    <h2>About Developer</h2>
                    <img src="img/me.jpg" alt="My Photo">
                    <div class="detail">
                        <h3>Md. Mortuza Hossain</h3>
                        <p>BAUST</p>
                        <p>ID: 150102099</p>
                    </div>
                </div><div class="about-add-botton">
                <h3  data-toggle="modal" data-target="#add_university" >Add your University</h3>
            </div>
        </div>
        <div class=".col-sm-8 col-md-8 input-fields">
            <h2>Enter Your Information</h2>
            <div class="main-form-field">
                <form action="input.php" method="post" class="form-horizontal">
                    <div class="form-group has-success has-feedback">
                        <label class="control-label col-sm-3">University:</label>
                        <div class="col-sm-9">
                            <select class="mypicker selectpicker show-tick"  id="university-list"  name="university" required="1" onChange="getDepertment(this.value);">
                                <option value="">Select Your University</option>
<?php
$sql = "SELECT * FROM universitys";
$result = mysqli_query($con,$sql);
$row = mysqli_num_rows($result);
if ($row) { 
    while ($row =mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
foreach ($data as $key) { ?>

        <option value="<?php echo $key['universityName'] ?>"><?php echo $key['universityName'] ?></option>

<?php } } ?>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group has-success has-feedback">
                        <label class="control-label col-sm-3">Department:</label>
                        <div class="col-sm-9">
<select class="mypicker selectpicker show-tick" id="depertment_list" name="deptertment" required="1">
    <option value="">Select Your Department</option>
</select>
                        </div>
                    </div>
                    <div class="form-group has-success has-feedback">
                        <label class="control-label col-sm-3">Level:</label>
                        <div class="col-sm-9">
                            <select class="mypicker selectpicker show-tick" name="level" required="1">
                                <option value="">Select Your Level</option>
                                <option value="1" >1</option>
                                <option value="2" >2</option>
                                <option value="3" >3</option>
                                <option value="4" >4</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group has-success has-feedback">
                        <label class="control-label col-sm-3">Term:</label>
                        <div class="col-sm-9">
                            <select class="mypicker selectpicker show-tick" name="term" required="1">
                                <option value="">Select Your Term</option>
                                <option value="1" >&#8544;</option>
                                <option value="2" >&#8545;</option>
                                <option value="3" >&#8546;</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group inputbutton">
                        <div class="col-sm-offset-5 col-sm-7">
                            <input class="btn btn-success" type="submit" name="student_select" value="Enter">
                            <input class="btn btn-danger" type="reset" name="Reset">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    function getDepertment(val) {
        //alert(val);

        $.ajax({
            type: "POST",
            url: "get_depertment.php",
            data:'universityName='+val,
            success: function(data){
                $("#depertment_list").html(data);
            }
        });
    }
</script>

<?php include 'include/footer.php'; ?>