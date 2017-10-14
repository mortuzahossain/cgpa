<?php include 'include/header.php'; ?>



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
                        <form action="" method="post" class="form-horizontal">
                            
                            <div class="form-group has-success has-feedback">
                                <label class="control-label col-sm-3">University:</label>
                                <div class="col-sm-9">
                                    <select class="mypicker selectpicker show-tick"  id="university-list"  name="university" required="1" onChange="getDepertment(this.value);">
                                        <option value="">Select Your University</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group has-success has-feedback">
                                <label class="control-label col-sm-3">Department:</label>
                                <div class="col-sm-9">
                                    <select class="mypicker selectpicker show-tick" id="depertment_list" name="dept" required="1">
                                        <option value="">Select Your Department</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group has-success has-feedback">
                                <label class="control-label col-sm-3">Level:</label>
                                <div class="col-sm-9">
                                    <select class="mypicker selectpicker show-tick" name="level" required="1">
                                        <option value="">Select Your Level</option>
                                        <option value="l1" >1</option>
                                        <option value="l2" >2</option>
                                        <option value="l3" >3</option>
                                        <option value="l4" >4</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group has-success has-feedback">
                                <label class="control-label col-sm-3">Term:</label>
                                <div class="col-sm-9">
                                    <select class="mypicker selectpicker show-tick" name="term" required="1">
                                        <option value="">Select Your Term</option>
                                        <option value="t1" >&#8544;</option>
                                        <option value="t2" >&#8545;</option>
                                        <option value="t3" >&#8546;</option>
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


<?php include 'include/footer.php'; ?>