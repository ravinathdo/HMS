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
                    <?php $this->load->view('pharmacist/_head_pharmacist'); ?>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="clear"> </div>
            <div class="top-nav">
                <div class="wrap">
                    <ul>
                        <?php $this->load->view('pharmacist/_menu_pharmacist'); ?>
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
                    <?php $this->load->view('pharmacist/_tree_pharmacist'); ?>
                </div>
                <div class="col-md-5">
                    <div class="panel panel-warning">
                        <div class="panel-heading ">
                            <h3> <img src="<?= base_url('/images/icon-drug.png') ?>" style="width: 30px" />  Manage Drug </h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="text" class="control-label col-xs-4">Drug Name</label> 
                                    <div class="col-xs-8">
                                        <input id="text" name="text" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text1" class="control-label col-xs-4">Qty</label> 
                                    <div class="col-xs-8">
                                        <input id="text1" name="text1" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text2" class="control-label col-xs-4">Price</label> 
                                    <div class="col-xs-8">
                                        <input id="text2" name="text2" type="text" class="form-control">
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
                <div class="col-md-5">
                    
                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Drug</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Panadol</td>
                                <td></td>
                                <td></td>
                                <td>
                                    <button type="button" class="btn btn-default btn-xs">Update</button>
                                </td>
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

