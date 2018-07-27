<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Patient_Controller
 *
 * @author ravi
 */
class Patient_Controller extends CI_Controller {

    //put your code here
    public function loadPatientRegister() {
        $data['msg'] = '';
        $this->load->view('patient/patient-register', $data);
    }

    public function patientRegister() {
        $this->load->model(array('Patient'));
        $patient = new Patient();

        //collect the post data from the page
        $patient->getPostData();
        $patient->pword = sha1($patient->pword);
        $patient->save();
        $data['msg'] = '<p class="text-success">New registration has been successful, please login ,<br> Patient Reg No ' . $patient->id . ' </p>';
        $this->load->view('patient/patient-register', $data);
    }

    public function loadPatientLogin() {
        $data['msg'] = '';
        $this->load->view('patient/patient-login', $data);
    }

    public function patientLogin() {
        $this->load->model(array('User'));
        $user = new User();

        $post_data = $user->array_from_post(array('email', 'pword'));
        $login = $user->getPatientLogin($post_data);

        if ($login != null) {
            //login success
            $newdata = array(
                'userbean' => $login[0],
                'logged_in' => TRUE
            );
            $this->session->set_userdata($newdata);
            $this->load->view('patient/home');
            
        } else {
            $data['msg'] = '<p class="text-danger">Invalid username or password</p>';
            $this->load->view('patient/patient-login', $data);
        }
    }

    public function loadHome() {
        $this->load->view('patient/home');
    }
    public function index() {
        echo 'Index';
    }

}
