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
                <div class="col-md-8">
                    <h2>LAB</h2>
                    <table border="0" style="width: 100%">
                        <tbody>
                            <tr style="text-align: center">
                                <td><a href="<?php echo base_url('LAB_Controller/loadInventoryManage'); ?>">
                        <i class="fas fa-vials fa-5x"></i> 
                    </a></td>
                                <td><a href="<?php echo base_url('LAB_Controller/loadLabCenterManage'); ?>">
                        <i class="fas fa-hospital fa-5x"></i> 
                    </a></td>
                                <td><a href="<?php echo base_url('LAB_Controller/loadItemRequest'); ?>">
                       <i class="fas fa-tags fa-5x"></i> 
                    </a></td>
                                <td><a href="<?php echo base_url('LAB_Controller/loadCostManagement'); ?>">
                       <i class="fas fa-money-bill-alt fa-5x"></i> 
                    </a></td>
                                <td><a href="<?php echo base_url('LAB_Controller/loadPatientList'); ?>">
                      <i class="fas fa-user-tag fa-5x"></i> 
                    </a></td>
                                <td><a href="<?php echo base_url('#'); ?>">
                        <i class="fas fa-address-book fa-5x"></i> 
                    </a></td>
                            </tr>
                            <tr style="text-align: center">
                                <td>Inventory Items </td>
                                <td>Centers</td>
                                <td>Items Request</td>
                                <td>Cost Management</td>
                                <td>Patient List</td>
                                <td>Reports</td>
                            </tr>
                            <tr style="text-align: center">
                                <td><a href="<?php echo base_url('User_Controller/loadProfile'); ?>">
                        <i class="fas fa-user-cog fa-5x img-thumbnail tile-icon"></i> 
                    </a></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr style="text-align: center">
                                <td>Profile</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                    
                    
                    
                    
                    
                    
                    
                    
                    
                </div>
                <div class="col-md-4">
                    
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

