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
                            <h3> <img src="<?= base_url('/images/icon-stock.png') ?>" style="width: 30px" />  Inventory Manage </h3>
                        </div>
                        <div class="panel-body">
                            <?= $msg ?>
                            <form class="form-horizontal" action="<?php echo base_url('LAB_Controller/addInventoryItem'); ?>" method="post">
                                <div class="form-group"> 
                                    <label for="text" class="control-label col-xs-4">Item Name</label> 
                                    <div class="col-xs-8">
                                        <input id="text" name="item_name" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text1" class="control-label col-xs-4">Qty</label> 
                                    <div class="col-xs-8">
                                        <input id="text1" name="qty" type="text" class="form-control">
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
                    <?php // echo '<tt><pre>' . var_export($allInventory, TRUE) . '</pre></tt>';?>
                    <table class="table-bordered" style="width: 100%" >
                        <thead>
                            <tr style="font-weight: bold">
                                <th>Item Name</th>
                                <th>Qty</th>
                                <th>Last Update</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($allInventory)
                                foreach ($allInventory as $value) {
                                    ?>
                                    <tr>
                                        <td><?= $value->item_name ?></td>
                                        <td><?= $value->qty ?></td>
                                        <td><?= $value->created_date ?></td>
                                        <td><a href="<?php echo base_url('LAB_Controller/loadUpdateInventory/'.$value->id)?>">update</a></td>
                                    </tr>
                                    <?php
                                }
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

