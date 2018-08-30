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
            <div class="top-header">
                <div class="wrap">
                    <?php $this->load->view('_head_pre'); ?>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="main-header">
                <div class="wrap">
                    <div class="logo">
                        <a href="index.html"><img src="<?php echo base_url('images/logo.png'); ?>" title="logo" /></a>
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
                    <h2 style="text-align: center">HMS Login</h2>
                    <?= $msg?>
                    <form class="form-horizontal" action="<?php echo base_url('Admin_Controller/adminLogin');?>" method="post">
                        <div class="form-group">
                            <label for="email" class="control-label col-xs-4">NIC</label> 
                            <div class="col-xs-8">
                                <input id="nic" name="nic" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pword" class="control-label col-xs-4">Password</label> 
                            <div class="col-xs-8">
                                <input id="pword" name="pword" type="password" class="form-control">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <div class="col-xs-offset-4 col-xs-8">
                                <button name="submit" type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <!----End-content----->
        <!---End-wrap---->
       <!----start-content----->
        <?php $this->load->view('_middle_content'); ?>
        <!----End-content----->

        <!---start-footer---->
        <?php $this->load->view('_footer'); ?>
        <!---End-footer---->
    </body>
</html>

