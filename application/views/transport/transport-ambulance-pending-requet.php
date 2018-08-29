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
                <div class="col-md-10">
                    <?php // echo '<tt><pre>' . var_export($reqAllList, TRUE) . '</pre></tt>'; ?>
                    <div class="panel panel-warning">
                        <div class="panel-heading ">
                            <h4> Pending Ambulance Request</h4>
                        </div>
                        <div class="panel-body">
                            <?php
                            echo $msg;
//                            echo '<tt><pre>' . var_export($pendingRequest, TRUE) . '</pre></tt>';
                            ?>
                            <table style="width: 100%">
                                <?php
                                if ($pendingRequest != null)
                                    foreach ($pendingRequest as $value) {
                                        ?>
                                        <tr>
                                            <td><?= $value->created_time ?></td>
                                            <td><?= $value->comment ?></td>
                                            <td><a href=""><?= $value->status_code ?></a> 
                                            </td>
                                            <td style="width: 30%">
                                                <form action="<?= base_url('Transport_Controller/approveRequest')?>" method="post">
                                                    <input type="hidden" name="req_id" value="<?= $value->id ?>" />
                                                    <?php
                                                    if ($value->status_code == 'PENDING') {
                                                        ?>
                                                    <select name="vehicle_id" class="form-control">
                                                            <?php
                                                            foreach ($vehicleAllList as $va) {
                                                                ?>
                                                                <option value="<?= $va->id ?>"><?= $va->vehicle_number ?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                        <?php
                                                    }
                                                    ?> 
                                                    <input type="submit" value="Assign" class="btn btn-success btn-xs" />
                                                </form>
                                               
                                            </td>
                                            <td> <a href="<?php echo base_url('')?>" class="btn btn-danger btn-xs">Reject</a></td>
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

