
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Login</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" method="post" action="">
                <div class="form-group">
                    <label class="col-sm-2 control-label model_label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="name@example.com" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label model_label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" placeholder="password" name="roll">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-10 col-sm-2">
                        <button name="saveme" type="submit" class="btn btn-default">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


<div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
    <div class="modal-content mymodel">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Registration Now</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" method="post" action="signup.php">
                <div class="form-group">
                    <label class="col-sm-2 control-label model_label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Mortuza" name="name" required="1" minlength="5">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label model_label">User Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="mortuza" name="username" required="1" minlength="5">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label model_label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" placeholder="name@example.com" name="email" required="1" minlength="10">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label model_label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" placeholder="password" name="password" required="1" minlength="6">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label model_label">University Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="BAUST" name="university" required="1" minlength="2">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-10 col-sm-2">
                        <button name="signup" type="submit" class="btn btn-default">Signup</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>