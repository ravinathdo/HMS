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
                <div class="col-md-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading ">
                            <h3> <img src="<?= base_url('/images/icon-ward.png') ?>" style="width: 30px" /> Admit Patient</h3>
                        </div>
                        <div class="panel-body">

                            <form class="form-horizontal" action="<?= base_url('Doctor_Controller/admitPatient') ?>" method="post">
                                <div class="form-group">
                                    <label for="text" class="control-label col-xs-4">Ward Number</label> 
                                    <div class="col-xs-8">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-address-card"></i>
                                            </div> 
                                            <input id="text" readonly="" name="ward_id" type="text" class="form-control" value="<?= $ward_id ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="select" class="control-label col-xs-4">Patient</label> 
                                    <div class="col-xs-8">
                                        <select id="select" name="patient_id" required="" class="select form-control">
                                            <option value="rabbit">--select patient--</option>
                                            <?php
                                            foreach ($PatientList as $value) {
                                                ?>
                                                <option value="<?= $value->id ?>">[<?= $value->id ?>] <?= $value->first_name ?> <?= $value->last_name ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textarea" class="control-label col-xs-4">Remark</label> 
                                    <div class="col-xs-8">
                                        <textarea id="textarea" name="comment" cols="40" rows="5" class="form-control"></textarea>
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
                <div class="col-md-6">
                    <table border="1" class="table-bordered table-condensed table-hover">
                        <thead>
                            <tr>
                                <th>Ward No</th>
                                <th>Patient</th>
                                <th>Admit Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
//                            echo '<tt><pre>' . var_export($doctorWardPatient, TRUE) . '</pre></tt>';
                            if ($doctorWardPatient)
                                foreach ($doctorWardPatient as $value) {
                                    ?>
                                    <tr>
                                        <td><?= $value->ward_id ?></td>
                                        <td><?= $value->first_name ?> <?= $value->last_name ?></td>
                                        <td><?= $value->created_date ?></td>
                                        <td><?= $value->status_code ?></td>
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

