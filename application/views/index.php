<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Arogya</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Surgeon Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Custom Theme files -->
        <link href="<?php echo base_url('css/bootstrap.css'); ?>" type="text/css" rel="stylesheet" media="all">
        <link href="<?php echo base_url('css/style_front.css'); ?>" type="text/css" rel="stylesheet" media="all"> 
        <link rel="stylesheet" href="<?php echo base_url('css/swipebox.css'); ?>">     
        <link href="<?php echo base_url('css/animate.css'); ?>" rel="stylesheet" type="text/css" media="all"> <!-- animation -->
        <link href="<?php echo base_url('css/font-awesome.css'); ?>" rel="stylesheet"> <!-- font-awesome icons -->
        <!-- //Custom Theme files --> 
        <!-- js -->
        <script src="<?php echo base_url('js/jquery-2.2.3.min.js'); ?>"></script> 
        <!-- //js -->
        <!-- web-fonts -->
        <link href="//fonts.googleapis.com/css?family=Enriqueta:400,700" rel="stylesheet">
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <!-- //web-fonts --> 
    </head>
    <body>
        <!-- banner -->
        <div  id="home" class="banner">
            <div class="container">
                <div class="wthree-header">
                    <div class="agileits-logo navbar-left">
                        <h1 class="wow swing animated" data-wow-delay=".5s"><a href="index.html">AROGYA HOSPITAL</a></h1>
                    </div>
                    <div class="navbar-right social-icons wow fadeInRight animated" data-wow-delay=".5s"> 
                        <ul>
                            <li ><a style="color:white" href="<?php echo base_url('Patient_Controller/loadPatientLogin'); ?>">Patient Login  | </a></li> 
                            <li ><a style="color:white" href="<?php echo base_url('Doctor_Controller/loadDoctorLogin'); ?>">Doctor Login  | </a></li>
                            <li ><a style="color:white" href="<?php echo base_url('Patient_Controller/loadPatientRegister'); ?>">Register Now</a> </li>
                            <li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
                            <li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
                            <li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
                            <li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
                        </ul>  
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!-- navigation -->
                <div class="top-w3lnav">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header w3l-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                Menu 
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-center w3l-effect">
                                <li><a href="#">Home</a></li>
                                <li><a href="#about" class="scroll">About</a></li> 
                                <li><a href="#services" class="scroll">Services</a></li> 
                                <li><a href="#team" class="scroll">Team</a></li>
                                <li><a href="#portfolio" class="scroll">Portfolio</a></li>
                                <li><a href="#contact" class="scroll">Contact</a></li>
                            </ul>	
                            <div class="clearfix"> </div>
                        </div>	
                    </nav>		
                </div>	
                <!-- navigation --> 
                <!-- arrow bounce --> 
                <div class="agileits-arrow bounce animated"><a href="#welcome" class="scroll"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a></div>
                <!-- //arrow bounce -->
            </div> 
        </div>
        <!-- //banner -->
        <!-- welcome -->
        <div class="welcome" id="welcome">
            <div class="container">
                <h3 class="w3layouts-title wow fadeInDown animated" data-wow-delay=".5s">Welcome to Our Arogya Hospital</h3>			
                <div class="welcome-info">
                    <h2 class="wow fadeInLeft animated" data-wow-delay=".5s">Our Hospitality Specializations </h2>			
                    <p class="wel-text wow fadeInRight animated" data-wow-delay=".5s">We are for you, for future generation, for a healthy generation.</p>			
                    <div class="welcome-row">
                        <div class="col-md-3 welcome-grids wow zoomIn animated" data-wow-delay=".5s">
                            <h5>OUR VISION</h5>
                            <p class="text">Improving health through trusted information</p>
                            <div class="welcome-w3lsicon">
                                <span><i class="glyphicon glyphicon-briefcase"></i> </span>
                            </div>
                        </div>
                        <div class="col-md-3 welcome-grids welcome-mdl wow zoomIn animated" data-wow-delay=".5s">
                            <h5>OUR MISSION</h5>
                            <p class="text">Transforming healthcare by leading Arogya, informatics, and information governance.</p>
                            <div class="welcome-w3lsicon">
                                <span><i class="glyphicon glyphicon-check"></i></span>
                            </div>
                        </div>
                        <div class="col-md-3 welcome-grids  welcome-mdl1 wow zoomIn animated" data-wow-delay=".5s">
                            <h5>TECHNOLOGY</h5>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipi est eligendi scing elit</p>
                            <div class="welcome-w3lsicon">
                                <span><i class="glyphicon glyphicon-education"></i></span>
                            </div>
                        </div>
                        <div class="col-md-3 welcome-grids wow zoomIn animated" data-wow-delay=".5s">
                            <h5>OUR OBJECTIVE</h5>
                            <p class="text">Generating a healthy generation</p>
                            <div class="welcome-w3lsicon">
                                <span><i class="glyphicon glyphicon-thumbs-up"></i></span>
                            </div>
                        </div> 
<!--                        <div class="col-md-3 welcome-grids wow zoomIn animated" data-wow-delay=".5s">
                            <h5>OUR VALUES</h5>
                            <p class="text">Respect Excellence Leadership Integrity</p>
                            <div class="welcome-w3lsicon">
                                <span><i class="glyphicon glyphicon-thumbs-up"></i></span>
                            </div>
                        </div> -->
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //welcome -->
        <!-- about -->
        <div id="about" class="about">
            <!-- container -->
            <div class="container">
                <h3 class="w3layouts-title wow fadeInDown animated" data-wow-delay=".5s">About Us</h3>	 
                <div class="about-agileitsrow">
                    <div class="col-md-8 about-left wow slideInLeft animated" data-wow-delay=".5s">
                        <div class="col-md-4 col-sm-4 col-xs-4 about-img wow zoomInLeft animated" data-wow-delay=".9s">
                            <img src="<?php echo base_url('images/img1.jpg'); ?>" alt="">
                        </div>
                        <div class="col-md-8 col-sm-8 about-w3ls-text wow zoomInRight animated" data-wow-delay=".9s">
                            <p>Arogya Hospitals is the most accredited hospital in the Sri Lankan healthcare sector. Since 2002, Arogya Hospitals has revolutionized the healthcare industry through infrastructure development and advancement of products and services, with a view to deliver healthcare that is on par with global medical standards.</p>
                            <p>Arogya Hospitals is committed to provide compassionate care and excellent service that transcends conventional healthcare.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-4 about-right w3-agileits wow slideInRight animated" data-wow-delay=".5s">
                        <h4>Our Advantages / Services</h4>
                        <ul>
                            <li><span class="glyphicon glyphicon-menu-right"></span>On call Facility</li>
                            <li><span class="glyphicon glyphicon-menu-right"></span>Lowest hospital rates</li>
                            <li><span class="glyphicon glyphicon-menu-right"></span>Skilled doctor service</li>
                            <li><span class="glyphicon glyphicon-menu-right"></span>Pharmacy</li>
                            <li><span class="glyphicon glyphicon-menu-right"></span>Lab facilities</li>
                            <li><span class="glyphicon glyphicon-menu-right"></span>Quick reports</li>
                            <li><span class="glyphicon glyphicon-menu-right"></span>24 x 7 service</li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!-- //container -->
        </div>
        <!-- //about -->
        <!-- services -->
        <div id="services" class="services">
            <!-- container -->
            <div class="container">
                <h3 class="w3layouts-title wow fadeInDown animated" data-wow-delay=".5s">Services</h3> 
                <div class="services-w3row">
                    <div class="col-md-3 col-sm-3 col-xs-6 services-agile-grid">
                        <span class="glyphicon glyphicon-check wthree-effect" aria-hidden="true"></span>
                        <div class="services-text w3-agileits">
                            <h5 class="w3-agile-counter">592</h5> 
                            <p>NON-CLINICAL STAFF</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 services-agile-grid">
                        <span class="glyphicon glyphicon-user wthree-effect" aria-hidden="true"></span>
                        <div class="services-text">
                            <h5 class="w3-agile-counter">524</h5>
                            <p>MEDICAL STAFF</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 services-agile-grid">
                        <span class="glyphicon glyphicon-heart-empty wthree-effect" aria-hidden="true"></span>
                        <div class="services-text w3-agileits">
                            <h5 class="w3-agile-counter">50</h5> 
                            <p>HEALTH CARE CENTER</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 services-agile-grid">
                        <span class="glyphicon glyphicon-bookmark wthree-effect" aria-hidden="true"></span>
                        <div class="services-text">
                            <h5 class="w3-agile-counter">790</h5> 
                            <p>SUPPORT STAFF</p>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!-- Stats-Number-Scroller-Animation-JavaScript -->
                <script src="<?php echo base_url('js/waypoints.min.js'); ?>"></script> 
                <script src="<?php echo base_url('js/counterup.min.js'); ?>"></script> 
                <script>
                    jQuery(document).ready(function ($) {
                        $('.w3-agile-counter').counterUp({
                            delay: 10,
                            time: 1000
                        });
                    });
                </script> 
                <!-- //Stats-Number-Scroller-Animation-JavaScript -->
            </div>
            <!-- //container -->
        </div>
        <!-- //services -->
        <!-- team -->
        <div id="team" class="team">
            <div class="container">
                <h3 class="w3layouts-title wow fadeInDown animated" data-wow-delay=".5s">Our Team</h3>  
                <div class="team-info">
                    <div class="col-md-3 team-grids wow zoomIn animated" data-wow-delay=".5s">
                        <img class="img-responsive" src="images/t1.jpg" alt="">
                        <div class="agileits-captn"> 
                            <div class="social-icons"> 
                                <ul>
                                    <li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
                                    <li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
                                    <li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
                                    <li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
                                </ul>  
                            </div>
                        </div>
                        <h4>Dr. R.M.L.C. Ratnayake</h4>
                        <p>MBBS(Sri Lanka) SLMC Reg.No.25555 </p>
                    </div>					
                    <div class="col-md-3 team-grids wow zoomIn animated" data-wow-delay=".5s">
                        <img class="img-responsive" src="<?php echo base_url('images/img1_1.jpg'); ?>" alt="">
                        <div class="agileits-captn"> 
                            <div class="social-icons"> 
                                <ul>
                                    <li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
                                    <li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
                                    <li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
                                    <li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
                                </ul>  
                            </div>
                        </div>
                        <h4>Dr. W.C.N. Wimalasooriya</h4>
                        <p>MBBS(Sri Lanka) SLMC Reg.No.25658</p>
                    </div>	
                    <div class="col-md-3 team-grids wow zoomIn animated" data-wow-delay=".5s">
                        <img class="img-responsive" src="<?php echo base_url('images/t2.jpg'); ?>" alt="">
                        <div class="agileits-captn"> 
                            <div class="social-icons"> 
                                <ul>
                                    <li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
                                    <li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
                                    <li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
                                    <li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
                                </ul>  
                            </div>
                        </div>
                        <h4>Dr. P.D.T. Padeniya</h4>
                        <p>MBBS(Sri Lanka), MD (Dermatology) SLMC Reg.No.23695</p>
                    </div>	
                    <div class="col-md-3 team-grids wow zoomIn animated" data-wow-delay=".5s">
                        <img class="img-responsive" src="<?php echo base_url('images/t3.jpg'); ?>" alt="">
                        <div class="agileits-captn"> 
                            <div class="social-icons"> 
                                <ul>
                                    <li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
                                    <li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
                                    <li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
                                    <li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
                                </ul>  
                            </div>
                        </div> 
                        <h4>Dr. A.G. Wanigaratne</h4>
                        <p>MBBS(Sri Lanka), VP, SLMC Reg.No.25178</p>
                    </div>	
                    <div class="clearfix"> </div>
                </div> 
            </div>
        </div>
        <!-- //team -->
        <!-- portfolio -->
        <div id="portfolio" class="portfolio">
            <div class="container">
                <h3 class="w3layouts-title wow fadeInDown animated" data-wow-delay=".5s">DISCOVER MEDICAL SPECIALTIES</h3>   
                <div class="sap_tabs">			
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list wow fadeInUp animated" data-wow-delay=".7s">
                            <li class="resp-tab-item"><span>All</span></li>
                            <li class="resp-tab-item"><span>Dental Care</span></li>
                            <li class="resp-tab-item"><span>General Medicine</span></li>
                            <li class="resp-tab-item"><span>Cardiac Care</span></li>
                            <li class="resp-tab-item"><span>Ophthalmology</span></li>					
                        </ul>	
                        <div class="clearfix"> </div>	
                        <div class="resp-tabs-container">
                            <div class="tab-1 resp-tab-content">
                                <div class="tab_img">
                                    <div class="col-md-4 col-sm-4 col-xs-6 portfolio-grids">
                                        <div class="agileinfo-effect wow fadeInUp animated" data-wow-delay=".5s">
                                            <a href="<?php echo base_url('images/g1.jpg'); ?>" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                                                <img src="<?php echo base_url('images/g1.jpg'); ?>" alt="" class="img-responsive" />
                                                <div class="figcaption">
                                                    <p>At veroeos accusamus </p>
                                                </div>
                                            </a>	
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6 portfolio-grids">
                                        <div class="agileinfo-effect  wow fadeInUp animated" data-wow-delay=".7s">
                                            <a href="<?php echo base_url('images/g2.jpg'); ?>" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                                                <img src="<?php echo base_url('images/g2.jpg'); ?>" alt="" class="img-responsive" />
                                                <div class="figcaption">
                                                    <p>Dignissimos ducimus vero</p>
                                                </div>
                                            </a>	
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6 portfolio-grids">
                                        <div class="agileinfo-effect  wow fadeInUp animated" data-wow-delay=".9s">
                                            <a href="<?php echo base_url('images/g3.jpg'); ?>" class="swipebox" title="Maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
                                                <img src="<?php echo base_url('images/g3.jpg'); ?>" alt="" class="img-responsive" />
                                                <div class="figcaption">
                                                    <p>Accusamus dignis ducimus</p>
                                                </div>
                                            </a>	
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6 portfolio-grids grid-mdl">
                                        <div class="agileinfo-effect  wow fadeInUp animated" data-wow-delay=".5s">
                                            <a href="<?php echo base_url('images/g4.jpg'); ?>" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                                                <img src="<?php echo base_url('images/g4.jpg'); ?>" alt="" class="img-responsive" />
                                                <div class="figcaption">
                                                    <p>Dignissimos ducimus vero</p>
                                                </div>
                                            </a>	
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6 portfolio-grids grid-mdl">
                                        <div class="agileinfo-effect  wow fadeInUp animated" data-wow-delay=".7s">
                                            <a href="<?php echo base_url('images/g5.jpg'); ?>" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                                                <img src="<?php echo base_url('images/g5.jpg'); ?>" alt="" class="img-responsive" />
                                                <div class="figcaption">
                                                    <p>Ccusaamus dignis ducimus</p>
                                                </div>
                                            </a>	
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6 portfolio-grids grid-mdl">
                                        <div class="agileinfo-effect  wow fadeInUp animated" data-wow-delay=".9s">
                                            <a href="<?php echo base_url('images/g6.jpg'); ?>" class="swipebox" title="Consectetur adipiscing elit. Lorem ipsum dolor sit amet, duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                                                <img src="<?php echo base_url('images/g6.jpg'); ?>" alt="" class="img-responsive" />
                                                <div class="figcaption">
                                                    <p>Musaccusa dignis ducimus</p>
                                                </div>
                                            </a>	
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6 portfolio-grids">
                                        <div class="agileinfo-effect  wow fadeInUp animated" data-wow-delay=".5s">
                                            <a href="<?php echo base_url('images/g7.jpg'); ?>" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                                                <img src="<?php echo base_url('images/g7.jpg'); ?>" alt="" class="img-responsive" />
                                                <div class="figcaption">
                                                    <p>Qignissimos ducimus vero</p>
                                                </div>
                                            </a>	
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6 portfolio-grids">
                                        <div class="agileinfo-effect  wow fadeInUp animated" data-wow-delay=".7s">
                                            <a href="<?php echo base_url('images/g8.jpg'); ?>" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
                                                <img src="<?php echo base_url('images/g8.jpg'); ?>" alt="" class="img-responsive" />
                                                <div class="figcaption">
                                                    <p>Dignissimos ducimus vero</p>
                                                </div>
                                            </a>	
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6 portfolio-grids">
                                        <div class="agileinfo-effect  wow fadeInUp animated" data-wow-delay=".9s">
                                            <a href="<?php echo base_url('images/g9.jpg'); ?>" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                                                <img src="<?php echo base_url('images/g9.jpg'); ?>" alt="" class="img-responsive" />
                                                <div class="figcaption">
                                                    <p>Accusamus digni ducimus</p>
                                                </div>
                                            </a>	
                                        </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="tab-1 resp-tab-content">
                                <div class="tab_img">
                                    <div class="col-md-4 col-sm-4 col-xs-6 portfolio-grids">
                                        <div class="agileinfo-effect fadeInUp animated" data-wow-delay=".5s">
                                            <a href="<?php echo base_url('images/g3.jpg'); ?>" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
                                                <img src="<?php echo base_url('images/g3.jpg'); ?>" alt="" class="img-responsive" />
                                                <div class="figcaption">
                                                    <p>Qignissimos ducimus vero</p>
                                                </div>
                                            </a>	
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6 portfolio-grids">
                                        <div class="agileinfo-effect fadeInUp animated" data-wow-delay=".7s">
                                            <a href="<?php echo base_url('images/g5.jpg'); ?>" class="swipebox" title="Praesent non purus fermentum, eleifend velit non Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. ">
                                                <img src="<?php echo base_url('images/g5.jpg'); ?>" alt="" class="img-responsive" />
                                                <div class="figcaption">
                                                    <p>Dignissimos ducimus vero</p>
                                                </div>
                                            </a>	
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6 portfolio-grids">
                                        <div class="agileinfo-effect fadeInUp animated" data-wow-delay=".9s">
                                            <a href="<?php echo base_url('images/g7.jpg'); ?>" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                                                <img src="<?php echo base_url('images/g7.jpg'); ?>" alt="" class="img-responsive" />
                                                <div class="figcaption">
                                                    <p>Accusamus digni ducimus</p>
                                                </div>
                                            </a>	
                                        </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="tab-1 resp-tab-content">
                                <div class="tab_img">
                                    <div class="col-md-4 col-sm-4 col-xs-6 portfolio-grids">
                                        <div class="agileinfo-effect fadeInUp animated" data-wow-delay=".5s">
                                            <a href="<?php echo base_url('images/g1.jpg'); ?>" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
                                                <img src="<?php echo base_url('images/g1.jpg'); ?>" alt="" class="img-responsive" />
                                                <div class="figcaption">
                                                    <p>Qignissimos ducimus vero</p>
                                                </div>
                                            </a>	
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6 portfolio-grids">
                                        <div class="agileinfo-effect fadeInUp animated" data-wow-delay=".7s">
                                            <a href="<?php echo base_url('images/g7.jpg'); ?>" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                                                <img src="<?php echo base_url('images/g7.jpg'); ?>" alt="" class="img-responsive" />
                                                <div class="figcaption">
                                                    <p>Accusamus digni ducimus</p>
                                                </div>
                                            </a>	
                                        </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="tab-1 resp-tab-content">
                                <div class="tab_img">
                                    <div class="col-md-4 col-sm-4 col-xs-6 portfolio-grids">
                                        <div class="agileinfo-effect fadeInUp animated" data-wow-delay=".5s">
                                            <a href="<?php echo base_url('images/g9.jpg'); ?>" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                                                <img src="<?php echo base_url('images/g9.jpg'); ?>" alt="" class="img-responsive" />
                                                <div class="figcaption">
                                                    <p>Qignissimos ducimus vero</p>
                                                </div>
                                            </a>	
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6 portfolio-grids">
                                        <div class="agileinfo-effect fadeInUp animated" data-wow-delay=".7s">
                                            <a href="<?php echo base_url('images/g1.jpg'); ?>" class="swipebox" title="Consectetur adipiscing elit. Duis maximus tortor diam, ac lorem ipsum dolor sit amet, lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                                                <img src="<?php echo base_url('images/g1.jpg'); ?>" alt="" class="img-responsive" />
                                                <div class="figcaption">
                                                    <p>Dignissimos ducimus vero</p>
                                                </div>
                                            </a>	
                                        </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="tab-1 resp-tab-content">
                                <div class="tab_img">
                                    <div class="col-md-4 col-sm-4 col-xs-6 portfolio-grids">
                                        <div class="agileinfo-effect fadeInUp animated" data-wow-delay=".5s">
                                            <a href="<?php echo base_url('images/g4.jpg'); ?>" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                                                <img src="<?php echo base_url('images/g4.jpg'); ?>" alt="" class="img-responsive" />
                                                <div class="figcaption">
                                                    <p>Qignissimos ducimus vero</p>
                                                </div>
                                            </a>	
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6 portfolio-grids">
                                        <div class="agileinfo-effect fadeInUp animated" data-wow-delay=".7s">
                                            <a href="<?php echo base_url('images/g6.jpg'); ?>" class="swipebox" title="Duis maximus tortor diam, ac lobortis justimages/g6.jpgo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                                                <img src="<?php echo base_url('images/g6.jpg'); ?>" alt="" class="img-responsive" />
                                                <div class="figcaption">
                                                    <p>Dignissimos ducimus vero</p>
                                                </div>
                                            </a>	
                                        </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ResponsiveTabs -->
                <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#horizontalTab').easyResponsiveTabs({
                            type: 'default', //Types: default, vertical, accordion           
                            width: 'auto', //auto or any width like 600px
                            fit: true   // 100% fit in a container
                        });
                    });
                </script>
                <!-- //ResponsiveTabs -->
                <!-- swipe box js -->
                <script src="js/jquery.swipebox.min.js"></script> 
                <script type="text/javascript">
                    jQuery(function ($) {
                        $(".swipebox").swipebox();
                    });
                </script>
                <!-- //swipe box js -->
            </div>
        </div>
        <!-- //portfolio -->
        <!-- testimonial -->
        <div class="testimonial services">
            <!-- container -->
            <div class="container">
                <h3 class="w3layouts-title wow fadeInDown animated" data-wow-delay=".5s">Feedback About us</h3> 
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active agileits-w3layouts">
                            <div class="carousel-caption">
                                <div class="testimonial-grids">
                                    <div class="testimonial-left">
                                        <img src="images/t4.jpg" alt="" />
                                    </div>
                                    <div class="testimonial-right">
                                        <h5>U.G. Bandara</h5>
                                        <p><span>"</span> Best hospital service, recommend 100%.   <span>"</span>
                                        </p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="item agileits-w3layouts"> 
                            <div class="carousel-caption">
                                <div class="testimonial-grids">
                                    <div class="testimonial-left">
                                        <img src="images/t5.jpg" alt="" />
                                    </div>
                                    <div class="testimonial-right">
                                        <h5>K.L. Sampath</h5>
                                        <p><span>"</span> Great service and best place to go with the best doctors in the area. <span>"</span>
                                        </p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div> 
                        </div>
                        <div class="item agileits-w3layouts"> 
                            <div class="carousel-caption">
                                <div class="testimonial-grids">
                                    <div class="testimonial-left">
                                        <img src="images/t6.jpg" alt="" />
                                    </div>
                                    <div class="testimonial-right">
                                        <h5>I.G. Ranjani</h5>
                                        <p><span>"</span> Very good service of all the staff. Fully satisfied. <span>"</span>
                                        </p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div> 
                        </div>
                    </div> 
                </div><!-- /.carousel -->  
            </div>
            <!-- //container -->
        </div>
        <!-- //testimonial --> 
        <!-- contact -->		
        <div class="contact" id="contact"> 
            <div class="container">
                <h3 class="w3layouts-title wow fadeInDown animated" data-wow-delay=".5s">Contact Us</h3> 
                <div class="contact-form">
                    <div class="col-md-7 contact-right wow fadeInRight animated" data-wow-delay=".5s">
                        <h5>Miscellaneous information:</h5>
                        <p>Post your Comments and Suggestions here…</p>
                        <form action="#" method="post">  
                            <input type="text" name="Name" placeholder="Name" required="">
                            <input type="text" class="email" name="Email" placeholder="Email" required="">
                            <input type="text" name="Phone no" placeholder="Phone" required="">
                            <textarea name="Message" placeholder="Message" required=""></textarea>
                            <input class="wow zoomIn animated" data-wow-delay=".5s" type="submit" value="SUBMIT" > 
                        </form>
                    </div>
                    <div class="col-md-5 contact-left">
                        <div class="address wow fadeInLeft animated" data-wow-delay=".5s">
                            <h5>Address:</h5>
                            <p><i class="glyphicon glyphicon-home"></i> No.43, Colombo Rd, Ginigathena. </p>
                        </div>
                        <div class="address address-mdl wow fadeInLeft animated" data-wow-delay=".5s">
                            <h5>Phones:</h5>
                            <p><i class="glyphicon glyphicon-earphone"></i> +94 51 2242238</p>
                            <p><i class="glyphicon glyphicon-phone"></i> +94 71 7856342</p>
                        </div>
                        <div class="address wow fadeInLeft animated" data-wow-delay=".5s">
                            <h5>Email:</h5>
                            <p><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:info@example.com">arogyahospital@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="agileits-w3layouts-map wow zoomIn animated" data-wow-delay=".5s">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555" allowfullscreen></iframe>
            </div>
        </div>
        <!-- //contact -->	
        <!-- footer -->
        <div class="footer">
            <div class="container">
                <div class="col-md-4 footer-grids wow fadeInLeft animated" data-wow-delay=".5s">
                    <h3>Small Description about our hospital :</h3>
                    <p>Arogya Hospital is a private hospital committed to delivering exceptional healthcare across a range of specialties </p>
                </div>
                <div class="col-md-4 footer-grids wow fadeInRight animated" data-wow-delay=".5s">
                    <h3>Newsletter :</h3>
                    <form action="#" method="post"> 
                        <input type="email" name="Email" placeholder="Email" required="">
                        <input type="submit" value="Submit">
                    </form>
                    <h3>Get the App :</h3>
                    <img src="<?= base_url('images/app.png')?>"/>
                </div>
                <div class="col-md-4 footer-grids wow fadeInLeft animated" data-wow-delay=".5s">
                    <h3>Office Hours :</h3>
                    <h5>24 x 7 service </h5>
                    <h5><b>Mon-Fri:</b> 7.00am – 8.00pm </h5>
                    <h5><b>Sat-Sun:</b> 7.00 am – 9.00 pm</h5>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //footer -->
        <!-- copy right -->
        <div class="footer-bottom">
            <div class="container"> 
                <p>© 2018 . All rights reserved | Design by <a href="#">AROGYA HOSPITAL</a></p>
            </div>
        </div>  
        <!-- //copy right -->
        <!-- animation --> 
        <script src="js/wow.min.js"></script>
        <script>
                    new WOW().init();
        </script>
        <!-- //animation --> 
        <!-- start-smooth-scrolling -->
        <script type="text/javascript" src="<?php echo base_url('js/move-top.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/easing.js'); ?>"></script>	
        <script type="text/javascript">
                    jQuery(document).ready(function ($) {
                        $(".scroll").click(function (event) {
                            event.preventDefault();
                            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                        });
                    });
        </script>
        <!-- //end-smooth-scrolling -->
        <!-- smooth-scrolling-of-move-up -->
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */

                $().UItoTop({easingType: 'easeOutQuart'});

            });
        </script> 
        <!-- //smooth-scrolling-of-move-up -->
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
    </body>
</html>