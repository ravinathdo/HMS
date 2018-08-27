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
                <div class="col-md-8">

                    <div class="panel panel-warning">
                        <div class="panel-heading ">

                            <h3> <img src="<?= base_url('/images/icon-hms-users.png') ?>" style="width: 30px" /> User Registration</h3>

                        </div>
                        <div class="panel-body">
                            <?= $msg ?>
                            <form class="form-horizontal" action="<?= base_url('Admin_Controller/userRegistration') ?>" method="post">
                                <span class="mando-msg">* fields are mandatory</span>
                                <div class="form-group">
                                    <label for="text" class="control-label col-xs-4">First Name <span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input id="text" name="first_name" type="text"  required="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text1" class="control-label col-xs-4">Last Name <span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input id="text1" name="last_name" type="text" required="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text2" class="control-label col-xs-4">NIC <span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input id="text2" name="nic" type="text" required="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="select" class="control-label col-xs-4">User Role x</label> 
                                    <div class="col-xs-8">
                                        <select id="select" name="user_role" required="" class="select form-control">
                                            <option value="">--select--</option>
                                            <option value="ADMIN">ADMIN</option>
                                            <option value="ACCOUNTANT">Accountant</option>
                                            <option value="LAB">LAB incharge</option>
                                            <option value="OPD">OPD</option>
                                            <option value="PHARMACIST">Pharmacist</option>
                                            <option value="TRANSPORT">Transport Manager</option>
                                            <option value="WARD">Ward Management</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text3" class="control-label col-xs-4">Telephone</label> 
                                    <div class="col-xs-8">
                                        <input id="text3" name="telephone" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text4" class="control-label col-xs-4">Email</label> 
                                    <div class="col-xs-8">
                                        <input id="text4" name="email" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text5" class="control-label col-xs-4">Employee No <span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input id="text5" name="empno" type="text" required="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="select1" class="control-label col-xs-4">Status</label> 
                                    <div class="col-xs-8">
                                        <select id="select1" name="status_code" class="select form-control">
                                            <option value="ACTIVE">ACTIVE</option>
                                            <option value="DEACTIVE">DEACTIVE</option>
                                        </select>
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
                <div class="col-md-4"> </div>
            </div>



            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <?php // echo '<tt><pre>' . var_export($userList, TRUE) . '</pre></tt>'; ?>
                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>NIC</th>
                                <th>User Role</th>
                                <th>Telephone</th>
                                <th>Employee No</th>
                                <th>Status</th>
                                <th>Created Date</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($userList as $value) {
                                ?>
                                <tr>
                                    <td><?= $value->first_name ?></td>
                                    <td><?= $value->last_name ?></td>
                                    <td><?= $value->nic ?></td>
                                    <td><?= $value->user_role?></td>
                                    <td><?= $value->telephone?></td>
                                    <td><?= $value->email?></td>
                                    <td><?= $value->empno ?></td>
                                    <td><?= $value->status_code ?></td>
                                    <td><?= $value->created_date ?></td>
                                    <td>
                                        <a href="<?= base_url('Admin_Controller/loadUpdateUserProfile/'.$value->id)   ?>" class="btn btn-default btn-xs" >Rest</a>
                                    </td>
                                    <?php
                                }
                                ?>
                            </tr>
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

