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
                <div class="col-md-5">
                    <div class="panel panel-warning">
                        <div class="panel-heading ">
                            <h3> <img src="<?= base_url('/images/icon-item.png') ?>" style="width: 30px" />  Item Request </h3>
                        </div>
                        <div class="panel-body">
                            <?= $msg; ?>
                            <form class="form-horizontal" action="<?php echo base_url('LAB_Controller/setItemRequest') ?>" method="post">
                                <div class="form-group">
                                    <label for="text" class="control-label col-xs-4">Item Name</label> 
                                    <div class="col-xs-8">
                                        <input id="text" name="purchasing_item"  type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text1" class="control-label col-xs-4">Qty</label> 
                                    <div class="col-xs-8">
                                        <input id="text1" name="qty" type="number" class="form-control">
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
                    <table class="table-bordered" style="width: 100%" >
                        <thead>
                            <tr style="font-weight: bold">
                                <th>Item</th>
                                <th>Qty</th>
                                <th>Status</th>
                                <th>Date Time</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($myRequestItems as $value) {
                                ?>
                                <tr>
                                    <td><?= $value->purchasing_item ?></td>
                                    <td><?= $value->qty ?></td>
                                    <td><?= $value->status_code ?></td>
                                    <td><?= $value->created_date ?></td>
                                    <td><?= $value->amount ?></td>
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

