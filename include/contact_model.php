


<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Login</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" method="post" action="mail.php">
                <div class="form-group">
                    <label class="col-sm-2 control-label model_label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="name@example.com" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label model_label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="name@example.com" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label model_label">Message</label>
                    <div class="col-sm-10">
                        <textarea name="message" placeholder="Message" class="form-control" rows="7"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-10 col-sm-2">
                        <button name="sendmail" type="submit" class="btn btn-success">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
