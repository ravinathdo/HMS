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
                <div class="col-md-8">
                    <?php // echo '<tt><pre>' . var_export($reqAllList, TRUE) . '</pre></tt>'; ?>
                    <div class="panel panel-warning">
                        <div class="panel-heading ">
                            <h4>  Ambulance Request</h4>
                        </div>
                        <div class="panel-body">
                            <?php $msg ?>
                            <table style="width: 100%">
                                <?php
                                if($reqAllList!=null)
                                foreach ($reqAllList as $value) {
                                    ?>
                                    <tr>
                                        <td><?= $value->vehicle_number ?></td>
                                        <td><a href=""><?= $value->status_code ?></a>  
                                            <?php
                                            if ($value->status_code != 'COMPLETE') {
                                                ?>
                                                <a href="<?php echo base_url('Transport_Controller/updateTravelStatus/' . $value->id . '/ACCEPT') ?>" class="btn btn-success btn-xs" >Accept</a>
                                                <a href="<?php echo base_url('Transport_Controller/updateTravelStatus/' . $value->id . '/REJECT') ?>" class="btn btn-danger btn-xs">Reject</a>
                                                <?php
                                            }
                                            ?>
                                        </td>
                                        <td><a href=""><?= $value->first_name ?> [<?= $value->telephone ?>] <?= $value->user_role ?></a></td>
                                    </tr>
                                    <?php
                                }
                                ?>


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

