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
                    <?php $this->load->view('admin/_head_admin'); ?>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="clear"> </div>
            <div class="top-nav">
                <div class="wrap">
                    <ul>
                        <?php $this->load->view('admin/_menu_admin'); ?>
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
                    <?php $this->load->view('admin/_tree_admin'); ?>
                </div>
                <div class="col-md-8">

                    <div class="panel panel-warning">
                        <div class="panel-heading ">
                            <h4> Patient Registration </h4>
                        </div>
                        <div class="panel-body">
                            <?= $msg ?>
                            <span class="mando-msg">* fields are mandatory</span>
                            <form class="form-horizontal" action="<?php echo base_url('/Admin_Controller/patientRegistration') ?>" method="post">
                                <div class="form-group">
                                    <label class="control-label col-xs-4" for="first_name">First Name <span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input id="first_name" name="first_name" type="text" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="last_name" class="control-label col-xs-4">Last Name</label> 
                                    <div class="col-xs-8">
                                        <input id="last_name" name="last_name" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="telephone" class="control-label col-xs-4">Telephone Number</label> 
                                    <div class="col-xs-8">
                                        <input id="telephone" name="telephone" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="telephone" class="control-label col-xs-4">Date of Birth</label> 
                                    <div class="col-xs-8">
                                        <input id="dob" name="dob" type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label col-xs-4">Email <span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input id="email" name="email" type="text" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pword" class="control-label col-xs-4">Password </label> 
                                    <div class="col-xs-8">
                                        Email ID will be the default password
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
            </div>



            <div class="row">
                <div class="col-md-2"> 
                </div>
                <div class="col-md-10">


                    <div class="panel panel-success">
                        <div class="panel-heading ">Registered Patient</div>
                        <div class="panel-body">
                            <table id="example" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Patient No</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Telephone</th>
                                        <th>Date of Birth</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Role</th>
                                        <th>Created Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($patientList as $value) {
                                        ?>
                                        <tr>
                                            <td><?= $value->id ?></td>
                                            <td><?= $value->first_name ?></td>
                                            <td><?= $value->last_name ?></td>
                                            <td><?= $value->telephone ?></td>
                                            <td><?= $value->dob ?></td>
                                            <td><?= $value->email ?></td>
                                            <td><?= $value->status_code ?></td>
                                            <td><?= $value->user_role ?></td>
                                            <td><?= $value->created_date ?></td>
                                            <td><a href="<?= base_url('Admin_Controller/loadUpdatePatientProfile/'.$value->id)  ?>">Rest</a></td>
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

