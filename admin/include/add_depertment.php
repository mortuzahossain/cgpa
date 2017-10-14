<?php
if (isset($_POST['add_depertment'])) {
  $depertmentname = $_POST['depertmentname'];
  $sql = "INSERT INTO depertments (universityName,depertment) VALUES ($user_university,'$depertmentname')";

  if (mysqli_query($con,$sql)) { ?>
  
  <script type="text/javascript">
      alert("Data Save Successfully. :)");
  </script>
  
  <?php } else { ?>
    <script type="text/javascript">
      alert("Something Wrong Please Try Again");
  </script>
  <?php } ?>

<div class="modal fade" id="add_depertment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Depertment</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="post" action="">
          <div class="form-group">
            <label class="col-sm-2 control-label model_label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="EEE" name="depertmentname">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-10 col-sm-2">
              <button name="add_depertment" type="submit" class="btn btn-default">Add</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>