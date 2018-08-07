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
    //put your code here
    
    
    public function loadHome() {
        $this->load->view('ward/home');
    }
    
    public function loadWardManage() {
        $this->load->view('ward/ward-manage-details');
    }
}
