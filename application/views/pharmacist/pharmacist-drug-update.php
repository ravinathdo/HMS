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
                <div class="col-md-5">
                    <div class="panel panel-warning">
                        <div class="panel-heading ">
                            <h3><img src="<?= base_url('/images/icon-drug.png') ?>" style="width: 30px" /> Update Drug </h3>
                        </div>
                        <div class="panel-body">
                            <span class="mando-msg">* fields are mandatory</span>
                            <?= $msg ?>
                            <form class="form-horizontal" action="<?= base_url('Pharmacist_Controller/updateDrug') ?>" method="post">
                                <input  name="id"  required="" type="hidden" class="form-control" value="<?= $drugDetail->id ?>"/>

                                <div class="form-group">
                                    <label for="text" class="control-label col-xs-4">Drug Name <span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input  name="drug_name"  required="" type="text" class="form-control" value="<?= $drugDetail->drug_name ?>"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text1" class="control-label col-xs-4">Qty <span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input id="text1" name="qty"  required="" type="number" class="form-control" value="<?= $drugDetail->qty ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text2" class="control-label col-xs-4">Price <span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input id="text2" name="price" required="" type="text" class="form-control" value="<?= $drugDetail->price ?>">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="col-xs-offset-4 col-xs-8">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">



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

