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
                <div class="col-md-10">
                    <?= $msg ?>

                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Ward Number</th>
                                <th>Patient Name</th>
                                <th>Comment</th>
                                <th>Date Time</th>
                                <th>Status</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($allAdmits as $value) { ?>
                                <tr>
                                    <td><?= $value->id ?></td>
                                    <td><?= $value->first_name ?> <?= $value->last_name ?></td>
                                    <td><?= $value->comment ?></td>
                                    <td><?= $value->created_date ?></td>
                                    <td><?= $value->status_code ?></td>
                                    <td>
                                        <?php
                                        if ($value->status_code == 'ADMIT') {
                                            ?>
                                            <a href="<?= base_url('WARD_Controller/wardAdmitChangeStatus/' . $value->id . '/ACCEPT') ?>" class="btn btn-sm btn-success">Accept</a>
                                            <a href="<?= base_url('WARD_Controller/wardAdmitChangeStatus/' . $value->id . '/REJECT') ?>" class="btn  btn-sm btn-danger">Reject</a>
                                            <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php }
                            ?>

                        </tbody>
                    </table>
                    <link href="<?= base_url('css/jquery.dataTables.min.css')?>" rel="stylesheet" type="text/css"/>
                    <script src="<?= base_url('js/jquery.dataTables.min.js')?>" type="text/javascript"></script>
                    <script type="text/javascript">
            $(document).ready(function () {
                $('#example').DataTable();
            });
                    </script>


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

