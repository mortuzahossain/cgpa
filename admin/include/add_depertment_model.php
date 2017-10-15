
<div class="modal fade" id="add_depertment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Depertment</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="post" action="add_depertment.php">
          <div class="form-group">
            <label class="col-sm-2 control-label model_label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="EEE" name="depertmentname" required="1">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-10 col-sm-2">
              <button name="add_depertment" type="submit" class="btn btn-success">Add</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>