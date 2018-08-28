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
                    <?php $this->load->view('admin/_head_admin'); ?>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="clear"> </div>
            <div class="top-nav">
                <div class="wrap">
                    <ul>
                        <?php $this->load->view('admin/_menu_admin'); ?>
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
                    <?php $this->load->view('admin/_tree_admin'); ?>
                </div>
                <div class="col-md-10">


                    <div class="row">
                        <div class="col-md-8">

                            <div class="panel panel-warning">
                                <div class="panel-heading ">

                                    <h4>  Doctor Registration </h4>

                                </div>
                                <div class="panel-body">
                                    <?php echo $msg; ?>
                                    <form class="form-horizontal"  action="<?php echo base_url('Admin_Controller/DoctorRegistration'); ?>" method="post" >
                                        <span class="mando-msg">* fields are mandatory</span>
                                        <div class="form-group">
                                            <label for="first_name" class="control-label col-xs-4">First Name <span class="mando-msg">*</span></label> 
                                            <div class="col-xs-8">
                                                <input required="" id="first_name" name="first_name" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="last_name" class="control-label col-xs-4">Last Name <span class="mando-msg">*</span></label> 
                                            <div class="col-xs-8">
                                                <input required="" id="last_name" name="last_name" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nic" class="control-label col-xs-4">NIC <span class="mando-msg">*</span></label> 
                                            <div class="col-xs-8">
                                                <input required="" id="nic" name="nic" type="text" class="form-control">
                                                     Default password will be same as the NICl address
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nic" class="control-label col-xs-4"></label> 
                                            <div class="col-xs-4">
                                                <span class="mando-msg">*</span><input id="email" name="email"  required="" type="email" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="col-xs-3">
                                               <span class="mando-msg">*</span> <input id="telephone" required="" name="telephone" type="text" class="form-control" placeholder="Telephone">
                                            </div>
                                            <div class="col-xs-1">
                                                <input type="checkbox" name="opd" value="OPD"> OPD
                                            </div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label for="degree" class="control-label col-xs-4">Degree <span class="mando-msg">*</span></label> 
                                            <div class="col-xs-8">
                                                <input  required="" id="degree" name="degree" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="specialist_id" class="control-label col-xs-4">Specialist</label> 
                                            <div class="col-xs-8">
                                                <select id="specialist_id"  name="specialist_id" class="select form-control">
                                                    <option value="">--select--</option>
                                                    <?php foreach ($this->session->userdata('specialist_list') as $value) {
                                                        ?> 
                                                        <option value="<?php echo $value->id; ?>"><?php echo $value->specialist; ?></option>
                                                    <?php }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="slmc_no" class="control-label col-xs-4">SLMCS No <span class="mando-msg">*</span></label> 
                                            <div class="col-xs-8">
                                                <input id="slmc_no" required="" name="slmc_no" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="doc_fee" class="control-label col-xs-4">Doctor Fee <span class="mando-msg">*</span></label> 
                                            <div class="col-xs-8">
                                                <input id="doc_fee" name="doc_fee" type="number" class="form-control">
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
                        <div class="col-md-4">
                            
                        </div>
                    </div>





                    <div class="panel panel-success">
                        <div class="panel-heading ">Registered Doctors</div>
                        <div class="panel-body">

                            <table id="example" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>nic</th>
                                        <th>degree</th>
                                        <th>doc_fee</th>
                                        <th>slmc_no</th>
                                        <th>created_date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($doctor_list as $value) {
                                        ?> 
                                        <tr>
                                            <td><?= $value->first_name ?></td>
                                            <td><?= $value->last_name ?></td>
                                            <td><?= $value->nic ?></td>
                                            <td><?= $value->degree ?></td>
                                            <td><?= $value->doc_fee ?></td>
                                            <td><?= $value->slmc_no ?></td>
                                            <td><?= $value->created_date ?></td>
                                            <td> <a href="<?= base_url('Admin_Controller/loadDoctorUpdate/'.$value->id) ?>">update</a></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                            <link href="<?php echo base_url('css/jquery.dataTables.min.css'); ?>" rel="stylesheet" type="text/css"/>
                            <script src="<?php echo base_url('js/jquery.dataTables.min.js'); ?>" type="text/javascript"></script>
                            <script type="text/javascript">
            $(document).ready(function () {
                $('#example').DataTable();
            });
                            </script>

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

