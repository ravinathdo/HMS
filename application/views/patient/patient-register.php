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
            <div class="top-header">
                <div class="wrap">
                    <?php $this->load->view('_head_pre'); ?>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="main-header">
                <div class="wrap">
                    <div class="logo">
                        <a href="<?= base_url('/') ?>"><img src="<?php echo base_url('images/logo.png'); ?>" title="logo" /></a>
                    </div>
                    <div class="social-links">
                        <ul>
                            <li><a href="#"><img src="<?php echo base_url('images/facebook.png'); ?>" title="facebook" /></a></li>
                            <li><a href="#"><img src="<?php echo base_url('images/twitter.png'); ?>" title="twitter" /></a></li>
                            <li><a href="#"><img src="<?php echo base_url('images/feed.png'); ?>" title="Rss" /></a></li>
                            <div class="clear"> </div>
                        </ul>
                    </div>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="clear"> </div>
            <div class="top-nav">
                <div class="wrap">
                    <ul>
                        <?php $this->load->view('_menu_pre'); ?>
                        <div class="clear"> </div>
                    </ul>
                </div>
            </div>
        </div>
        <!---End-header---->

        <!----start-content----->
        <div class="content">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">

                    <h2 style="text-align: center">Patient Registration</h2>
                    <?= $msg ?>
                    <?php echo validation_errors(); ?>
                    <form class="form-horizontal" action="<?php echo base_url('/Patient_Controller/patientRegister') ?>" method="post">
                        <span class="mando-msg">* fields are mandatory</span>
                        <div class="form-group">
                            <label class="control-label col-xs-4" for="first_name">First Name <span class="mando-msg">*</span></label> 
                            <div class="col-xs-8">
                                <input id="first_name" name="first_name" type="text" class="form-control" required="required" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="control-label col-xs-4">Last Name</label> 
                            <div class="col-xs-8">
                                <input id="last_name" name="last_name" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telephone" class="control-label col-xs-4">Telephone Number</label> 
                            <div class="col-xs-8">
                                <input id="telephone" name="telephone" type="number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telephone" class="control-label col-xs-4">Date of Birth</label> 
                            <div class="col-xs-8">
                                <input id="dob" name="dob" type="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email"  class="control-label col-xs-4">Email  <span class="mando-msg">*</span></label> 
                            <div class="col-xs-8">
                                <input id="email" required="" name="email" type="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pword" class="control-label col-xs-4">Password  <span class="mando-msg">*</span></label> 
                            <div class="col-xs-8">
                                <input  id="pword" name="pword" type="password" class="form-control" required="required" placeholder="Min 6 characters">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="repword" class="control-label col-xs-4">Retype Password</label> 
                            <div class="col-xs-8">
                                <input name="repword" required="required" type="password" class="form-control" id="repword" oninput="check(this)" />
                            </div>

                            <script language='javascript' type='text/javascript'>
                                function check(input) {
                                    if (input.value != document.getElementById('pword').value) {
                                        input.setCustomValidity('Password Must be Matching.');
                                    } else {
                                        // input is valid -- reset the error message
                                        input.setCustomValidity('');
                                    }
                                }
                            </script>

                        </div> 
                        <div class="form-group row">
                            <div class="col-xs-offset-4 col-xs-8">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <!----End-content----->
        <!---End-wrap---->
         <!---start-footer---->
        <?php $this->load->view('_footer'); ?>
        <!---End-footer---->
    </body>
</html>

