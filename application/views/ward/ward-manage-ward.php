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
                <div class="col-md-5">

                    <div class="panel panel-warning">
                        <div class="panel-heading ">Ward Creation</div>
                        <div class="panel-body">
                            <?= $msg ?>
                            <form class="form-horizontal" action="<?= base_url('WARD_Controller/wardCreation') ?>" method="post">
                                <div class="form-group">
                                    <label for="text" class="control-label col-xs-4">Ward Name</label> 
                                    <div class="col-xs-8">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-address-card"></i>
                                            </div> 
                                            <input id="text" name="ward_name" type="text" required="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="select" class="control-label col-xs-4">Doctor</label> 
                                    <div class="col-xs-8">
                                        <select id="select" name="doctor_incharge" required="" class="select form-control">
                                            <option value="">--select--</option>
                                            <?php foreach ($doctorList as $value) {
                                                ?>
                                                <option value="<?= $value->id ?>">Dr.<?= $value->first_name ?> <?= $value->last_name ?></option>
                                            <?php }
                                            ?>
                                        </select>
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


                    <table border="0" class="table-bordered" style="width: 100%" >
                        <thead>
                            <tr>
                                <th>Ward No</th>
                                <th>Ward Name</th>
                                <th>Doctor incharge</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
//                            echo '<tt><pre>' . var_export(, TRUE) . '</pre></tt>';
                            if ($wardList != null)
                                foreach ($wardList as $value) {
                                    ?>
                                    <tr>
                                        <td><?= $value->ward_no ?></td>
                                        <td><?= $value->ward_name ?></td>
                                        <td><?= $value->first_name ?> <?= $value->last_name ?></td>
                                    </tr>
                                    <?php
                                }
                            ?>

                        </tbody>
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

