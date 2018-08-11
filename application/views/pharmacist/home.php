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
                    <?php $this->load->view('pharmacist/_head_pharmacist'); ?>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="clear"> </div>
            <div class="top-nav">
                <div class="wrap">
                    <ul>
                        <?php $this->load->view('pharmacist/_menu_pharmacist'); ?>
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
                    <?php $this->load->view('pharmacist/_tree_pharmacist'); ?>
                </div>
                <div class="col-md-10">
                    <h2>Pharmacist</h2>
                    <a href="<?php echo base_url('Pharmacist_Controller/loadManageDrug'); ?>">
                        <img src="<?= base_url('/images/icon-drug.png') ?>" alt="..." class="img-thumbnail tile-icon" title="Manage Drug">
                    </a>
                    <a href="<?php echo base_url('Pharmacist_Controller/loadViewStock'); ?>">
                        <img src="<?= base_url('/images/icon-stock.png') ?>" alt="..." class="img-thumbnail  tile-icon" title="View Stock">
                    </a>
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

