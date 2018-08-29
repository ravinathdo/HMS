<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WARD_Controller
 *
 * @author User
 */
class WARD_Controller extends CI_Controller {

    public function wardAdmitChangeStatus($id, $status) {
        $this->load->model(array('WardPatient'));
        $wardPatient = new WardPatient();
        $data['msg'] = '';


        $updateData = array('status_code' => $status);
        $wardPatient->updatePatient($updateData, $id);
        $db_error = $this->db->error();
        
//        echo '<tt><pre>' . var_export($db_error, TRUE) . '</pre></tt>';
        if ($db_error['code'] == 0) {
            $data['msg'] = '<p class="text-success">Status Updated successful </p>';
        } else {
            $data['msg'] = '<p class="text-error"> Invalid or duplicate entry found </p>';
        }

        
         $getAll = $wardPatient->getAdmitDetails();
        $data['allAdmits'] = $getAll;
        
        $this->load->view('ward/ward-approve-admint', $data);
    }

    public function loadApproveAdmintPatients() {
        $this->load->model(array('Ward', 'WardPatient'));
        $data['msg'] = '';
        $wardPatient = new WardPatient();

        //get all list
        $getAll = $wardPatient->getAdmitDetails();
        $data['allAdmits'] = $getAll;

        $this->load->view('ward/ward-approve-admint', $data);
    }

    public function loadWardCreation() {
        $this->load->model(array('Ward', 'Doctor'));
        $data['msg'] = '';
        $doctor = new Doctor();
        $ward = new Ward();
        $data['doctorList'] = $doctor->get();

        //get ward list with doctor
        $wardDetailsList = $ward->getWardDetailsList();
        $data['wardList'] = $wardDetailsList;

        $this->load->view('ward/ward-manage-ward', $data);
    }

    public function wardCreation() {
        $this->load->model(array('Ward', 'Doctor'));
        $doctor = new Doctor();

        $data['msg'] = '';

        $ward = new Ward();

        $ward->ward_name = $this->input->post('ward_name');
        $ward->doctor_incharge = $this->input->post('doctor_incharge');

        $ward->save();
        $db_error = $this->db->error();
//        echo '<tt><pre>' . var_export($db_error, TRUE) . '</pre></tt>';
        if ($db_error['code'] == 0) {
            $data['msg'] = '<p class="text-success">New ward created </p>';
        } else {
            $data['msg'] = '<p class="text-error"> Invalid or duplicate entry found </p>';
        }

        //get ward list with doctor
        $wardDetailsList = $ward->getWardDetailsList();
        $data['wardList'] = $wardDetailsList;


        $data['doctorList'] = $doctor->get();

        $this->load->view('ward/ward-manage-ward', $data);
    }

    public function getMyPurchaseItems() {
        $this->load->model(array(''));
        $data['msg'] = '';

        $this->load->view('', $data);
    }

    public function loadAmbulanaceRequest() {
        $this->load->model(array('Ward', 'VehicleRequest'));
        $data['msg'] = '';

        $id = $this->session->userdata('userbean')->id;
        //load my request 
        $vehicleRequest0 = new VehicleRequest();
        $myRequestVehicles = $vehicleRequest0->getMyRequest($id);

        $data['myRequestVehicles'] = $myRequestVehicles;
//        echo '<tt><pre>' . var_export($data['myRequestVehicles'], TRUE) . '</pre></tt>';

        $this->load->view('ward/ward-ambulance-request', $data);
    }

    public function ambulanaceRequest() {
        $this->load->model(array('Ward', 'VehicleRequest'));
        $data['msg'] = '';

        $vehicleRequest = new VehicleRequest();
        $id = $this->session->userdata('userbean')->id;

        $vehicleRequest->comment = $this->input->post('comment');
        $vehicleRequest->status_code = 'PENDING';
        $vehicleRequest->request_by = $id;
        $vehicleRequest->created_user = $id;
        $vehicleRequest->vehicle_id = 0;


        $vehicleRequest->save();
        $db_error = $this->db->error();
        echo '<tt><pre>' . var_export($db_error, TRUE) . '</pre></tt>';
        if ($db_error['code'] == 0) {
            $data['msg'] = '<p class="text-success">New request created</p>';
        } else {
            $data['msg'] = '<p class="text-error"> Invalid or duplicate entry found </p>';
        }


        $myRequestVehicles = $vehicleRequest->getMyRequest($id);

        $data['myRequestVehicles'] = $myRequestVehicles;


        $this->load->view('ward/ward-ambulance-request', $data);
    }

    //put your code here
    public function loadHome() {
        $this->load->view('ward/home');
    }

    public function loadWardManage() {
        $this->load->view('ward/ward-manage-details');
    }

    public function loadPurchaseItems() {
        $this->load->model(array('Ward', 'Purchase'));
        $data['msg'] = '';
        $purchase0 = new Purchase();

        //get my items
        $id = $this->session->userdata('userbean')->id;
        $myPurchase = $purchase0->getMyPurchase($id);
        $data['myPurchase'] = $myPurchase;

        $this->load->view('ward/ward-manage-purchase', $data);
    }

    public function purchaseItems() {
        $this->load->model(array('Purchase'));
        $data['msg'] = '';

        $userid = $this->session->userdata('userbean')->id;


        $purchase = new Purchase();
        $purchase->purchasing_item = $this->input->post('purchasing_item');
        $purchase->qty = $this->input->post('qty');
        $purchase->created_user = $userid;
        $purchase->request_by = $userid;
        $purchase->status_code = 'PENDING';


        $purchase->save();
        $db_error = $this->db->error();
        echo '<tt><pre>' . var_export($db_error, TRUE) . '</pre></tt>';
        if ($db_error['code'] == 0) {
            $data['msg'] = '<p class="text-success">New item requested successfuly </p>';
        } else {
            $data['msg'] = '<p class="text-error"> Invalid or duplicate entry found </p>';
        }

        $this->load->view('ward/ward-manage-purchase', $data);
    }

}
