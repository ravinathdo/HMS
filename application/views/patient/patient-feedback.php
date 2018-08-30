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
                    <?php $this->load->view('patient/_head_patient'); ?>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="clear"> </div>
            <div class="top-nav">
                <div class="wrap">
                    <ul>
                        <?php $this->load->view('patient/_menu_patient'); ?>
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
                                        <?php $this->load->view('patient/_tree_patient'); ?>

                </div>
                <div class="col-md-5">
                    <div class="panel panel-warning">
                        <div class="panel-heading ">
                            <h3><img src="<?= base_url('/images/icon-feedback.png') ?>" style="width: 30px" />     Feedback</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="<?= base_url('Patient_Controller/feedback') ?>" method="post">
                                <div class="form-group">
                                    <label for="textarea" class="control-label col-xs-4">Feedback</label> 
                                    <div class="col-xs-8">
                                        <textarea id="textarea" name="feedback" cols="40" rows="5" class="form-control"></textarea>
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

<?= $msg?>
                    <table>


                        <?php 
                        if($userFeedback)
                        foreach ($userFeedback as $value) {
                            ?> 
                            <tr>
                                <td>
                                    <?= $value->feedback ?>
                                </td>
                                <td style="width: 10%">
                                    <span class="btn btn-default btn-xs"><?= $value->created_date ?></span>
                                    <a href="<?= base_url('Patient_Controller/removeFeedback')?>/<?= $value->id ?>"<img src="<?= base_url('images/details_close.png') ?>" />
                                </td>
                            </tr>
                        <?php }
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

