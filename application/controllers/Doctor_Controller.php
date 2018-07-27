<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Doctor_Controller
 *
 * @author ravi
 */
class Doctor_Controller extends CI_Controller {

    //put your code here
    public function loadDoctorLogin() {
        $data['msg']='';
        $this->load->view('doctor/doctor-login',$data);
    }
    public function doctorLogin() {
        
        $data['msg']='';
        $this->load->view('doctor/doctor-login',$data);
    }

}
