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
                    <h3>OPD Appointment List</h3>
                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Appo. Date</th>
                                <th>Patient</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($oPDAppointmentList as $value) {
                                ?> 
                                <tr>
                                    <td><?= $value->id ?></td>
                                    <td><?= $value->appointment_date ?></td>
                                    <td><?= $value->first_name ?></td>
                                    <td><?= $value->status_code ?></td>
                                    <td><a href="<?= base_url('OPD_Controller/getOPDAppointmentDetail/'.$value->id) ?>">view</a></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <link href="<?= base_url('css/jquery.dataTables.min.css') ?>" rel="stylesheet" type="text/css"/>
                    <script src="<?= base_url('js/jquery.dataTables.min.js') ?>" type="text/javascript"></script>
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

