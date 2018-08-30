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
                <div class="col-md-10">
                    <?php // echo '<tt><pre>' . var_export($approvedList, TRUE) . '</pre></tt>'; ?>
                    <?= $msg ?>
                    <div class="panel panel-warning">
                        <div class="panel-heading ">
                            <h3> <img src="<?= base_url('/images/icon-purchasing.png') ?>" style="width: 30px" />  Item Purchasing </h3>
                        </div>
                        <div class="panel-body">
                            <table class="table-bordered" style="width: 80%">
                                <tr style="font-weight: bold">
                                    <td>Item name</td>
                                    <td>Qty</td>
                                    <td>Request By</td>
                                    <td>Status</td>
                                    <td></td>
                                </tr>
                                <?php 
                                if($approvedList)
                                foreach ($approvedList as $value) {
                                    ?>
                                    <tr>
                                        <td><?= $value->purchasing_item ?></td>
                                        <td><?= $value->qty ?></td>
                                        <td><?= $value->status_code ?></td>
                                        <td><?= $value->created_date ?></td>
                                        <td>
                                            <form action="<?= base_url('Accountant_Controller/purchaseItem') ?>" method="post">
                                                <input type="text" name="amount" />
                                                <input type="hidden" name="id" value="<?= $value->id ?>" />
                                                <button type="submit" class="btn btn-success btn-xs">Purchase</button>
                                            </form></td>
                                    </tr>
                                <?php }
                                ?>
                            </table>
                        </div>
                    </div>



                    <div class="panel panel-success">
                        <div class="panel-heading ">
                            <h3> <img src="<?= base_url('/images/icon-purchasing.png') ?>" style="width: 30px" />  Item Purchasing History </h3>
                        </div>
                        <div class="panel-body">
                            <table class="table-bordered" style="width: 80%">
                                <tr style="font-weight: bold">
                                    <td>Item name</td>
                                    <td>Qty</td>
                                    <td>Status</td>
                                    <td>Amount</td>
                                    <td></td>
                                </tr>
                                <?php 
                                if($allList)
                                foreach ($allList as $value) {
                                    ?>
                                    <tr>
                                        <td><?= $value->purchasing_item ?></td>
                                        <td><?= $value->qty ?></td>
                                        <td><?= $value->status_code ?></td>
                                        <td><?= $value->amount ?></td>
                                        <td><?= $value->created_date ?></td>
                                    </tr>
                                <?php }
                                ?>

                            </table>
                        </div>
                    </div>

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

