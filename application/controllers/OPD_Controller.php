<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OPD_Controller
 *
 * @author User
 */
class OPD_Controller extends CI_Controller {

    //put your code here

    public function getOPDAppointment() {
        $this->load->model(array('OPDAppointment'));
        $oPDAppointment = new OPDAppointment();
        $oPDAppointmentList = $oPDAppointment->getOPDAppointmentList();
        $data['oPDAppointmentList'] = $oPDAppointmentList;
        $this->load->view('opd/opd_appointment_list', $data);
    }

    public function getOPDAppointmentDetail($id) {
        $this->load->model(array('OPDAppointment'));
        $oPDAppointment = new OPDAppointment();
        $oPDAppointmentDetail = $oPDAppointment->getFromID($id);
        $data['oPDAppointmentDetail'] = $oPDAppointmentDetail[0];
        echo '<tt><pre>' . var_export($oPDAppointmentDetail, TRUE) . '</pre></tt>';
        $this->load->view('opd/opd_appointment_detail', $data);
    }

    
    public function loadListPatient() {
//        $this->load->model(array(''));
        $data['msg'] = '';
        $this->load->view('opd/opd-list-patient', $data);
    }
    
    public function loadPatientOpdHistory() {
//        $this->load->model(array(''));
        $data['msg'] = '';
        $this->load->view('opd/opd-patient-opd-history', $data);
    }
    public function loadAmbulanceRequest() {
//        $this->load->model(array(''));
        $data['msg'] = '';
        $this->load->view('opd/opd-ambulance-request', $data);
    }
}
