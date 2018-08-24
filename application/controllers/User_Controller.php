<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_Controller extends CI_Controller {

    //put your code here sample
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
        $userbean = $this->session->userdata('userbean');
        // load according to user role
        if ($userbean->user_role == 'DOCTOR') {
            $this->load->view('doctor/user-profile', $data);
        } else if ($userbean->user_role == 'PATIENT') {
            $this->load->view('patient/user-profile', $data);
        } else {
            //hms users
            $this->load->view('user-profile', $data);
        }
    }

    public function changePassword() {
        $this->load->model(array('User'));
        $user = new User();
        
        $data['msg'] = '';
        $old_password = $this->input->post('old_password');
        $new_password = $this->input->post('new_password');
        $retype_password = $this->input->post('retype_password');


        //check the password is correct
        if (strlen($new_password) >= 6 && $new_password == $retype_password) {
            echo 'OKs';
        } else {
            $data['msg'] = '<p class="text-danger">Invalid password constrains</p>';
        }

        //check credentials are ok



        $userbean = $this->session->userdata('userbean');
        echo '<tt><pre>' . var_export($userbean, TRUE) . '</pre></tt>';
        // load according to user role
        if ($userbean->user_role == 'DOCTOR') {
            $this->load->view('doctor/user-profile', $data);
        } else if ($userbean->user_role == 'PATIENT') {
            $this->load->view('patient/user-profile', $data);
        } else {
            //hms users

            echo '---------';
            $post_data = array("nic" => $userbean->nic, "pword" => $old_password);
            echo '<tt><pre>' . var_export($post_data, TRUE) . '</pre></tt>';
            echo '---------';
            $login = $user->getAdminLogin($post_data);
            if ($login != null) {
                echo 'User Found ';
            } else {
                echo 'user not found';
            }

            $this->load->view('user-profile', $data);
        }
    }

    /**
     * Collect the profile update information and update
     */
    public function updateProfile() {
        $data['msg'] = '';
        $this->load->model(array('User'));
        $user = new User();

        $userbean = $this->session->userdata('userbean');

        $old_password = $this->input->post('old_password');
        $new_password = $this->input->post('new_password');
        $retype_password = $this->input->post('retype_password');

        //data array
        $formData = array('nic' => $userbean->nic, 'pword' => $old_password);
        $adminLogin = $user->getAdminLogin($formData);

        if ($adminLogin) {
            if (strlen($new_password) >= 6 && $new_password == $retype_password) {
                //update password
                $dataArray = array('pword'=> sha1($retype_password));
                $user->changePassword($dataArray, $userbean->id);
                 $data['msg'] = '<p class="text-success">Password Change Successfuly</p>';
            } else {
               $data['msg'] = '<p class="text-danger">invalid password constrains</p>';
            }
        } else {
           $data['msg'] = '<p class="text-danger">invalid password</p>';
        }
        //load data again
         $this->load->view('patient/user-profile', $data);
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
