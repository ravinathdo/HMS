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
            <div class="main-header">
                <div class="wrap">
                    <?php $this->load->view('opd/_head_opd'); ?>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="clear"> </div>
            <div class="top-nav">
                <div class="wrap">
                    <ul>
                        <?php $this->load->view('opd/_menu_opd'); ?>
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
                    <?php $this->load->view('opd/_tree_opd'); ?>
                </div>
                <div class="col-md-7">
                    <h3>OPD Home</h3>
                    <a href="<?php echo base_url('OPD_Controller/loadListPatient'); ?>">
                        <img src="<?= base_url('/images/icon-patient.png') ?>" alt="..." class="img-thumbnail tile-icon" title="Patient Details">
                    </a>
                    <a href="<?php echo base_url('OPD_Controller/loadPatientOpdHistory'); ?>">
                        <img src="<?= base_url('/images/icon-opd-applointment.png') ?>" alt="..." class="img-thumbnail tile-icon" title="OPD Appointment">
                    </a>
                    <a href="<?php echo base_url('OPD_Controller/loadAmbulanceRequest'); ?>">
                        <img src="<?= base_url('/images/icon-ambulance.png') ?>" alt="..." class="img-thumbnail tile-icon" title="Ambulance Request">
                    </a>
                    <a href="<?php echo base_url('#'); ?>">
                        <i class="fas fa-address-book   fa-5x img-thumbnail tile-icon"></i> Reports
                    </a>
                    <a href="<?php echo base_url('User_Controller/loadProfile'); ?>">
                        <i class="fas fa-user-cog fa-5x img-thumbnail tile-icon"></i> Profile
                    </a>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-warning">
                        <div class="panel-heading ">Dash Board</div>
                        <div class="panel-body">
                            <button type="button" class="btn btn-primary">12</button>   Item Request
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

