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
                    <?php $this->load->view('doctor/_head_doctor'); ?>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="clear"> </div>
            <div class="top-nav">
                <div class="wrap">
                    <ul>
                        <?php $this->load->view('doctor/_menu_doctor'); ?>
                        <div class="clear"> </div>
                    </ul>
                </div>
            </div>
        </div>
        <!---End-header---->

        <!----start-content----->
        <div class="content" style="min-height: 500px">
            <div class="row">
                <div class="col-md-2"> 
                    <?php $this->load->view('doctor/_tree_doctor'); ?>
                </div>
                <div class="col-md-6">
                    <h2>Doctor</h2>
                    <table border="0">
                        <tbody>
                            <tr style="text-align: center">
                                <td>
                                    <a href="<?php echo base_url('Doctor_Controller/loadAvailability'); ?>">
                                        <i class="fas fa-user-md  fa-5x  tile-icon"></i> 
                                    </a>
                                </td>
                                <td> <a href="<?php echo base_url('Doctor_Controller/getAppointmentList'); ?>/<?php echo $this->session->userdata('userbean')->id ?>">
                                        <i class="fas fa-calendar-minus fa-5x  tile-icon"></i>
                                    </a></td>
                                <td> <a href="<?php echo base_url('Doctor_Controller/loadDrugDetails'); ?>">
                                        <i class="fas fa-capsules  fa-5x  tile-icon"></i>
                                    </a></td>
                                <td><a href="<?php echo base_url('Doctor_Controller/loadWard'); ?>">
                                        <i class="fas fa-hospital  fa-5x  tile-icon"></i>
                                    </a></td>
                                <td> <a href="<?php echo base_url('Doctor_Controller/loadPatientList'); ?>">
                                        <i class="fas fa-user  fa-5x  tile-icon"></i> 
                                    </a></td>
                                <td></td>
                            </tr>
                            <tr style="text-align: center">
                                <td>My Availability</td>
                                <td>Manage Appointment</td>
                                <td>Drug Availability</td>
                                <td>Ward</td>
                                <td>Patient Details</td>
                                <td></td>
                            </tr>


                            <tr style="text-align: center">
                                <td>
                                    <a href="<?php echo base_url('#'); ?>">
                                        <i class="fas fa-file-word fa-5x  tile-icon"></i>
                                    </a>
                                </td>
                                <td><a href="<?php echo base_url('User_Controller/loadProfile'); ?>">
                                        <i class="fas fa-users-cog fa-5x  tile-icon"></i>

                                    </a> </td>
                                <td> </td>
                                <td></td>
                                <td> </td>
                                <td></td>
                            </tr>
                            <tr style="text-align: center">
                                <td>Reports</td>
                                <td>Profile</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>









                </div>
                <div class="col-md-4">
                    <div class="panel panel-danger">
                        <div class="panel-heading ">Dash Board</div>
                        <div class="panel-body">
                            <!--                            <button type="button" class="btn btn-default btn-xs">20-08-2018</button>
                                                        <button type="button" class="btn btn-default btn-xs">22-08-2018</button>-->
                        </div>
                    </div>
                </div>
            </div>
<!--            <div class="row">
                <div class="col-md-2"> </div>
                <div class="col-md-6"> 
                    <img src="<?= base_url('/images/_chart_3.jpg') ?>"/></div>
                <div class="col-md-6"> </div>
            </div>-->
        </div>
        <!----End-content----->
        <!---End-wrap---->
        <!---start-footer---->
        <?php $this->load->view('_footer'); ?>
        <!---End-footer---->
    </body>
</html>

