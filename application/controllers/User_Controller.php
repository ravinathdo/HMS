<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_Controller extends CI_Controller {

    //put your code here
    public function logout() {
        $this->session->unset_userdata('userbean');
        $this->session->unset_userdata('logged_in');
//        $this->load->view('Welcome');
        $this->load->view('index');
    }
    
    
    
     public function logoutHMS() {
        $this->session->unset_userdata('userbean');
        $this->session->unset_userdata('logged_in');
//        $this->load->view('Welcome');
//        $this->load->view('Admin_Controller');
        redirect('/Admin_Controller/');
    }

    public function index() {
        $this->load->view('');
    }

    public function loadProfile() {
//        $this->load->model(array(''));
        $data['msg'] = '';

        // load according to user role
        $this->load->view('user-profile', $data);
    }

    /**
     * load home according to each HMS user
     * @param type $param 
     */
    public function loadHome() {
        $userbean = $this->session->userdata('userbean');
        switch ($userbean->user_role) {
            case 'ADMIN':
                $this->load->view('admin/home');
                break;
            case 'DOCTOR':
                $this->load->view('doctor/home');
                break;
            case 'OPD':
                $this->load->view('opd/home');
                break;
        }
    }

}
