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
        $this->load->view('lab/lab-inventory-manage');
    }
    public function loadLabCenterManage() {
        $this->load->view('lab/lab-center-details');
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
