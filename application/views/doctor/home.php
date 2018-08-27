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
                    <?php $this->load->view('doctor/_head_doctor'); ?>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="clear"> </div>
            <div class="top-nav">
                <div class="wrap">
                    <ul>
                        <?php $this->load->view('doctor/_menu_doctor'); ?>
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
                    <?php $this->load->view('doctor/_tree_doctor'); ?>
                </div>
                <div class="col-md-6">
                    <h2>Doctor</h2>
                    <a href="<?php echo base_url('Doctor_Controller/loadAvailability'); ?>">
                        <img src="<?= base_url('/images/icon-doctor.png') ?>" alt="..." class="img-thumbnail tile-icon" title="My Availability">
                    </a>
                    <a href="<?php echo base_url('Doctor_Controller/getAppointmentList');?>/<?php echo $this->session->userdata('userbean')->id ?>">
                        <img src="<?= base_url('/images/icon-manage-applointment.png') ?>" alt="..." class="img-thumbnail tile-icon" title="Manage Appointment">
                    </a>
                    <a href="<?php echo base_url('Doctor_Controller/loadDrugDetails');?>">
                        <img src="<?= base_url('/images/icon-drug.png') ?>" alt="..." class="img-thumbnail tile-icon" title="Drug Availability">
                    </a>
                    <a href="<?php echo base_url('Doctor_Controller/loadWard');?>">
                        <img src="<?= base_url('/images/icon-ward.png') ?>" alt="..." class="img-thumbnail tile-icon" title="Ward">
                    </a>
                    <a href="<?php echo base_url('Doctor_Controller/loadPatientList');?>">
                        <img src="<?= base_url('/images/icon-patient.png') ?>" alt="..." class="img-thumbnail tile-icon" title="Patient Details">
                    </a>
                      <a href="<?php echo base_url('#'); ?>">
                        <img src="<?= base_url('/images/icon-report.png') ?>" alt="..." title="Report" class="img-thumbnail tile-icon">
                    </a>
                    <a href="<?php echo base_url('User_Controller/loadProfile'); ?>">
                        <img src="<?= base_url('/images/icon-profile.png') ?>" alt="..." title="Profile" class="img-thumbnail tile-icon">
                    </a>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-danger">
                        <div class="panel-heading ">Dash Board</div>
                        <div class="panel-body">
                            <button type="button" class="btn btn-default btn-xs">20-08-2018</button>
                            <button type="button" class="btn btn-default btn-xs">22-08-2018</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"> </div>
                <div class="col-md-6"> 
                <img src="<?= base_url('/images/_chart_3.jpg') ?>"/></div>
                <div class="col-md-6"> </div>
            </div>
        </div>
        <!----End-content----->
        <!---End-wrap---->
        <!---start-footer---->
                 <?php $this->load->view('_footer'); ?>
        <!---End-footer---->
    </body>
</html>

