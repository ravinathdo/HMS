<ul style="padding-left: 5px;font-weight: bold">
    <!--    <li><a href="">Search Doctors</a></li>
        <li><a href="">earch Doctors</a></li>-->
    <li> <a href="<?php echo base_url('Patient_Controller/loadSearchDoctors'); ?>">
            <img src="<?= base_url('/images/icon-doctor.png') ?>" alt="..." class="img-thumbnail menu-icon"  title=""> Search Doctors 
        </a>
    </li>
    <li><a href="<?php echo base_url('Patient_Controller/loadOPDAppointment'); ?>">
            <img src="<?= base_url('/images/icon-opd-applointment.png') ?>" alt="..." class="img-thumbnail menu-icon" title=""> OPD Appointment
        </a>
    </li>
    <li> <a href="<?php echo base_url('Patient_Controller/loadAppointment'); ?>">
            <img src="<?= base_url('/images/icon-applointment.png') ?>" alt="..." class="img-thumbnail menu-icon" title=""> Clinic Appointment
        </a>
    </li>
    <li> <a href="<?php echo base_url('Patient_Controller/loadMyAppointment'); ?>">
            <img src="<?= base_url('/images/icon-my-applointment.png') ?>" alt="..." class="img-thumbnail menu-icon" title=""> My Appointment
        </a>
    </li>
    <li> <a href="<?php echo base_url('Patient_Controller/loadViewLabTestCenters'); ?>">
            <img src="<?= base_url('/images/icon-lab-test.png') ?>" alt="..." class="img-thumbnail menu-icon" title=""> Lab Test
        </a>
    </li>
    <li> <a href="<?php echo base_url('Patient_Controller/loadFeedback'); ?>">
            <img src="<?= base_url('/images/icon-feedback.png') ?>" alt="..." class="img-thumbnail menu-icon" title=""> Feedback
        </a>
    </li>
    <li><a href="<?php echo base_url('Patient_Controller/loadReports'); ?>">
            <img src="<?= base_url('/images/icon-report.png') ?>" alt="..." class="img-thumbnail menu-icon" title=""> Reports
        </a>
    </li>
    <li> <a href="<?php echo base_url('User_Controller/loadProfile'); ?>">
        <img src="<?= base_url('/images/icon-profile.png') ?>" alt="..." class="img-thumbnail menu-icon" title=""> Profile
        </a>
    </li>
</ul>
