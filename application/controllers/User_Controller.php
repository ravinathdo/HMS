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
            //-------------------
            $this->load->model(array('User'));
            $user = new User();

            $data['msg'] = '';
            $old_password = $this->input->post('old_password');
            $new_password = $this->input->post('new_password');
            $retype_password = $this->input->post('retype_password');

            $post_data = array('nic' => $this->session->userdata('userbean')->nic, 'pword' => $old_password);
            $login = $user->getAdminLogin($post_data);

            if (strlen($new_password) >= 6 && ($new_password == $retype_password)) {
                if ($login != null) {
                    //login success
                    //update the password
                    $updateData = array('pword' => sha1($new_password));
                    $user->updateUser($updateData, $this->session->userdata('userbean')->id);

                    $data['msg'] = '<p class="text-success">Password Reset successful</p>';
                } else {
                    $data['msg'] = '<p class="text-danger">Invalid password</p>';
                }
            } else {
                $data['msg'] = '<p class="text-danger">Invalid password constrains</p>';
            }

            //redirect to profile 
            $this->load->view('user-profile', $data);
            //-------------------
        }
    

    public function updateProfileInfo() {
        $this->load->model(array('User'));
        $data['msg'] = '';
        $userob = new User();

        $updateArray = array('first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'telephone' => $this->input->post('telephone'),
            'email' => $this->input->post('email'));

        //collect iputs 
        //update input 
        $userob->updateUser($updateArray, $this->session->userdata('userbean')->id);
        $db_error = $this->db->error();
//        echo '<tt><pre>' . var_export($db_error, TRUE) . '</pre></tt>';

        if ($db_error['code'] == 0) {
            $data['msg'] = '<p class="text-success">Profile updated successfuly</p>';
//            echo 'session data update ';

            $this->session->userdata('userbean')->email = $this->input->post('email');
            $this->session->userdata('userbean')->telephone = $this->input->post('telephone');
            $this->session->userdata('userbean')->first_name = $this->input->post('first_name');
            $this->session->userdata('userbean')->last_name = $this->input->post('last_name');
        } else {
            $data['msg'] = '<p class="text-error"> Invalid or duplicate entry found </p>';
        }

        //reload data from db
//        echo 'doctor->updateProfile';
        $this->load->view('user-profile', $data);
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
                $dataArray = array('pword' => sha1($retype_password));
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
