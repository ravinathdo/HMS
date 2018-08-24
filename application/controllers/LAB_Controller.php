<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lab_Controller
 *
 * @author User
 */
class LAB_Controller extends CI_Controller {

    //put your code here
    public function loadHome() {
        $this->load->view('lab/home');
    }

    public function loadInventoryManage() {
        $this->load->model(array('Inventory'));
        $data['msg'] = '';
        $inventory = new Inventory();
        $getAll = $inventory->get(); //get all inventory
        $data['allInventory'] = $getAll;
        $this->load->view('lab/lab-inventory-manage', $data);
    }

    public function addInventoryItem() {
        $this->load->model(array('Inventory'));
        $data['msg'] = '';
        $inventory = new Inventory();

        $inventory->item_name = $this->input->post('item_name');
        $inventory->qty = $this->input->post('qty');
        $inventory->created_user = $this->session->userdata('userbean')->id;
        $inventory->save();

        $getAll = $inventory->get(); //get all inventory
        $data['msg'] = '<p class="text-success">Inventory Created successfuly</p>';

        $data['allInventory'] = $getAll;
        $this->load->view('lab/lab-inventory-manage', $data);
    }

    public function loadUpdateInventory($id) {
        $this->load->model(array('Inventory'));
        $data['msg'] = '';
        $inventory = new Inventory();

        $data['itemDetail'] = $inventory->getFromID($id);

        $this->load->view('lab/lab-inventory-update', $data);
    }

    public function updateInventory() {
        $this->load->model(array('Inventory'));
        $this->load->library('HmsUtil');
        $data['msg'] = '';
        $inventory = new Inventory();

        //collect the input 
        $id = $this->input->post('id');
        $item_name = $this->input->post('item_name');
        $qty = $this->input->post('qty');

        $hmsUtil = new HmsUtil();
        $currDate = $hmsUtil->getDateTime();

        $dataArray = array('item_name' => $item_name, 'qty' => $qty, 'updated_date' => $currDate);
        $inventory->update($dataArray, $id);

        $data['itemDetail'] = $inventory->getFromID($id);
        $getAll = $inventory->get(); //get all inventory
        $data['allInventory'] = $getAll;
        $data['msg'] = '<p class="text-success">Inventory Updated successfuly</p>';
        $this->load->view('lab/lab-inventory-manage', $data);
    }

    public function loadLabCenterManage() {
        $this->load->model(array('Center'));
        $center = new Center();
        $data['msg'] = '';
        $data['centerList'] = $center->get();
        $this->load->view('lab/lab-center-details', $data);
    }

    /**
     * Add centers 
     */
    public function setCenter() {
        //add center test
        echo 'xxxxxxxxxxxxxxxxxxx';
        $this->load->model(array('LabTest', 'Center'));
        //load center test details
        $center = new Center();

        $center->center_name = $this->input->post('center_name');
        $center->save();

        $db_error = $this->db->error();
        echo '<tt><pre>' . var_export($db_error, TRUE) . '</pre></tt>';
        if ($db_error['code'] == 0) {
            $data['msg'] = '<p class="text-success">New registration has been successful </p>';
        } else {
            $data['msg'] = '<p class="text-error"> Invalid or duplicate entry found </p>';
        }




        echo '<tt><pre>' . var_export($center, TRUE) . '</pre></tt>';
        $data['centerList'] = $center->get();

        $data['msg'] = '<p class="text-success">New Center created successfuly</p>';
        $this->load->view('lab/lab-center-details', $data);
    }

    public function addCenterTest($center_name) {
        //add center test
        $this->load->model(array('LabTest', 'Center'));
        //load center test details
        $labTest = new LabTest();
        $center = new Center();

        $labTest->center_name = $this->input->post('center_name');
        $labTest->save();
        $data['centerList'] = $center->get();
        $data['msg'] = '<p class="text-success">New Center created successfuly</p>';
        $this->load->view('lab/lab-center-test-details', $data);
    }

    public function loadItemRequest() {
        $this->load->view('lab/lab-item-request');
    }

    public function loadCostManagement() {
        $this->load->view('lab/lab-cost-maintain');
    }

    public function loadPatientList() {
        $this->load->view('lab/lab-list-patient');
    }

}
