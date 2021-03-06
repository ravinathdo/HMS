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
        <div class="content">
            <div class="row">
                <div class="col-md-2"> 
                                            <?php $this->load->view('patient/_tree_patient'); ?>

                </div>
                <div class="col-md-5">
                    <table>
                        <tr>
                            <td colspan="2"><b>Doctor Appointment Information</b></td>
                        </tr>
                        <tr>
                            <td>Doctor </td>
                            <td><?= $doctorPayment->first_name ?></td>
                        </tr>
                        <tr>
                            <td>Specialist</td>
                            <td><?= $doctorPayment->specialist ?></td>
                        </tr>
                        <tr>
                            <td>Appointment Date</td>
                            <td><?= $doctorPayment->appointment_date ?></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Patient Information</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><?= $this->session->userdata('userbean')->first_name ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><?= $this->session->userdata('userbean')->telephone ?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-5">
                    <form class="form-horizontal" action="<?php echo base_url('Patient_Controller/setAppointment'); ?>" method="post">
                        <table>
                        <tr>
                             <td>Doctor Fee</td>
                             <td><h3><?= $doctorPayment->doc_fee ?></h3></td>
                        </tr>
                        <tr>
                             <td>Hospital Fee</td>
                            <td><h3><?= $doctorPayment->hospital_fee ?></h3></td>
                        </tr>
                        <tr>
                             <td>Total Fee</td>
                            <td><h2><?= $doctorPayment->total_fee ?></h2></td>
                        </tr>
                        <tr>
                            <td colspan="2"><B>Payment</B></td>
                        </tr>
                        <tr>
                            <td>Card Number </td>
                            <td><input id="text" name="cardno" required="" type="number" class="form-control"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><br><button name="submit" type="submit" class="btn btn-primary">Submit</button></td>
                        </tr>
                    </table>
                        <br>
                    </form>
                    
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

