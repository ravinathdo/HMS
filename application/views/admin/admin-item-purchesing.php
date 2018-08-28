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

                    <div class="panel panel-warning">
                        <div class="panel-heading ">
                            <h4>  Pending Item Purchasing Approvals </h4>
                        </div>
                        <div class="panel-body">
                            <?= $msg ?>
                            <table class="table-bordered" style="width: 100%">
                                <tr style="font-weight: bold">
                                    <td>Item Name</td>
                                    <td>Qty</td>
                                    <td>Status</td>
                                    <td>Request Date</td>
                                    <td>Request By</td>
                                    <td></td>
                                </tr>
                                <?php 
                                if($purchasePendingList != null)
                                foreach ($purchasePendingList as $value) { ?>
                                    <tr>
                                        <td><?= $value->purchasing_item ?></td>
                                        <td><?= $value->qty ?></td>
                                        <td><?= $value->status_code ?></td>
                                        <td><?= $value->created_date ?></td>
                                        <td><?= $value->first_name ?></td>
                                        <td>
                                            <a href="<?= base_url('Admin_Controller/changeItemPurcheseStatus/REJECT/'.$value->id)?>" class="btn btn-warning btn-xs"> Reject </a>
                                            <a href="<?= base_url('Admin_Controller/changeItemPurcheseStatus/ACCEPT/'.$value->id)?>" class="btn btn-success btn-xs"> Accept </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
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

