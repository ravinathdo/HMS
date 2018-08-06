<?php

$userRole = $this->session->userdata('userbean')->user_role; 
switch ($userRole) {
    case "ADMIN":
        $this->load->view('admin/_menu_admin');
        break;
    case "PATIENT":
        $this->load->view('patient/_menu_patient');
        break;
}

?>
