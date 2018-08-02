<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

    //put your code here
    public function index() {
        $data['msg'] = '';
        $this->load->view('admin/admin-login', $data);
    }

    public function adminLogin() {
        $this->load->model(array('User'));
        $user = new User();

        $post_data = $user->array_from_post(array('nic', 'pword'));
        $login = $user->getAdminLogin($post_data);

        if ($login != null) {
            //login success
            $newdata = array(
                'userbean' => $login[0],
                'logged_in' => TRUE
            );

//            echo '<tt><pre>' . var_export($newdata, TRUE) . '</pre></tt>';
            $this->session->set_userdata($newdata);
            switch ($newdata['userbean']->user_role) {
                case 'ADMIN':
                    $this->load->view('admin/home');
                    break;
                case 'OPD':
                    $this->load->view('opd/home');
                    break;
            }
            //redirecting to ADMIN/OPD
        } else {
            $data['msg'] = '<p class="text-danger">Invalid username or password</p>';
            $this->load->view('admin/admin-login', $data);
        }
    }

    public function loadDoctorRegistration() {
        $this->load->model(array('Specialist', 'Doctor'));
        $specialist = new Specialist();
        $doctor = new Doctor();

        $specialist_list = $specialist->get();
        $this->session->set_userdata(array('specialist_list' => $specialist_list));

        $doctor_list = $doctor->get();

        $data['doctor_list'] = $doctor_list;
        $data['msg'] = '';
        $this->load->view('admin/admin-doctor-registration', $data);
    }

    public function DoctorRegistration() {
        $this->load->model(array('Doctor'));
        //get session data 

        $doctor = new Doctor();
        $doctor->getPostData();
        $doctor->created_user = $this->session->userdata('userbean')->id;

        //echo '<tt><pre>' . var_export($doctor, TRUE) . '</pre></tt>';
        $doctor->save();

        $doctor_list = $doctor->get();

        $data['doctor_list'] = $doctor_list;
        $data['msg'] = '<p class="text-success">New Doctor Registered Successfuly</p>';
        $this->load->view('admin/admin-doctor-registration', $data);
    }

}
