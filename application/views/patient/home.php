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
                    <?php $this->load->view('patient/_head_patient'); ?>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="clear"> </div>
            <div class="top-nav">
                <div class="wrap">
                    <ul>
                        <?php $this->load->view('patient/_menu_patient'); ?>
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
                    <?php $this->load->view('patient/_tree_patient'); ?>

                </div>
                <div class="col-md-7"> 
                    <h2>Patient</h2>




                    <table border="0" style="padding: 13px">
                        <tr style="text-align: center">
                            <td> 
                                <a href="<?php echo base_url('Patient_Controller/loadSearchDoctors'); ?>">
                                    <i class="fas fa-user-md fa-5x  tile-icon"></i>
                                </a>
                            </td>
                            <td> 
                                <a href="<?php echo base_url('Patient_Controller/loadOPDAppointment'); ?>">
                                    <i class="fas fa-user-tie fa-5x  tile-icon"></i>
                                </a>
                            </td>
                            <td><a href="<?php echo base_url('Patient_Controller/loadAppointment'); ?>">
                                    <i class="far fa-calendar-alt fa-5x  tile-icon"></i>
                                </a></td>
                            <td>
                                <a href="<?php echo base_url('Patient_Controller/loadMyAppointment'); ?>">
                                    <i class="fas fa-calendar-check  fa-5x  tile-icon"></i>
                                </a></td>
                            <td><a href="<?php echo base_url('Patient_Controller/loadViewLabTestCenters'); ?>">
                                    <i class="fas fa-vials  fa-5x  tile-icon"></i>
                    </a></td>
                            <td> <a href="<?php echo base_url('Patient_Controller/loadFeedback'); ?>">
                                    <i class="fas fa-comments  fa-5x  tile-icon"></i>
                    </a></td>
                        </tr>

                        <tr  style="text-align: center">
                            <td>View Specialist Doctors</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;OPD Appointment</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;Doctor Clinic Appointment</td>
                            <td>&nbsp;&nbsp;My Appointment</td>
                            <td>&nbsp;&nbsp;Lab Tests</td>
                            <td>Feedback</td>
                        </tr>
                        
                        
                        <tr  style="text-align: center">
                            <td> 
                                <a href="<?php echo base_url('Patient_Controller/loadReports'); ?>">
                                    <i class="fas fa-file-word fa-5x  tile-icon"></i>
                                </a>
                            </td>
                            <td> 
                                <a href="<?php echo base_url('Patient_Controller/loadProfile'); ?>">
                                    <i class="fas fa-users-cog fa-5x  tile-icon"></i>
                                </a>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
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
                    </table>














                    

                   
                    
                </div>
                <div class="col-md-3">
                    <div class="panel panel-success">
                        <div class="panel-heading ">Dash Board</div>
                        <div class="panel-body">
                            <button type="button" class="btn btn-primary">
                                <?php echo $this->session->userdata('appin_count') ?>
                            </button> New Appointment
                        </div>
                    </div>
                </div>
            </div>

<!--            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-5">
                    <img src="<?= base_url('images/_chart_1.jpg'); ?>"/>
                </div>
                <div class="col-md-5">
                    <img src="<?= base_url('images/_chart_2.png'); ?>"/>
                </div>
            </div>-->
        </div>
        <!----End-content----->
        <!---End-wrap---->
        <!---start-footer---->
        <?php $this->load->view('_footer'); ?>
        <!---End-footer---->
    </body>
</html>

