<ul style="padding-left: 5px">
    <li><a href="<?php echo base_url('OPD_Controller/loadListPatient'); ?>">
            <img src="<?= base_url('/images/icon-patient.png') ?>" alt="..." class="img-thumbnail menu-icon" title="Patient Details"> Patient Details
        </a></li>
    <li><a href="<?php echo base_url('OPD_Controller/loadPatientOpdHistory'); ?>">
            <img src="<?= base_url('/images/icon-opd-applointment.png') ?>" alt="..." class="img-thumbnail menu-icon" title="OPD Appointment"> OPD Appointment
        </a></li>
    <li><a href="<?php echo base_url('OPD_Controller/loadAmbulanceRequest'); ?>">
            <img src="<?= base_url('/images/icon-ambulance.png') ?>" alt="..." class="img-thumbnail menu-icon" title="Ambulance Request"> Ambulance Request
        </a></li>
    <li><a href="<?php echo base_url('Transport_Controller/#'); ?>">
        <img src="<?= base_url('/images/icon-report.png') ?>"  alt="..." class="img-thumbnail menu-icon" title="Ambulance Request"> Reports
    </a></li>
    <li><a href="<?php echo base_url('User_Controller/loadProfile'); ?>">
        <img src="<?= base_url('/images/icon-profile.png') ?>"  alt="..." class="img-thumbnail menu-icon" title="Ambulance Request"> Profile
    </a></li>
</ul>

