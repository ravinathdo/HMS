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
                    <?php $this->load->view('transport/_head_transport'); ?>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="clear"> </div>
            <div class="top-nav">
                <div class="wrap">
                    <ul>
                        <?php $this->load->view('transport/_menu_transport'); ?>
                        <div class="clear"> </div>
                    </ul>
                </div>
            </div>
        </div>
        <!---End-header---->

        <!----start-content----->
        <div class="content">
            <div class="row">
                <div class="col-md-2">  <?php $this->load->view('transport/_tree_transport'); ?></div>
                <div class="col-md-8">

                    <table border="0" style="width: 100%" class="table-bordered">
                        <thead>
                            <tr style="font-weight: bold">
                                <th>Created Time</th>
                                <th>Comment</th>
                                <th>Status Code</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
//                            echo '<tt><pre>' . var_export($vehicleReqList, TRUE) . '</pre></tt>';
                            if($vehicleReqList!=null)
                            foreach ($vehicleReqList as $value) {
                                ?>
                                <tr>
                                    <td><?= $value->created_time ?></td>
                                    <td><?= $value->comment ?></td>
                                    <td><?= $value->status_code ?></td>
                                    <td><?= $value->first_name ?><?= $value->user_role ?></td>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
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

