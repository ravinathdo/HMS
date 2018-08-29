<ul style="padding-left: 5px;font-weight: bold">
    <li><a href="<?php echo base_url('Transport_Controller/loadAmbulance'); ?>">
        <img src="<?= base_url('/images/icon-ambulance.png') ?>" alt="..." class="img-thumbnail menu-icon" title="Ambulance Manage"> Ambulance Manage
    </a></li>
    <li><a href="<?php echo base_url('Transport_Controller/loadAmbulanceRequestList'); ?>">
        <img src="<?= base_url('/images/icon-ambulance-request.png') ?>"  alt="..." class="img-thumbnail menu-icon" title="Ambulance Request"> Ambulance Request
    </a></li>
    <li><a href="<?php echo base_url('Transport_Controller/getPendingVehicleRequest'); ?>">
        <img src="<?= base_url('/images/icon-ambulance-request.png') ?>"  alt="..." class="img-thumbnail menu-icon" title="Ambulance Request"> Pending Request
    </a></li>
    <li><a href="<?php echo base_url('Transport_Controller/#'); ?>">
        <img src="<?= base_url('/images/icon-report.png') ?>"  alt="..." class="img-thumbnail menu-icon" title="Ambulance Request"> Reports
    </a></li>
    <li><a href="<?php echo base_url('User_Controller/loadProfile'); ?>">
        <img src="<?= base_url('/images/icon-profile.png') ?>"  alt="..." class="img-thumbnail menu-icon" title="Ambulance Request"> Profile
    </a></li>
</ul>
