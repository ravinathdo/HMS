<!DOCTYPE HTML>
<html>
    <head>
        <title>AROGYA HOSPITAL MANAGEMENT SYSTEM</title>
        <link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet" type="text/css"  media="all" />
        <link href="<?php echo base_url('css/bootstrap.css'); ?>" rel="stylesheet" type="text/css"/>
        <!--<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>-->
        <link rel="stylesheet" href="<?php echo base_url('css/responsiveslides.css') ?>">
        <script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>		
        <script src="<?php echo base_url('js/responsiveslides.min.js'); ?>"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                // Slideshow 1
                $("#slider1").responsiveSlides({
                    maxwidth: 2500,
                    speed: 600
                });
            });
        </script>
    </head>
    <body>
        <!---start-wrap---->
        <!---start-header---->
        <div class="header">
            <div class="main-header">
                <div class="wrap">
                    <?php $this->load->view('admin/_head_admin'); ?>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="clear"> </div>
            <div class="top-nav">
                <div class="wrap">
                    <ul>
                        <?php $this->load->view('admin/_menu_admin'); ?>
                        <div class="clear"> </div>
                    </ul>
                </div>
            </div>
        </div>
        <!---End-header---->

        <!----start-content----->
        <div class="content">
            <div class="row">
                <div class="col-md-2"> 
                    <?php $this->load->view('admin/_tree_admin'); ?>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <?= $msg ?>
                        <div class="col-md-6">
                            <h3>Doctor Details update</h3>
                            <input type="hidden" name="doctor_id"/>
                            <form class="form-horizontal" action="<?= base_url('Admin_Controller/updateProfile') ?>" method="post">
                                <input type="hidden" name="id" value="<?= $docDetails[0]->id ?>"/>
                                <div class="form-group">
                                    <label for="" class="control-label col-xs-4">First Name</label> 
                                    <div class="col-xs-8">
                                        <input id="" name="" type="text" class="form-control" readonly=""  value="<?= $docDetails[0]->first_name ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text" class="control-label col-xs-4">Last Name</label> 
                                    <div class="col-xs-8">
                                        <input id="text" name="text" type="text" class="form-control" readonly=""  value="<?= $docDetails[0]->last_name ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text1" class="control-label col-xs-4">NIC</label> 
                                    <div class="col-xs-8">
                                        <input id="text1" name="text1" type="text" class="form-control" readonly=""  value="<?= $docDetails[0]->nic ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text2" class="control-label col-xs-4">Email</label> 
                                    <div class="col-xs-8">
                                        <input id="text2" name="text2" type="text" class="form-control" readonly=""  value="<?= $docDetails[0]->email ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text3" class="control-label col-xs-4">Telephone</label> 
                                    <div class="col-xs-8">
                                        <input id="text3" name="text3" type="text" class="form-control" readonly=""  value="<?= $docDetails[0]->telephone ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text4" class="control-label col-xs-4">Specialized</label> 
                                    <div class="col-xs-8">
                                        <input id="text4" name="text4" type="text" class="form-control" readonly=""  value="<?= $docDetails[0]->specialist ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text5" class="control-label col-xs-4">Degree</label> 
                                    <div class="col-xs-8">
                                        <input id="text5" name="text5" type="text" class="form-control" readonly=""  value="<?= $docDetails[0]->degree ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text6" class="control-label col-xs-4">SLMCS</label> 
                                    <div class="col-xs-8">
                                        <input id="text6" name="text6" type="text" class="form-control" readonly=""  value="<?= $docDetails[0]->slmc_no ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text7" class="control-label col-xs-4">Doctor Fee</label> 
                                    <div class="col-xs-8">
                                        <input id="text7" name="doc_fee" type="number" class="form-control"  value="<?= $docDetails[0]->doc_fee ?>">
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label for="text7" class="control-label col-xs-4">Status</label> 
                                    <div class="col-xs-8">
                                        <select id="specialist_id"  name="status_code" class="select form-control">
                                            <option value="">--select--</option>
                                            <option value="ACTIVE" <?php if ($docDetails[0]->status_code == 'ACTIVE') { ?> selected="" <?php } ?>>ACTIVE</option>
                                            <option value="DEACTIVE" <?php if ($docDetails[0]->status_code == 'DEACTIVE') { ?> selected="" <?php } ?>>DEACTIVE</option>
                                        </select>
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="col-xs-offset-4 col-xs-8">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>



                        </div>
                        <div class="col-md-6">
                            <h3>Reset Password</h3>
                            <form action="<?= base_url('Admin_Controller/restDoctorPassword') ?>" method="post">
                                <input type="hidden" name="doctor_id" value="<?= $docDetails[0]->id; ?>"/>
                                <input type="hidden" name="doctor_nic" value="<?= $docDetails[0]->nic; ?>"/>
                                <button name="submit" type="submit" class="btn btn-primary">Reset Password</button>
                            </form>


                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!----End-content----->
        <!---End-wrap---->
        <!---start-footer---->
        <?php $this->load->view('_footer'); ?>
        <!---End-footer---->
    </body>
</html>

