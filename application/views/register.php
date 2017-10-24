<?php include 'partials/header.php '?>

    <div id="container" style="z-index: -1;">
        <div align="center"> <h2 style="background-color: white; padding: 20px;">Registration Form</h2>
            <div class="container">



                <?php echo validation_errors()?>

                <?php echo form_open('Register/reg')?>

                <div  class="well form-horizontal" >
                    <fieldset>

                        <!-- Form Name -->


                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">Company Name</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input  name="company_name" placeholder="Enter your Company Name" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">Company E-Mail</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input name="company_email" placeholder="Enter your Company E-Mail Address" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Contact No.</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                    <input name="contact_no" placeholder="Enter your Company Telephone Number" class="form-control" type="text">
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-md-4 control-label" >Address</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                                    <input name="address" placeholder="Enter your Company Addreass" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>



                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">Username</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input  name="user_name" placeholder="Username" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label" >Password</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="user_password" placeholder="Password" class="form-control"  type="password">
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label" >Confirm Password</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="confirm_password" placeholder="Confirm Password" class="form-control"  type="password">
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->



                        <!-- Text input-->


                        <div class="input-group" style="">
                            <input name="pro_company_logo" placeholder="Upload Logo" value="" type="file">
                            <span class="text-danger"></span>

                        </div>

                        <!-- Select Basic -->

                        <!-- Success message -->
                        <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4"><br>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                            </div>
                        </div>

                        </div>
                    </fieldset>
                <?php echo form_close()?>
            </div>
        </div><!-- /.container -->

            </div>
        </div>
<?php include 'partials/footer.php '?>