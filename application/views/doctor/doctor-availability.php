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
                    <?php $this->load->view('doctor/_head_doctor'); ?>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="clear"> </div>
            <div class="top-nav">
                <div class="wrap">
                    <ul>
                        <?php $this->load->view('doctor/_menu_doctor'); ?>
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
                    <?php $this->load->view('doctor/_tree_doctor'); ?>
                </div>
                <div class="col-md-5">
                    <?= $msg ?>
                    <div class="panel panel-warning">
                        <div class="panel-heading ">My Availability</div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="<?php echo base_url('Doctor_Controller/availability'); ?>" method="post">
                                <div class="form-group">
                                    <label for="day_available" class="control-label col-xs-4">Day</label> 
                                    <div class="col-xs-8">
                                        <select id="day_available" name="day_available" class="select form-control">
                                            <option value="Sunday">Sunday</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="time_available" class="control-label col-xs-4">Time</label> 
                                    <div class="col-xs-8">
                                        <input id="time_available" name="time_available" required="" type="time" class="form-control">
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

                    <table class="table-bordered" style="width: 50%">
                        <?php
                        if($docAvilabilityList!=null)
                        foreach ($docAvilabilityList as $value) {
                            ?>
                            <tr>
                                <td><?= $value->day_available ?></td>
                                <td><?= $value->time_available ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>

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

