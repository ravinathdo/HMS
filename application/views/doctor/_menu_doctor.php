<li><a href="<?php echo base_url('User_Controller/loadHome');?>">Home</a></li>
<li><a href="<?php echo base_url('Doctor_Controller/getAppointmentList');?>/<?php echo $this->session->userdata('userbean')->id ?>">Manage Appointment</a></li>
