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

    public function rejectAppointment($id) {
        $this->load->model(array('OPDAppointment', 'Ward'));
        $data['msg'] = '';
        //get opd appointment details 
        $oPDAppointment0 = new OPDAppointment();

        $ward = new Ward();
        $data['wardList'] = $ward->get();
$updateArray = array('status_code'=>'REJECT' );
        $oPDAppointment0->updateOPDAppointment($updateArray, $id);

        $data['msg'] = '<p class="text-danger">Appointment Rejected</p>';

        $get = $oPDAppointment0->getOPDAppointmentList();
//        echo '<tt><pre>' . var_export($get, TRUE) . '</pre></tt>';
        $data['opdAppoList'] = $get;
        $this->load->view('opd/opd-patient-opd-history', $data);
    }

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

        $oPDAppointment0->updateOPDAppointment(array('status_code' => 'ADMIT'), $appointment_id);

        //insert into 'hms_ward_patient' 


        $get = $oPDAppointment0->getOPDAppointmentList();
//        echo '<tt><pre>' . var_export($get, TRUE) . '</pre></tt>';
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
        $this->load->model(array('Patient'));
        $data['msg'] = '';
        $patient = new Patient();
        $data['patientList'] = $patient->get();
        $this->load->view('opd/opd-list-patient', $data);
    }

    public function loadPatientOpdHistory() {
        $this->load->model(array('OPDAppointment', 'Ward'));
        $data['msg'] = '';
        //get opd appointment details 
        $oPDAppointment0 = new OPDAppointment();
        $ward = new Ward();

        $get = $oPDAppointment0->getOPDAppointmentList();
        //echo '<tt><pre>' . var_export($get, TRUE) . '</pre></tt>';
        $data['opdAppoList'] = $get;
        $data['wardList'] = $ward->get();
        //get ward list for drop down list


        $this->load->view('opd/opd-patient-opd-history', $data);
    }

    public function loadAmbulanceRequest() {
        $this->load->model(array('Vehicle', 'VehicleRequest'));
        $data['msg'] = '';

        $user_id = $this->session->userdata('userbean')->id;

        $vehicle = new Vehicle();
        $vehicleRequest = new VehicleRequest();
        $data['vehicleLiat'] = $vehicle->get();

        //my vehicle requets list 
        $data['myRequest'] = $vehicleRequest->getMyRequest($user_id);

        $this->load->view('opd/opd-ambulance-request', $data);
    }

    public function ambulanceRequest() {
        $this->load->model(array('Vehicle', 'VehicleRequest'));
        $data['msg'] = '';
        $user_id = $this->session->userdata('userbean')->id;
        $vehicle = new Vehicle();
        $vehicleRequest = new VehicleRequest();

//        $vehicleRequest->vehicle_id = $this->input->post('vehicle_id');
        $vehicleRequest->datetime_need = $this->input->post('datetime_need');
        $vehicleRequest->request_by = $user_id;
        $vehicleRequest->comment = $this->input->post('comment');

        //set ambulanceRequest from user
        $vehicleRequest->save();

        $db_error = $this->db->error();
        echo '<tt><pre>' . var_export($db_error, TRUE) . '</pre></tt>';
        if ($db_error['code'] == 0) {
            $data['msg'] = '<p class="text-success">New request created successful </p>';
        } else {
            $data['msg'] = '<p class="text-error"> Invalid or duplicate entry found </p>';
        }


        $data['vehicleLiat'] = $vehicle->get();

        //my vehicle requets list 
        $data['myRequest'] = $vehicleRequest->getMyRequest($user_id);
        $this->load->view('opd/opd-ambulance-request', $data);
    }

}
