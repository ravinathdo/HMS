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
                <div class="col-md-10">
                      <div class="panel panel-warning">
                        <div class="panel-heading ">
                            <h3> <img src="<?= base_url('/images/icon-patient.png') ?>" style="width: 30px" />  Patient List </h3>
                        </div>
                        <div class="panel-body">
                            <?php // echo '<tt><pre>' . var_export($patientList, TRUE) . '</pre></tt>'; ?>
                            <table id="example" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Patient No</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Telephone</th>
                                        <th>Date of Birth</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($patientList as $value) {
                                        ?>
                                        <tr>
                                            <td><?= $value->id ?></td>
                                            <td><?=  $value->first_name ?></td>
                                            <td><?= $value->last_name ?></td>
                                            <td><?= $value->telephone ?></td>
                                            <td><?= $value->dob ?></td>
                                        </tr>
                                    <?php }
                                    ?>

                                </tbody>
                            </table>
                            <link href="<?php echo base_url('css/jquery.dataTables.min.css'); ?>" rel="stylesheet" type="text/css"/>
                            <script src="<?php echo base_url('js/jquery.dataTables.min.js'); ?>" type="text/javascript"></script>
                            <script type="text/javascript">
            $(document).ready(function () {
                $('#example').DataTable();
            });
                            </script>
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

