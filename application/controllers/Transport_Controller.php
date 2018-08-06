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

    //put your code here


    public function loadAmbulanceRequestList() {
//        $this->load->model(array(''));
        $data['msg'] = '';
        $this->load->view('transport/transport-ambulance-requet', $data);
    }

    public function loadHome() {
        $this->load->view('transport/home');
    }

    public function loadAmbulance() {
        $data['msg'] = '';
        $this->load->view('transport/transport-ambulance',$data);
    }

}
