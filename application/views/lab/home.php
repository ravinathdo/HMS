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
                    <?php $this->load->view('lab/_head_lab'); ?>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="clear"> </div>
            <div class="top-nav">
                <div class="wrap">
                    <ul>
                        <?php $this->load->view('lab/_menu_lab'); ?>
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
                    <?php $this->load->view('lab/_tree_lab'); ?>
                </div>
                <div class="col-md-10">
                    <h2>LAB</h2>
                    <a href="<?php echo base_url('LAB_Controller/loadInventoryManage'); ?>">
                        <img src="<?= base_url('/images/icon-stock.png') ?>" alt="..." class="img-thumbnail tile-icon" title="Inventory Items">
                    </a>
                    <a href="<?php echo base_url('LAB_Controller/loadLabCenterManage'); ?>">
                        <img src="<?= base_url('/images/icon-lab-center.png') ?>" alt="..." class="img-thumbnail tile-icon" title="Centers">
                    </a>
                    <a href="<?php echo base_url('LAB_Controller/loadItemRequest'); ?>">
                        <img src="<?= base_url('/images/icon-item.png') ?>" alt="..." class="img-thumbnail tile-icon" title="Items Request">
                    </a>
                    <a href="<?php echo base_url('LAB_Controller/loadCostManagement'); ?>">
                        <img src="<?= base_url('/images/icon-cost.png') ?>" alt="..." class="img-thumbnail tile-icon" title="Cost Management">
                    </a>
                    <a href="<?php echo base_url('LAB_Controller/loadPatientList'); ?>">
                        <img src="<?= base_url('/images/icon-patient.png') ?>" alt="..." class="img-thumbnail tile-icon" title="Patient List">
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

