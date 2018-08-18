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
                <div class="col-md-5">

                    <div class="panel panel-warning">
                        <div class="panel-heading ">
                            <h3> <img src="<?= base_url('/images/icon-employee.png') ?>" style="width: 30px" />  Doctor Salary </h3>
                        </div>
                        <div class="panel-body">

                            <form class="form-horizontal" action="<?= base_url('Accountant_Controller/getDoctorPaymentInfo') ?>" method="post" >
                                <div class="form-group">
                                    <label for="select" class="control-label col-xs-4">Doctor</label> 
                                    <div class="col-xs-8">
                                        <select id="doctor_id" name="doctor_id" required="" class="select form-control">
                                            <option value="">--select--</option>
                                            <?php
                                            foreach ($doctorList as $value) {
                                                ?>
                                                <option value="<?= $value->id ?>"><?= $value->slmc_no ?> - <?= $value->first_name ?> <?= $value->last_name ?> </option>
                                            <?php }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Amount" class="control-label col-xs-4">Month</label> 
                                    <div class="col-xs-8">
                                        <input type="month" id="start" name="appoint_month"  required="" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xs-offset-4 col-xs-8">
                                        <button name="submit" type="submit" class="btn btn-primary">View</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-md-5">

                    <div class="panel panel-success">
                        <div class="panel-heading ">Payment Information</div>
                        <div class="panel-body">
                            <table class="table-bordered" style="width: 100%">
                                <tr>
                                    <td>Apmt-No</td>
                                    <td>Month-Year</td>
                                    <td>Amount</td>
                                </tr>
                                <?php
                                $ttl = 0;
                                if($doctorEarningList)
                                foreach ($doctorEarningList as $value) {
                                    ?>
                                    <tr>
                                        <td><?= $value->id ?></td>
                                        <td><?= $value->created_date ?></td>
                                        <td><?= $value->doctor_fee ?>
                                        <?php  $ttl = $ttl+$value->doctor_fee; ?>
                                        </td>
                                    </tr>
                                <?php }
                                ?>
                            </table>
                            <br>
                            <h3>Payable :  <?= $ttl  ?> </h3>
                        </div>
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

