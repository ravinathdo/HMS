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
                    <?php $this->load->view('opd/_head_opd'); ?>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="clear"> </div>
            <div class="top-nav">
                <div class="wrap">
                    <ul>
                        <?php $this->load->view('opd/_menu_opd'); ?>
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
                    <?php $this->load->view('opd/_tree_opd'); ?>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-warning">
                        <div class="panel-heading ">
                            <h3> <img src="<?= base_url('/images/icon-patient.png') ?>" style="width: 30px" /> Ambulance Request </h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="select" class="control-label col-xs-4">Vehicle Number</label> 
                                    <div class="col-xs-8">
                                        <select id="select" name="select" class="select form-control">
                                            <option value="">--select--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text" class="control-label col-xs-4">Date Time</label> 
                                    <div class="col-xs-8">
                                        <input id="text" name="text" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text1" class="control-label col-xs-4">To</label> 
                                    <div class="col-xs-8">
                                        <input id="text1" name="text1" type="text" class="form-control">
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label for="text1" class="control-label col-xs-4">Comment</label> 
                                    <div class="col-xs-8">
                                        <textarea name="text1" type="text" class="form-control"></textarea>
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
                <div class="col-md-7">

                    <table class="table-bordered" style="width: 100%">
                        <tr>
                            <td>ID</td>
                            <td>Vehicle No</td>
                            <td>Date Time</td>
                            <td>To</td>
                            <td>Comment</td>
                            <td>Status</td>
                            <td>Req Datetime</td>
                        </tr>
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

