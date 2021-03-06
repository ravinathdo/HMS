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
                        
                        <?php 
                        if($this->session->userdata('userbean')->user_role == 'PHARMACIST'){
                             $this->load->view('pharmacist/_menu_pharmacist');
                        } else 
                        if($this->session->userdata('userbean')->user_role == 'TRANSPORT'){
                             $this->load->view('transport/_menu_transport');
                        } else 
                        if($this->session->userdata('userbean')->user_role == 'OPD'){
                             $this->load->view('opd/_menu_opd');
                        } else 
                        if($this->session->userdata('userbean')->user_role == 'ACCOUNTANT'){
                             $this->load->view('accountant/_menu_accountant');
                        }else 
                        if($this->session->userdata('userbean')->user_role == 'LAB'){
                             $this->load->view('lab/_menu_lab');
                        }else 
                        if($this->session->userdata('userbean')->user_role == 'WARD'){
                             $this->load->view('ward/_menu_ward');
                        }else 
                        if($this->session->userdata('userbean')->user_role == 'ADMIN'){
                             $this->load->view('admin/_menu_admin');
                        }
                        ?>
                        
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
                    
                     <?php 
                        if($this->session->userdata('userbean')->user_role == 'PHARMACIST'){
                             $this->load->view('pharmacist/_tree_pharmacist');
                        } else 
                        if($this->session->userdata('userbean')->user_role == 'TRANSPORT'){
                             $this->load->view('transport/_tree_transport');
                        } else 
                        if($this->session->userdata('userbean')->user_role == 'OPD'){
                             $this->load->view('opd/_tree_opd');
                        } else 
                        if($this->session->userdata('userbean')->user_role == 'ACCOUNTANT'){
                             $this->load->view('accountant/_tree_accountant');
                        }else 
                        if($this->session->userdata('userbean')->user_role == 'LAB'){
                             $this->load->view('lab/_tree_lab');
                        }else 
                        if($this->session->userdata('userbean')->user_role == 'WARD'){
                             $this->load->view('ward/_tree_ward');
                        }else 
                        if($this->session->userdata('userbean')->user_role == 'ADMIN'){
                             $this->load->view('admin/_tree_admin');
                        }
                        ?>
                    <?php // $this->load->view('admin/_tree_admin'); ?>
                </div>
                <div class="col-md-5">

                    
                    <div class="panel panel-warning">
                        <div class="panel-heading ">
                            <h4>Profile</h4>
                        </div>
                        
                        <?php
//                                                echo '<tt><pre>' . var_export($this->session->userdata('userbean'), TRUE) . '</pre></tt>';
                        ?>
                        <div class="panel-body">
                            <?= $msg ?>
                            <form class="form-horizontal" action="<?= base_url('User_Controller/updateProfileInfo') ?>" method="post">
                                <input type="hidden" name="id" value="<?php echo $this->session->userdata('userbean')->id ?>" />
                                <div class="form-group">
                                    <label for="text" class="control-label col-xs-4">First Name</label> 
                                    <div class="col-xs-8">
                                        <input id="text" name="first_name" type="text" class="form-control"  value="<?php echo $this->session->userdata('userbean')->first_name ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text1" class="control-label col-xs-4">Last Name</label> 
                                    <div class="col-xs-8">
                                        <input id="text1" name="last_name" type="text" class="form-control"  value="<?php echo $this->session->userdata('userbean')->last_name ?>">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="text2" class="control-label col-xs-4">NIC </label> 
                                    <div class="col-xs-8">
                                        <input id="text2" name="nic" type="text" class="form-control" readonly="" value="<?php echo $this->session->userdata('userbean')->nic ?>" >
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="" class="control-label col-xs-4">User Role</label> 
                                    <div class="col-xs-8">
                                        <input id="" name="" type="user_role" class="form-control" readonly="" value="<?php echo $this->session->userdata('userbean')->user_role ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text3" class="control-label col-xs-4">Telephone</label> 
                                    <div class="col-xs-8">
                                        <input id="text3" name="telephone" type="text" class="form-control" value="<?php echo $this->session->userdata('userbean')->telephone ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text3" class="control-label col-xs-4">Email</label> 
                                    <div class="col-xs-8">
                                        <input id="text3" name="email" type="text" class="form-control" value="<?php echo $this->session->userdata('userbean')->email ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text3" class="control-label col-xs-4">Employee Number</label> 
                                    <div class="col-xs-8">
                                        <input id="text4" name="empno" type="text" class="form-control"  value="<?php echo $this->session->userdata('userbean')->empno ?>"  readonly=""> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text5" class="control-label col-xs-4">Status</label> 
                                    <div class="col-xs-8">
                                        <input id="text4" name="status_code" type="text" class="form-control"  value="<?php echo $this->session->userdata('userbean')->status_code ?>" readonly="" > 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text6" class="control-label col-xs-4">Created Date</label> 
                                    <div class="col-xs-8">
                                        <input id="text6" name="text6" type="text" class="form-control" readonly="" value="<?php echo $this->session->userdata('userbean')->created_date ?>">
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
                <div class="col-md-4">

                    <h3>Change Password </h3>
                    <form class="form-horizontal" action="<?= base_url('User_Controller/changePassword') ?>"  method="post" >
                        <div class="form-group">
                            <label for="text" class="control-label col-xs-4">Old Password</label> 
                            <div class="col-xs-8">
                                <input id="text" name="old_password" type="password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="text1" class="control-label col-xs-4">New Password</label> 
                            <div class="col-xs-8">
                                <input id="text1" name="new_password" type="password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="text2" class="control-label col-xs-4">Retype Password</label> 
                            <div class="col-xs-8">
                                <input id="text2" name="retype_password" type="password" class="form-control">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <div class="col-xs-offset-4 col-xs-8">
                                <button name="submit" type="submit" class="btn btn-primary">Change Password</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <!----End-content----->
        <!---End-wrap---->
        <!---start-footer---->
        <?php $this->load->view('_footer'); ?>

        <!---End-footer---->
    </body>
</html>

