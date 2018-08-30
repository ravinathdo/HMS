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
                <div class="col-md-3">
                    <div class="panel panel-warning">
                        <div class="panel-heading ">
                            <h3> <img src="<?= base_url('/images/icon-patient.png') ?>" style="width: 30px" /> Ambulance Request </h3>
                        </div>
                        <div class="panel-body">
                            <?php echo $msg; ?>
                            <form class="form-horizontal" action="<?php echo base_url('OPD_Controller/ambulanceRequest') ?>" method="post">

                                <div class="form-group">
                                    <label for="text" class="control-label col-xs-4">Date Time</label> 
                                    <div class="col-xs-8">
                                        <input id="text" name="datetime_need" required="" type="datetime-local" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text1" class="control-label col-xs-4">Comment</label> 
                                    <div class="col-xs-8">
                                        <textarea name="comment" type="text" class="form-control"></textarea>
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
                <div class="col-md-7">


                    <div class="panel panel-primary">
                        <div class="panel-heading ">Request List</div>
                        <div class="panel-body">

                            <table class="table-bordered" style="width: 100%">
                                <tr style="font-weight: bold">
                                    <td>Req No</td>
                                    <td>Request Date Time</td>
                                    <td>Comment</td>
                                    <td>Status</td>
                                    <td>Vehicle No</td>
                                    <td></td>
                                </tr>
                                <?php
                                if($myRequest!=null)
                                foreach ($myRequest as $value) {
                                    ?> 
                                    <tr>
                                        <td><?= $value->id ?></td>
                                        <td><?= $value->datetime_need ?></td>
                                        <td><?= $value->comment ?></td>
                                        <td><?= $value->status_code ?></td>
                                        <td><?= $value->vehicle_no ?></td>
                                        <td><?= $value->created_time ?></td>
                                    </tr>
                                <?php }
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

