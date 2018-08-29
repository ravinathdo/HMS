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
        <div class="content">
            <div class="row">
                <div class="col-md-2"> 
                    <?php $this->load->view('doctor/_tree_doctor'); ?>
                </div>
                <div class="col-md-10">

                    <div class="row">
                        <div class="col-md-6">

                            <div class="panel panel-success">
                                <div class="panel-heading "><h3>Appointment Detail</h3></div>
                                <div class="panel-body">

                                    <table border="1" style="width: 100%" class="table-bordered">

                                        <tbody>
                                            <tr>
                                                <td>Appointment Number</td>
                                                <td>  <?= $appointmentDetail->id ?></td>
                                            </tr>
                                            <tr>
                                                <td>Appointment Date</td>
                                                <td><?= $appointmentDetail->appointment_date ?></td>
                                            </tr>
                                            <tr>
                                                <td>Patient Name</td>
                                                <td><?= $appointmentDetail->first_name ?></td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td><?= $appointmentDetail->status_code ?></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <br>
                                    <?php if ($appointmentDetail->status_code == 'OPEN') { ?> 
                                        <form class="form-horizontal" action="<?= base_url('/Doctor_Controller/completeAppointment'); ?>" method="post">
                                            <input type="hidden" name="patient_id" value="<?= $appointmentDetail->created_user ?>" />

                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-4 control-label">Doctor Comment</label>
                                                <div class="col-sm-8">
                                                    <textarea class="form-control" name="comment"> </textarea>
                                                </div>
                                            </div>
                                            <input type="hidden" name="appo_id" value="<?= $appointmentDetail->id ?>" />
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-success">Complete</button>
                                                </div>
                                            </div>
                                        </form>
                                        <h3>or</h3>
                                        <form class="form-horizontal" action="<?= base_url('/Doctor_Controller/rejectAppointment'); ?>" method="post">
                                            <input type="hidden" name="appo_id" value="<?= $appointmentDetail->id ?>" />
                                            <input type="hidden" name="patient_id" value="<?= $appointmentDetail->created_user ?>" />

                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">Reject</button>
                                                </div>
                                            </div>
                                        </form>
                                    <?php } ?>

                                </div>
                            </div>


                        </div>
                        <div class="col-md-6">


                            <div class="panel panel-primary">
                                <div class="panel-heading ">Patient Medical History</div>
                                <div class="panel-body">

                                    <?php
                                    if ($patientMedicalHistory)
                                        foreach ($patientMedicalHistory as $value) {
                                            ?>
                                            <span class="btn-sm btn-success"><?= $value->appointment_date ?></span> <span class="btn-sm btn-success">Dr <?= $value->first_name ?></span> 
                                            <?= $value->doctor_comment ?>
                                            <hr>
                                            <?php
                                        }
                                    ?>


                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----End-content----->
        <!---End-wrap---->
        <!---start-footer---->
        <div class="footer">
            <div class="wrap">
                <div class="footer-grids">
                    <div class="footer-grid">
                        <h3>OUR Profile</h3>
                        <ul>
                            <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                            <li><a href="#">Conse ctetur adipisicing</a></li>
                            <li><a href="#">Elit sed do eiusmod tempor</a></li>
                            <li><a href="#">Incididunt ut labore</a></li>
                            <li><a href="#">Et dolore magna aliqua</a></li>
                            <li><a href="#">Ut enim ad minim veniam</a></li>
                        </ul>
                    </div>
                    <div class="footer-grid">
                        <h3>Our Services</h3>
                        <ul>
                            <li><a href="#">Et dolore magna aliqua</a></li>
                            <li><a href="#">Ut enim ad minim veniam</a></li>
                            <li><a href="#">Quis nostrud exercitation</a></li>
                            <li><a href="#">Ullamco laboris nisi</a></li>
                            <li><a href="#">Ut aliquip ex ea commodo</a></li>
                        </ul>
                    </div>
                    <div class="footer-grid">
                        <h3>OUR FLEET</h3>
                        <ul>
                            <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                            <li><a href="#">Conse ctetur adipisicing</a></li>
                            <li><a href="#">Elit sed do eiusmod tempor</a></li>
                            <li><a href="#">Incididunt ut labore</a></li>
                            <li><a href="#">Et dolore magna aliqua</a></li>
                            <li><a href="#">Ut enim ad minim veniam</a></li>
                        </ul>
                    </div>
                    <div class="footer-grid">
                        <h3>CONTACTS</h3>
                        <p>Lorem ipsum dolor sit amet ,</p>
                        <p>Conse ctetur adip .</p>
                        <p>ut labore Usa.</p>
                        <span>(202)1234-56789</span>
                    </div>
                    <div class="clear"> </div>
                </div>
                <div class="clear"> </div>
                <!---start-copy-right----->
                <div class="copy-tight">
                    <p>Copyright &copy; Medica. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
                </div>
                <!---End-copy-right----->
            </div>
        </div>
        <!---End-footer---->
    </body>
</html>

