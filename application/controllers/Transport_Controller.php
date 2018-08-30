<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Transport_Controller
 *
 * @author User
 */
class Transport_Controller extends CI_Controller {

    public function rejectRequest($id) {
        $this->load->model(array('Vehicle', 'VehicleRequest'));
        $data['msg'] = '';
        $vehicleRequest = new VehicleRequest();
        $vehicle = new Vehicle();

        $updateData = array('status_code'=>'REJECT');
        $vehicleRequest->updateVehicle($updateData, $id);
        $db_error = $this->db->error();
//        echo '<tt><pre>' . var_export($db_error, TRUE) . '</pre></tt>';
        if ($db_error['code'] == 0) {
            $data['msg'] = '<p class="text-success">update successful </p>';
        } else {
            $data['msg'] = '<p class="text-error"> Invalid or duplicate entry found </p>';
        }
         $allVehicles = $vehicle->get();
        $data['vehicleAllList'] = $allVehicles;

        $vehicleFromStatus = $vehicleRequest->getVehicleFromStatus('PENDING');
        $data['pendingRequest'] = $vehicleFromStatus;
        $this->load->view('transport/transport-ambulance-pending-requet', $data);
    }

    public function approveRequest() {
        $this->load->model(array('Vehicle', 'VehicleRequest'));
        $data['msg'] = '';
        $vehicleRequest = new VehicleRequest();
        $vehicle = new Vehicle();

        $id = $this->input->post('req_id');
        //collect data
        $updateArray = array('status_code' => 'COMPLETE', 'vehicle_id' => $this->input->post('vehicle_id'));

        $vehicleRequest->updateVehicle($updateArray, $id);
        $db_error = $this->db->error();

//        echo '<tt><pre>' . var_export($db_error, TRUE) . '</pre></tt>';
        if ($db_error['code'] == 0) {
            $data['msg'] = '<p class="text-success">update successful </p>';
        } else {
            $data['msg'] = '<p class="text-error"> Invalid or duplicate entry found </p>';
        }

        $allVehicles = $vehicle->get();
        $data['vehicleAllList'] = $allVehicles;

        $vehicleFromStatus = $vehicleRequest->getVehicleFromStatus('PENDING');
        $data['pendingRequest'] = $vehicleFromStatus;


//        echo '<tt><pre>' . var_export($data['vehicleAllList'], TRUE) . '</pre></tt>';

        $this->load->view('transport/transport-ambulance-pending-requet', $data);
    }

    public function getPendingVehicleRequest() {
        $this->load->model(array('Vehicle', 'VehicleRequest'));
        $data['msg'] = '';
        $vehicleRequest = new VehicleRequest();
        $vehicle = new Vehicle();
        $allVehicles = $vehicle->get();

        $data['vehicleAllList'] = $allVehicles;

        $vehicleFromStatus = $vehicleRequest->getVehicleFromStatus('PENDING');
        $data['pendingRequest'] = $vehicleFromStatus;


//        echo '<tt><pre>' . var_export($data['vehicleAllList'], TRUE) . '</pre></tt>';

        $this->load->view('transport/transport-ambulance-pending-requet', $data);
    }

    //put your code here
    public function viewTravelHistory($vehicleID) {
        $data['msg'] = '';
        $this->load->model(array('Vehicle', 'VehicleRequest'));
        $vehicleReq = new VehicleRequest();
        $vehicle = new Vehicle();

        $data['vehicleReqList'] = $vehicleReq->getRequestHistory($vehicleID);
        $allVehicles = $vehicle->get();
        $data['vehicleAllList'] = $allVehicles;


        $this->load->view('transport/transport-ambulance-history', $data);
    }

    public function updateTravelStatus($req_id, $status_code) {
        echo 'updateTravelStatus';
        $data['msg'] = '';
        $this->load->model(array('VehicleRequest'));
        $vehicleReq = new VehicleRequest();

        //get the iput
        $updateArray = array('status_code' => $status_code);
        //passinto update 
        $vehicleReq->updateVehicle($updateArray, $req_id);

        $db_error = $this->db->error();
        echo '<tt><pre>' . var_export($db_error, TRUE) . '</pre></tt>';
        if ($db_error['code'] == 0) {
            $data['msg'] = '<p class="text-success">Update successful </p>';
        } else {
            $data['msg'] = '<p class="text-error"> Invalid or duplicate entry found </p>';
        }


        $data['vehicleReqList'] = $vehicleReq->getRequestHistory($req_id);
        $this->load->view('transport/transport-ambulance-requet', $data);
    }

    public function loadAmbulanceRequestList() {
        $this->load->model(array('VehicleRequest'));
        $data['msg'] = '';

        $vehicleReq = new VehicleRequest();
        $reqAllList = $vehicleReq->getAllRequest();
        $data['reqAllList'] = $reqAllList;
//        echo '<tt><pre>' . var_export($data['reqAllList'], TRUE) . '</pre></tt>';
        $this->load->view('transport/transport-ambulance-requet', $data);
    }

    public function loadHome() {
        $this->load->view('transport/home');
    }

    public function loadAmbulance() {
        $data['msg'] = '';
        $this->load->model(array('Vehicle'));
        $vehicle = new Vehicle();

        $data['vehicleList'] = $vehicle->get();

        $this->load->view('transport/transport-ambulance', $data);
    }

    public function setAmbulance() {
        $data['msg'] = '';
        $this->load->model(array('Vehicle'));
        $vehicle = new Vehicle();

        $vehicle->vehicle_number = $this->input->post('vehicle_number');
//        echo '<tt><pre>' . var_export($vehicle, TRUE) . '</pre></tt>';
        $vehicle->save();

        $db_error = $this->db->error();
//        echo '<tt><pre>' . var_export($db_error, TRUE) . '</pre></tt>';
        if ($db_error['code'] == 0) {
            $data['msg'] = '<p class="text-success">Vehicle Created Successful </p>';
        } else {
            $data['msg'] = '<p class="text-error"> Invalid or duplicate entry found </p>';
        }

        $data['vehicleList'] = $vehicle->get();
        $this->load->view('transport/transport-ambulance', $data);
    }

}
