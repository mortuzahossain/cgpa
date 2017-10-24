
<div class="modal fade" id="add_subject" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Subject</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="post" action="add_subject.php">
          <div class="form-group">
            <label class="col-sm-2 control-label model_label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="EEE" name="subject" required="1">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label model_label">Code</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="EEE3102" name="course_code" required="1">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label model_label">Credit</label>
            <div class="col-sm-10">
              <input type="number" step="0.01" class="form-control" placeholder="3.00" name="credit" required="1">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-10 col-sm-2">
              <button name="add_subject" type="submit" class="btn btn-success">Add</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>