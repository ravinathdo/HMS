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
                <div class="col-md-5">
                    <?= $msg ?>
                    <div class="panel panel-warning">
                        <div class="panel-heading ">
                            <h3> <img src="<?= base_url('/images/icon-lab-center.png') ?>" style="width: 30px" />  Lab Center Manage </h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="<?php echo base_url('LAB_Controller/setCenter') ?>" method="post">
                                <div class="form-group">
                                    <label for="text" class="control-label col-xs-4">Center Name</label> 
                                    <div class="col-xs-8">
                                        <input id="text" name="center_name" type="text" class="form-control">
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


                    <br>
                    <div class="panel panel-success">
                        <div class="panel-heading ">Center Test Details</div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="<?= base_url('LAB_Controller/addCenterTestDetails') ?>" method="post">
                                <div class="form-group">
                                    <label for="" class="control-label col-xs-4">Test Name</label> 
                                    <div class="col-xs-8">
                                        <input id="" name="lab_test" required="" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="select" class="control-label col-xs-4">Center</label> 
                                    <div class="col-xs-8">
                                        <select id="select" name="center_name" class="select form-control">
                                            <?php
                                            if ($centerList)
                                                foreach ($centerList as $value) {
                                                    ?> 
                                                    <option value="<?= $value->center_name ?>"><?= $value->center_name ?></option>

                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textarea" class="control-label col-xs-4">Description</label> 
                                    <div class="col-xs-8">
                                        <textarea id="textarea" name="description" cols="40" rows="5" class="form-control"></textarea>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label for="textarea" class="control-label col-xs-4">Cost</label> 
                                    <div class="col-xs-8">
                                        <input id="" name="test_cost" required="" type="number" class="form-control">
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
                    <table class="table-bordered" style="width: 100%" >
                        <thead>
                            <tr>
                                <th>Center Name</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($centerList)
                                foreach ($centerList as $value) {
                                    ?>
                                    <tr>
                                        <td><?= $value->center_name ?></td>
                                        <td><a href="<?php echo base_url('LAB_Controller/getTestDetailsForCenters/' . $value->center_name) ?>">View Center Test Details</a></td>
                                    </tr>
                                <?php }
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

