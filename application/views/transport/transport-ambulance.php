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
                    <?php $this->load->view('transport/_head_transport'); ?>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="clear"> </div>
            <div class="top-nav">
                <div class="wrap">
                    <ul>
                        <?php $this->load->view('transport/_menu_transport'); ?>
                        <div class="clear"> </div>
                    </ul>
                </div>
            </div>
        </div>
        <!---End-header---->

        <!----start-content----->
        <div class="content">
            <div class="row">
                <div class="col-md-2">  <?php $this->load->view('transport/_tree_transport'); ?></div>
                <div class="col-md-5">

                    <div class="panel panel-warning">
                        <div class="panel-heading ">
                            <h3><img src="<?= base_url('/images/icon-ambulance.png') ?>" style="width: 30px" />     Ambulance</h3>
                        </div>
                        <div class="panel-body">
                            <?= $msg; ?>
                            <form class="form-horizontal" action="<?= base_url('Transport_Controller/setAmbulance') ?>" method="post">
                                <div class="form-group">
                                    <label for="text" class="control-label col-xs-4">Vehicle Number</label> 
                                    <div class="col-xs-8">
                                        <input id="text" required="" name="vehicle_number" type="text" class="form-control">
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
                    <h3>Ambulance Details</h3>
                    <table style="width: 50%">
                        <?php
                        if ($vehicleList != null)
                            foreach ($vehicleList as $value) {
                                ?>   
                                <tr>
                                    <td><?= $value->vehicle_number ?></td>
                                    <td><a href="<?= base_url('Transport_Controller/viewTravelHistory/' . $value->id) ?>">Travel History</a></td>
                                </tr>
                            <?php }
                        ?>

                    </table>
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

