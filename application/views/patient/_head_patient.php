<div class="logo">
    <a href="<?= base_url('') ?>"><img src="<?php echo base_url('images/logo.png');?>" title="logo" /></a>
</div>
<div class="social-links">
    <ul>
        <li><a href="#">
            <?php echo $this->session->userdata('userbean')->first_name ?>
            <?php echo $this->session->userdata('userbean')->last_name ?>
            </a></li>
        <li>[<?php echo $this->session->userdata('userbean')->user_role ?>]</li>
        <li><a href="<?php echo base_url('User_Controller/logout');?>">Logout</a></li>
        <div class="clear"> </div>
    </ul>
</div>