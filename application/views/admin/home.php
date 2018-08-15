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
                <div class="col-md-7">
                    <h2>Administrator</h2>
                    <a href="<?php echo base_url('Admin_Controller/loadDoctorRegistration'); ?>">
                        <i class="fas fa-user-md fa-5x img-thumbnail tile-icon"></i>
                        <!--<img src="" alt="..." class="img-thumbnail tile-icon" title="Doctor Registration">-->
                    </a>
                    <a href="<?php echo base_url('Admin_Controller/loadUserRegistration'); ?>">
                        <i class="fas fa-users fa-5x img-thumbnail tile-icon"></i>
                    </a>
                    <a href="<?php echo base_url('Admin_Controller/loadItemPurchesing'); ?>">
                        <i class="fas fa-thermometer  fa-5x img-thumbnail tile-icon"></i>
                    </a>
                    <a href="<?php echo base_url('Admin_Controller/itemPurcheseHistory'); ?>">
                        <i class="fas fa-archive fa-5x img-thumbnail tile-icon"></i>
                    </a>
                    <a href="<?php echo base_url('Admin_Controller/loadPatientRegistration'); ?>">
                        <i class="fab fa-accessible-icon  fa-5x img-thumbnail tile-icon"></i>
                    </a>
                    <a href="<?php echo base_url('#'); ?>">
                        <i class="far fa-address-book   fa-5x img-thumbnail tile-icon"></i>
                    </a>
                    <a href="<?php echo base_url('#'); ?>">
                        <img src="<?= base_url('/images/icon-profile.png') ?>" alt="..." title="Profile" class="img-thumbnail tile-icon">
                    </a>

                </div>
                <div class="col-md-3">
                    <div class="panel panel-danger">
                        <div class="panel-heading ">Dash Board</div>
                        <div class="panel-body">
                             <button type="button" class="btn btn-danger">10</button> Item request
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-5"><img src="<?= base_url('/images/_chart_3.png') ?>"</div>
                <div class="col-md-5"></div>
            </div>
        </div>
        <!----End-content----->
        <!---End-wrap---->
        <!---start-footer---->
        <?php $this->load->view('_footer'); ?>
        <!---End-footer---->
    </body>
</html>

