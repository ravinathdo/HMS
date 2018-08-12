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
     <li><a href="<?php echo base_url('Admin_Controller/loadPatientList'); ?>">
            <img src="<?= base_url('/images/icon-patient-list.png') ?>"  alt="..." class="img-thumbnail menu-icon" title="Patients"> Patients
        </a></li>
        <li> 
        <a href="<?php echo base_url('#'); ?>">
            <img src="<?= base_url('/images/icon-report.png') ?>" alt="..." class="img-thumbnail menu-icon" title="Patient Details"> Reports
        </a>
</ul>

