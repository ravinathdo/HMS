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

                <div class="col-md-10">

                    <div class="panel panel-warning">
                        <div class="panel-heading ">Appointment Request</div>
                        <div class="panel-body">

                            <table class="table-bordered" style="width: 100%">
                                <tr style="font-weight: bold">
                                    <td>Appointment No</td>
                                    <td>Appo. Date</td>
                                    <td>Patient Details</td>
                                    <td>Status</td>
                                    <td>Created Datetime</td>
                                </tr>
                                <?php
                                if ($opdAppoList != null)
                                    foreach ($opdAppoList as $value) {
                                        ?>
                                        <tr>
                                            <td><?= $value->id ?></td>
                                            <td><?= $value->appointment_date ?></td>
                                            <td>[<?= $value->created_user ?>] <?= $value->first_name ?></td>
                                            <td><?= $value->status_code ?>
                                                <?php if ($value->status_code == 'OPEN') { ?>
                                                    <form action="<?php echo base_url('OPD_Controller/wardPlacement') ?>" method="post">
                                                        <input type="hidden" name="patient_id" value="<?php echo $value->created_user; ?>" />
                                                        <input type="hidden" name="appointment_id" value="<?php echo $value->id; ?>" />
                                                        <select name="ward_id">
                                                            <?php foreach ($wardList as $va) {
                                                                ?>
                                                            <option value="<?= $va->ward_no ?>"> [<?= $va->ward_no ?>] <?= $va->ward_name ?></option>
                                                            <?php }
                                                            ?>
                                                        </select>
                                                        <input type="submit" />
                                                    </form>
                                                    <a href="">Reject</a>
                                                <?php } ?>


                                            </td>
                                            <td><?= $value->created_date ?></td>
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

