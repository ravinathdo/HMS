<ul style="padding-left: 5px">
    <li><tt><pre><a href="<?php echo base_url('Doctor_Controller/loadAvailability'); ?>"><i class="fas fa-user-md"></i> My Availability</a></pre></tt></li>
    <li><tt><pre><a href="<?php echo base_url('Doctor_Controller/getAppointmentList'); ?>/<?php echo $this->session->userdata('userbean')->id ?>"><i class="fas fa-calendar-minus"></i> Manage Appointment</a></pre></tt></li>
    <li><tt><pre><a href="<?php echo base_url('Doctor_Controller/loadDrugDetails'); ?>"><i class="fas fa-capsules  "></i> Drug Availability</a></pre></tt></li>
    <li><tt><pre><a href="<?php echo base_url('Doctor_Controller/loadWard'); ?>"><i class="fas fa-hospital"></i> Ward</a></pre></tt></li>
    <li><tt><pre><a href="<?php echo base_url('Doctor_Controller/loadPatientList'); ?>"><i class="fas fa-user"></i> Patient Details</a></pre></tt></li>
    <li><tt><pre><a href="<?php echo base_url('#'); ?>"><i class="fas fa-file-word "></i> Reports</a></pre></tt></li>
    <li><tt><pre><a href="<?php echo base_url('User_Controller/loadProfile'); ?>"><i class="fas fa-users-cog "></i> Profile</a></pre></tt></li>
</ul>

