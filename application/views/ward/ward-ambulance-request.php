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
                    <?php $this->load->view('ward/_head_ward'); ?>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="clear"> </div>
            <div class="top-nav">
                <div class="wrap">
                    <ul>
                        <?php $this->load->view('ward/_menu_ward'); ?>
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
                    <?php $this->load->view('ward/_tree_ward'); ?>
                </div>
                <div class="col-md-4">


                    <div class="panel panel-success">
                        <div class="panel-heading ">Ambulance Request</div>
                        <div class="panel-body">

                            <?= $msg; ?>
                            <form class="form-horizontal" action="<?= base_url('WARD_Controller/ambulanaceRequest') ?>" method="post" >
                                <div class="form-group">
                                    <label for="" class="control-label col-xs-12">Request From Transport Manager</label> 
                                </div>
                                <div class="form-group">
                                    <label for="textarea" class="control-label col-xs-4">Text Area</label> 
                                    <div class="col-xs-8">
                                        <textarea required="" id="textarea"  name="comment" cols="40" rows="5" class="form-control"></textarea>
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
                <div class="col-md-6">


                    <div class="panel panel-warning">
                        <div class="panel-heading ">Member Registration</div>
                        <div class="panel-body">

                            <table border="1" style="width: 100%" class="table-bordered">
                                <thead>
                                    <tr style="font-weight: bold">
                                        <th>ID</th>
                                        <th>Comment</th>
                                        <th>Status</th>
                                        <th>Created Date Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if($myRequestVehicles!=null)
                                    foreach ($myRequestVehicles as $value) {
                                        ?> 
                                        <tr>
                                            <td><?= $value->id ?></td>
                                            <td><?= $value->comment ?></td>
                                            <td><?= $value->status_code ?></td>
                                            <td><?= $value->created_time ?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>


                                </tbody>
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

