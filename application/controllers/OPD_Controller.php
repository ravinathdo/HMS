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
    public function wardPlacement() {
        $this->load->model(array('OPDAppointment'));
        $data['msg'] = '';
        //get opd appointment details 
        $oPDAppointment0 = new OPDAppointment();


        //change the status code -> approve 
        $ward_id = $this->input->post('ward_id');
        $appointment_id = $this->input->post('appointment_id');
        $patient_id = $this->input->post('patient_id');

        $oPDAppointment0->updateOPDAppointment(array('status_code'=>'ADMIT'), $appointment_id);
        
        //insert into 'hms_ward_patient' 
        

        $get = $oPDAppointment0->getOPDAppointmentList();
        echo '<tt><pre>' . var_export($get, TRUE) . '</pre></tt>';
        $data['opdAppoList'] = $get;
        $this->load->view('opd/opd-patient-opd-history', $data);
    }

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
        $this->load->model(array('OPDAppointment'));
        $data['msg'] = '';
        //get opd appointment details 
        $oPDAppointment0 = new OPDAppointment();

        $get = $oPDAppointment0->getOPDAppointmentList();
//        echo '<tt><pre>' . var_export($get, TRUE) . '</pre></tt>';
        $data['opdAppoList'] = $get;
        $this->load->view('opd/opd-patient-opd-history', $data);
    }

    public function loadAmbulanceRequest() {
//        $this->load->model(array(''));
        $data['msg'] = '';
        $this->load->view('opd/opd-ambulance-request', $data);
    }

}
