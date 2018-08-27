<ul style="padding-left: 5px">
    <li> 
        <a href="<?php echo base_url('Doctor_Controller/loadAvailability'); ?>">
            <img src="<?= base_url('/images/icon-doctor.png') ?>" alt="..." class="img-thumbnail menu-icon" title="My Availability"> My Availability
        </a>
    </li>
    <li> 
        <a href="<?php echo base_url('Doctor_Controller/getAppointmentList'); ?>/<?php echo $this->session->userdata('userbean')->id ?>">
            <img src="<?= base_url('/images/icon-manage-applointment.png') ?>" alt="..." class="img-thumbnail  menu-icon" title="Manage Appointment"> Manage Appointment
        </a>
    </li>
    <li> 
        <a href="<?php echo base_url('Doctor_Controller/loadDrugDetails'); ?>">
            <img src="<?= base_url('/images/icon-drug.png') ?>" alt="..." class="img-thumbnail menu-icon" title="Drug Availability"> Drug Availability
        </a>
    </li>
    <li> 
        <a href="<?php echo base_url('Doctor_Controller/loadWard'); ?>">
            <img src="<?= base_url('/images/icon-ward.png') ?>" alt="..." class="img-thumbnail menu-icon" title="Ward"> Ward
        </a>
    </li>
    <li> 
        <a href="<?php echo base_url('Doctor_Controller/loadPatientList'); ?>">
            <img src="<?= base_url('/images/icon-patient.png') ?>" alt="..." class="img-thumbnail menu-icon" title="Patient Details"> Patient Details
        </a>
    </li>
    <li> 
        <a href="<?php echo base_url('#'); ?>">
            <img src="<?= base_url('/images/icon-report.png') ?>" alt="..." class="img-thumbnail menu-icon" title="Patient Details"> Reports
        </a>
    </li>
    <li> 
        <a href="<?php echo base_url('User_Controller/loadProfile'); ?>">
            <img src="<?= base_url('/images/icon-profile.png') ?>" alt="..." class="img-thumbnail menu-icon" title="Patient Details"> Profile
        </a>
    </li>

</ul>

