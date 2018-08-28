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
                    <?php $this->load->view('pharmacist/_head_pharmacist'); ?>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="clear"> </div>
            <div class="top-nav">
                <div class="wrap">
                    <ul>
                        <?php $this->load->view('pharmacist/_menu_pharmacist'); ?>
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
                    <?php $this->load->view('pharmacist/_tree_pharmacist'); ?>
                </div>
                <div class="col-md-5">
                    <div class="panel panel-warning">
                        <div class="panel-heading ">
                            <h3> <img src="<?= base_url('/images/icon-drug.png') ?>" style="width: 30px" />  Manage Drug </h3>
                        </div>
                        <div class="panel-body">
                                                    <span class="mando-msg">* fields are mandatory</span>

                            <form class="form-horizontal" action="<?= base_url('Pharmacist_Controller/addDrug') ?>" method="post">
                                <div class="form-group">
                                    <label for="text" class="control-label col-xs-4">Drug Name <span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input id="text" name="drug_name"  required="" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text1" class="control-label col-xs-4">Qty <span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input id="text1" name="qty"  required="" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text2" class="control-label col-xs-4">Price <span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input id="text2" name="price" required="" type="text" class="form-control">
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
                    <?php // echo '<tt><pre>' . var_export($drugList, TRUE) . '</pre></tt>'; ?>
                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Drug</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($drugList as $value) {
                                ?>
                                <tr>
                                    <td><?= $value->drug_name ?></td>
                                    <td><?= $value->qty ?></td>
                                    <td><?= $value->price ?></td>
                                    <td><a href="<?= base_url('Pharmacist_Controller/loadUpdateDrug/'.$value->id)?>" class="btn btn-default btn-xs">update</a>
                                    </td>
                                </tr>

                            <?php }
                            ?>

                        </tbody>
                    </table>
                    <link href="<?= base_url('css/jquery.dataTables.min.css') ?>" rel="stylesheet" type="text/css"/>
                    <script src="<?= base_url('js/jquery.dataTables.min.js') ?>" type="text/javascript"></script>
                    <script type="text/javascript">
            $(document).ready(function () {
                $('#example').DataTable();
            });
                    </script>


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

