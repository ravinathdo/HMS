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
                    <?php $this->load->view('accountant/_head_accountant'); ?>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="clear"> </div>
            <div class="top-nav">
                <div class="wrap">
                    <ul>
                        <?php $this->load->view('accountant/_menu_accountant'); ?>
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
                    <?php $this->load->view('accountant/_tree_accountant'); ?>
                </div>
                <div class="col-md-5">

                    <div class="panel panel-warning">
                        <div class="panel-heading ">
                            <h3> <img src="<?= base_url('/images/icon-employee.png') ?>" style="width: 30px" />  Doctor Salary </h3>
                        </div>
                        <div class="panel-body">

                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="select" class="control-label col-xs-4">Doctor</label> 
                                    <div class="col-xs-8">
                                        <select id="select" name="select" class="select form-control">
                                            <option value="rabbit">Rabbit</option>
                                            <option value="duck">Duck</option>
                                            <option value="fish">Fish</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Amount" class="control-label col-xs-4">Month</label> 
                                    <div class="col-xs-8">
                                        <input id="Amount" name="Amount" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text2" class="control-label col-xs-4">Salary Amount</label> 
                                    <div class="col-xs-8">
                                        <input id="text2" name="text2" type="text" class="form-control">
                                    </div>
                                </div> 

                                <div class="form-group row">
                                    <div class="col-xs-offset-4 col-xs-8">
                                        <button name="submit" type="submit" class="btn btn-primary">View</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-md-5">


                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="select" class="control-label col-xs-4">Doctor</label> 
                            <div class="col-xs-8">
                                Dr Kumara
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="text2" class="control-label col-xs-4">Basic Salary</label> 
                            <div class="col-xs-8">1500
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="text2" class="control-label col-xs-4">Appointment Collection</label> 
                            <div class="col-xs-8">2500
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="text2" class="control-label col-xs-4">Total Salary</label> 
                            <div class="col-xs-8">
                                15225.55
                            </div>
                        </div> 
                        <div class="form-group row">
                            <div class="col-xs-offset-4 col-xs-8">
                                <button name="submit" type="submit" class="btn btn-primary">Pay</button>
                            </div>
                        </div>
                    </form>


                    <table class="table-bordered" style="width: 100%">
                        <tr>
                            <td>Month-Year</td>
                            <td>Amount</td>
                        </tr>
                    </table>
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
