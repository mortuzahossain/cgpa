<div class="modal fade" id="universal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Universal Calculator</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" method="post" action="universqal_calculator.php">
                <div class="form-group">
                    <label class="col-sm-2 control-label model_label">How many Subject You need</label>
                    <div class="col-sm-10">
                        <input type="number" step="1" min="1" max="100" class="form-control" value="2" name="subject_no">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-10 col-sm-2">
                        <button name="generate" type="submit" class="btn btn-success">Generate</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
