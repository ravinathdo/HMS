<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_Controller extends CI_Controller {

    //put your code here
    public function logout() {
        $this->session->unset_userdata('userbean');
        $this->session->unset_userdata('logged_in');
        $this->load->view('Welcome');
    }

    /**
     * 
     * @param type $param 
     */
    public function loadHome() {
        
    }
    
}
