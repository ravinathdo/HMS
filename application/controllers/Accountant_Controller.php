<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Accountant_Controller
 *
 * @author User
 */
class Accountant_Controller extends CI_Controller {
        
    public function loadHome() {
        $this->load->view('accountant/home');
    }
     //put your code here
    public function loadPurchasingItem() {
//        $this->load->model(array(''));
        $this->load->view('accountant/acountant-item-purchase');
    }
    public function loadEmployeeSalary() {
//        $this->load->model(array(''));
        $this->load->view('accountant/acountant-employee-salary');
    }
    public function loaddoctorSalary() {
//        $this->load->model(array(''));
        $this->load->view('accountant/acountant-doctor-salary.php');
    }
    public function loadCostMaintain() {
//        $this->load->model(array(''));
        $this->load->view('accountant/acountant-cost-maintain.php');
    }

    
    
}
