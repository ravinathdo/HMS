<!DOCTYPE HTML>
<html>
    <head>
        <title>AROGYA HOSPITAL x</title>
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
            <div class="top-header">
                <div class="wrap">
                    <div class="top-header-left">
                        <p>+800-020-12345</p>
                    </div>
                    <div class="right-left">
                        <ul>
                            <li class="login"><a href="<?php echo base_url('Patient_Controller/loadPatientLogin');?>">Patient Login</a></li>
                            <li class="login"><a href="<?php echo base_url('Doctor_Controller/loadDoctorLogin');?>">Doctor Login</a></li>
                            <li class="login"><a href="<?php echo base_url('Patient_Controller/loadPatientRegister');?>">Register Now</a></li>
                        </ul>
                    </div>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="main-header">
                <div class="wrap">
                    <div class="logo">
                        <a href="index.html"><img src="<?php echo base_url('images/logo.png');?>" title="logo" /></a>
                    </div>
                    <div class="social-links">
                        <ul>
                            <li><a href="#"><img src="<?php echo base_url('images/facebook.png'); ?>" title="facebook" /></a></li>
                            <li><a href="#"><img src="<?php echo base_url('images/twitter.png'); ?>" title="twitter" /></a></li>
                            <li><a href="#"><img src="<?php echo base_url('images/feed.png'); ?>" title="Rss" /></a></li>
                            <div class="clear"> </div>
                        </ul>
                    </div>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="clear"> </div>
            <div class="top-nav">
                <div class="wrap">
                    <ul>
                        <?php $this->load->view('_menu_pre'); ?>
                        <div class="clear"> </div>
                    </ul>
                </div>
            </div>
        </div>
        <!---End-header---->
        <!---start-images-slider---->
        <div class="image-slider">
            <!-- Slideshow 1 -->
            <ul class="rslides rslides1" id="slider1" style="max-width: 2500px;">
                <li id="rslides1_s0" class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; -webkit-transition: opacity 600ms ease-in-out; transition: opacity 600ms ease-in-out;">
                    <img src="<?php echo base_url('images/slider3.png');?>" alt="">
                    <div class="slider-info">
                        <p>Medica the best Hospital website</p>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                        <a href="#">ReadMore</a>
                    </div>
                </li>
                <li id="rslides1_s1" class="" style="float: none; position: absolute; opacity: 0; z-index: 1; display: list-item; -webkit-transition: opacity 600ms ease-in-out; transition: opacity 600ms ease-in-out;">
                    <img src="<?php echo base_url('images/slider2.png');?>" alt="">
                    <div class="slider-info">
                        <p>Medica the best Hospital website</p>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                        <a href="#">ReadMore</a>
                    </div>
                </li>
                <li id="rslides1_s2" class="rslides1_on" style="float: left; position: relative; opacity: 1; z-index: 2; display: list-item; -webkit-transition: opacity 600ms ease-in-out; transition: opacity 600ms ease-in-out;"><img src="images/slider2.png" alt="">
                    <div class="slider-info">
                        <p>Medica the best Hospital website</p>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                        <a href="#">ReadMore</a>
                    </div>
                </li>
            </ul>
            <!-- Slideshow 2 -->
        </div>
        <!---End-images-slider---->
        <!----start-content----->
        <div class="content">
            <div class="content-top-grids">
                <div class="wrap">
                    <div class="content-top-grid">
                        <div class="content-top-grid-header">
                            <div class="content-top-grid-pic">
                                <a href="#"><img src="<?php echo base_url('images/timer.png');?>" title="image-name" /></a>
                            </div>
                            <div class="content-top-grid-title">
                                <h3>24x7  services</h3>
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                        <a class="grid-button" href="#">Read More</a>
                        <div class="clear"> </div>
                    </div>
                    <div class="content-top-grid">
                        <div class="content-top-grid-header">
                            <div class="content-top-grid-pic">
                                <a href="#"><img src="<?php echo base_url('images/tool.png');?>" title="image-name" /></a>
                            </div>
                            <div class="content-top-grid-title">
                                <h3>CARE ADVICES</h3>
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                        <a class="grid-button" href="#">Read More</a>
                        <div class="clear"> </div>
                    </div>
                    <div class="content-top-grid">
                        <div class="content-top-grid-header">
                            <div class="content-top-grid-pic">
                                <a href="#"><img src="<?php echo base_url('images/inject.png');?>" title="image-name" /></a>
                            </div>
                            <div class="content-top-grid-title">
                                <h3>EMERGENCY</h3>
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                        <a class="grid-button" href="#">Read More</a>
                        <div class="clear"> </div>
                    </div>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="clear"> </div>
            <div class="boxs">
                <div class="wrap">
                    <div class="section group">
                        <div class="grid_1_of_3 images_1_of_3">
                            <h3>WELCOME!</h3>
                            <span>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod.</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed in reprehenderit adipisicing elit, sed in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Sed ut nim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,  pariatur?</p>
                            <p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo e</p>
                            <p>dolor sit amet, consectetur adipisicing elit, sed in reprehenderit adipisicing elit, sed in reprehenderit in voluptate velit esse cillum </p>
                            <div class="button"><span><a href="#">Read More</a></span></div>
                        </div>
                        <div class="grid_1_of_3 images_1_of_3">
                            <h3>ABOUT US</h3>
                            <span>Lorem ipsum dolor sit amet conse ctetur adipisicing elit,</span>
                            <p>in voluptate Lorem ipsum, in voluptate velit esse cillum dolore eu fugiat amet conse ctetur adipisicing elit nulla pariatur.</p>
                            <span>Lorem ipsum dolor sit, fugiat nulla pariatur</span>
                            <p>fugiat nulla Lorem ipsum dolor sit amet, consectetur adipisicing elitamet conse ctetur adipisicing elit, fugiat nulla pariatur.</p>
                            <span>Lorem ipsum dolor sit amet cons,</span>
                            <p>consectetur Lorem ipsum dolor sit amet, consectetur adipisicing elit, in voluptate velit esse cillu.</p>
                            <span>Lorem ipsum dolor sit amet conse ctetur adipisicing elit,</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisorem ipsum dolor sit amet, consectetur adipiicing elit, in voluptate.</p>

                            <div class="button"><span><a href="#">Read More</a></span></div>
                        </div>
                        <div class="grid_1_of_3 images_1_of_3">
                            <h3>OUR SERVICES</h3>
                            <ul>
                                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                                <li><a href="#">Conse ctetur adipisicing</a></li>
                                <li><a href="#">Elit sed do eiusmod tempor</a></li>
                                <li><a href="#">Incididunt ut labore</a></li>
                                <li><a href="#">Et dolore magna aliqua</a></li>
                                <li><a href="#">Ut enim ad minim veniam</a></li>
                                <li><a href="#">Quis nostrud exercitation</a></li>
                                <li><a href="#">Ullamco laboris nisi</a></li>
                                <li><a href="#">Ut aliquip ex ea commodo</a></li>
                            </ul>
                            <div class="button"><span><a href="#">Read More</a></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!----End-content----->
        </div>
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

