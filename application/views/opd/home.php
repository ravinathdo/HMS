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
                <div class="col-md-7">
                    <h3>OPD Home</h3>

                    <table border="0" style="width: 100%">
                        <tbody>
                            <tr style="text-align: center">
                                <td><a href="<?php echo base_url('OPD_Controller/loadListPatient'); ?>">
                                        <i class="fas fa-user-tag fa-5x  tile-icon"></i> 
                                    </a></td>
                                <td><a href="<?php echo base_url('OPD_Controller/loadPatientOpdHistory'); ?>">
                                        <i class="fas fa-calendar-plus fa-5x  tile-icon"></i>
                                    </a></td>
                                <td><a href="<?php echo base_url('OPD_Controller/loadAmbulanceRequest'); ?>">
                                        <i class="fas fa-ambulance fa-5x  tile-icon"></i> 
                                    </a></td>
                                <td><a href="<?php echo base_url('#'); ?>">
                                        <i class="fas fa-address-book   fa-5x"></i>
                                    </a></td>
                                <td><a href="<?php echo base_url('User_Controller/loadProfile'); ?>">
                                        <i class="fas fa-user-cog fa-5x"></i>
                                    </a></td>
                                <td></td>
                            </tr>
                            <tr style="text-align: center">
                                <td>Patient Details</td>
                                <td>OPD Appointment</td>
                                <td>Ambulance Request</td>
                                <td>Reports</td>
                                <td>Profile</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>








                </div>
                <div class="col-md-3">
                    <div class="panel panel-warning">
                        <div class="panel-heading ">Dash Board</div>
                        <div class="panel-body">
                            <!--<button type="button" class="btn btn-primary">12</button>-->   
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

