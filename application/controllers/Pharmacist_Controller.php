<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pharmacist_Controller
 *
 * @author User
 */
class Pharmacist_Controller extends CI_Controller{
    //put your code here
        
    public function loadHome() {
        $this->load->view('pharmacist/home');
    }
    
    public function loadManageDrug() {
        $this->load->view('pharmacist/pharmacist-drug');
    }
    public function loadViewStock() {
        $this->load->view('pharmacist/pharmacist-stock');
    }
}
