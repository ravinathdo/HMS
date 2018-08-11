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
                <div class="col-md-10">


                    <div class="row">
                        <div class="col-md-8">

                            <div class="panel panel-warning">
                                <div class="panel-heading ">

                                    <h3> <img src="<?= base_url('/images/icon-doctor.png') ?>" style="width: 30px" /> Doctor Registration</h3>

                                </div>
                                <div class="panel-body">

                                    <?php echo $msg; ?>
                                    <form class="form-horizontal"  action="<?php echo base_url('Admin_Controller/DoctorRegistration'); ?>" method="post" >
                                        <div class="form-group">
                                            <label for="first_name" class="control-label col-xs-4">First Name</label> 
                                            <div class="col-xs-8">
                                                <input id="first_name" name="first_name" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="last_name" class="control-label col-xs-4">Last Name</label> 
                                            <div class="col-xs-8">
                                                <input id="last_name" name="last_name" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nic" class="control-label col-xs-4">NIC</label> 
                                            <div class="col-xs-8">
                                                <input id="nic" name="nic" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nic" class="control-label col-xs-4"></label> 
                                            <div class="col-xs-4">
                                                <input id="email" name="email" type="text" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="col-xs-4">
                                                <input id="telephone" name="telephone" type="text" class="form-control" placeholder="Telephone">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="degree" class="control-label col-xs-4">Degree</label> 
                                            <div class="col-xs-8">
                                                <input id="degree" name="degree" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="specialist_id" class="control-label col-xs-4">Specialist</label> 
                                            <div class="col-xs-8">
                                                <select id="specialist_id" name="specialist_id" class="select form-control">
                                                    <option value="duck">--select--</option>
                                                    <?php foreach ($this->session->userdata('specialist_list') as $value) {
                                                        ?> 
                                                        <option value="<?php echo $value->id; ?>"><?php echo $value->specialist; ?></option>
                                                    <?php }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="slmc_no" class="control-label col-xs-4">SLMS No</label> 
                                            <div class="col-xs-8">
                                                <input id="slmc_no" name="slmc_no" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="doc_fee" class="control-label col-xs-4">Doctor Fee</label> 
                                            <div class="col-xs-8">
                                                <input id="doc_fee" name="doc_fee" type="text" class="form-control">
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
                        <div class="col-md-4"></div>
                    </div>





                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>first_name</th>
                                <th>last_name</th>
                                <th>nic</th>
                                <th>degree</th>
                                <th>doc_fee</th>
                                <th>slmc_no</th>
                                <th>created_date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($doctor_list as $value) {
                                ?> 
                                <tr>
                                    <td><?= $value->first_name ?></td>
                                    <td><?= $value->last_name ?></td>
                                    <td><?= $value->nic ?></td>
                                    <td><?= $value->degree ?></td>
                                    <td><?= $value->doc_fee ?></td>
                                    <td><?= $value->slmc_no ?></td>
                                    <td><?= $value->created_date ?></td>
                                </tr>
                                <?php
                            }
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

