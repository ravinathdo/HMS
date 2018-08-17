<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

    //put your code here
    public function index() {
        $data['msg'] = '';
        $this->load->view('admin/admin-login', $data);
    }

    public function updateProfile() {
        //get the input data
        $this->load->model(array('Doctor'));
        $data['msg'] = '';
        $doctor0 = new Doctor();

        $doctor_id = $this->input->post('id');
        $status_code = $this->input->post('status_code');
        $doc_fee = $this->input->post('doc_fee');

        //update ready
        $updateArray = array('status_code' => $status_code, 'doc_fee' => $doc_fee);
//        echo '===============';
//        echo '<tt><pre>' . var_export($updateArray, TRUE) . '</pre></tt>';
//        echo '===============';
        $doctor0->updateDoctorStatus($updateArray, $doctor_id);

        $data['docDetails'] = $doctor0->getDoctorDetails($doctor_id);

        $this->load->view('admin/admin-doctor-update', $data);
    }

    /**
     * All user login for HMS staff
     */
    public function adminLogin() {
        $this->load->model(array('User'));
        $user = new User();

        $post_data = $user->array_from_post(array('nic', 'pword'));
        $login = $user->getAdminLogin($post_data);

//        echo '<tt><pre>' . var_export($login, TRUE) . '</pre></tt>';

        date_default_timezone_set('Asia/Colombo');
        $today = date("YYYY-mm-dd", time());

        if ($login != null) {
            //login success
            $newdata = array(
                'userbean' => $login[0],
                'logged_in' => TRUE,
                'today' => $today
            );


            $this->session->set_userdata($newdata);
            switch ($newdata['userbean']->user_role) {
                case 'ADMIN':
                    $this->load->view('admin/home');
                    break;
                case 'TRANSPORT':
                    $this->load->view('transport/home');
                    break;
                case 'OPD':
                    $this->load->view('opd/home');
                    break;
                case 'PHARMACIST':
                    $this->load->view('pharmacist/home');
                    break;
                case 'ACCOUNTANT':
                    $this->load->view('accountant/home');
                    break;
                case 'LAB':
                    $this->load->view('lab/home');
                    break;
                case 'WARD':
                    $this->load->view('ward/home');
                    break;
            }
            //redirecting to ADMIN/OPD
        } else {
            $data['msg'] = '<p class="text-danger">Invalid username or password</p>';
            $this->load->view('admin/admin-login', $data);
        }
    }

    public function loadHome() {
        $this->load->view('admin/home');
    }

    public function restDoctorPassword() {
        $this->load->model(array('Doctor'));
        $doctor1 = new Doctor();
        $data['msg'] = '';
//        echo '===============';
//        echo '<tt><pre>' . var_export($updateArray, TRUE) . '</pre></tt>';
//        echo '===============';
        $doctor_id = $this->input->post('doctor_id');
        $doctor_nic = $this->input->post('doctor_nic');
//        echo $doctor_nic;
        $sha = sha1($doctor_nic);
        
        $updateArray = array('status_code' => 'ACTIVE', 'pword' => $sha);
        $doctor1->resetPassword($updateArray, $doctor_id);

        //reload doctor
        $data['docDetails'] = $doctor1->getDoctorDetails($doctor_id);
//        echo '<tt><pre>' . var_export($data['docDetails'], TRUE) . '</pre></tt>';
        $data['msg'] = '<p class="text-success">Password reseted successfuly</p>';

        $this->load->view('admin/admin-doctor-update', $data);
    }

    public function loadDoctorUpdate($doctor_id) {
        $this->load->model(array('Doctor'));
        $data['msg'] = '';
        $doctor0 = new Doctor();

        $data['docDetails'] = $doctor0->getDoctorDetails($doctor_id);

        $this->load->view('admin/admin-doctor-update', $data);
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
        echo '<tt><pre>' . var_export($doctor, TRUE) . '</pre></tt>';


        $doctor->created_user = $this->session->userdata('userbean')->id;

        $save = $doctor->save();
        $db_error = $this->db->error();
        if (!empty($db_error)) {
            $data['msg'] = '<p class="text-error"> Invalid or duplicate entry found </p>';
        } else {
            $data['msg'] = '<p class="text-success">New registration has been successful, please login ,<br> Patient Reg No ' . $patient->id . ' </p>';
        }

        $doctor_list = $doctor->get();

        $data['doctor_list'] = $doctor_list;
        $data['msg'] = '<p class="text-success">New Doctor Registered Successfuly</p>';
        $this->load->view('admin/admin-doctor-registration', $data);
    }

    public function loadUserRegistration() {
        $this->load->model(array('User'));
        $user = new User();
        $data['msg'] = '';

        $data['userList'] = $user->get();
        $this->load->view('admin/admin-user-registration', $data);
    }

    public function userRegistration() {
        $this->load->model(array('User'));
        $user = new User();
        $data['msg'] = '';

        //collect the user input
        $user->getPostData();
        $user->created_user = $this->session->userdata('userbean')->id;
        $user->save();

        $db_error = $this->db->error();
//        echo '<tt><pre>' . var_export($db_error, TRUE) . '</pre></tt>';
        if ($db_error['code'] == 0) {
            $data['msg'] = '<p class="text-success">New registration has been successful </p>';
        } else {
            $data['msg'] = '<p class="text-error"> Invalid or duplicate entry found </p>';
        }

        $data['userList'] = $user->get();
        $this->load->view('admin/admin-user-registration', $data);
    }

    public function loadItemPurchesing() {
//        $this->load->model(array(''));
        $data['msg'] = '';
        $this->load->model(array('Purchase'));
        $data['msg'] = '';

        $purchase = new Purchase();
        $data['purchasePendingList'] = $purchase->getPendingRequest();

//        $this->load->view('admin/admin-purchase-list', $data);

        $this->load->view('admin/admin-item-purchesing', $data);
    }

    public function changeItemPurcheseStatus($status, $id) {
        $data['msg'] = '';
        $this->load->model(array('Purchase'));
        $purchase = new Purchase();

        //change status
        echo $status;
        echo $id;

        $setStatusChange = $purchase->setStatusChange(array('status_code' => $status), $id);
        $db_error = $this->db->error();
        echo '<tt><pre>' . var_export($db_error, TRUE) . '</pre></tt>';
        if ($db_error['code'] == 0) {
            $data['msg'] = '<p class="text-success">Record updated successfully </p>';
        } else {
            $data['msg'] = '<p class="text-error"> Invalid or duplicate entry found </p>';
        }

        $data['purchasePendingList'] = $purchase->getPendingRequest($setStatusChange, $id);
        $this->load->view('admin/admin-item-purchesing', $data);
    }

    public function itemPurcheseHistory() {
        $this->load->model(array('Purchase'));
        $purchase = new Purchase();
        $data['msg'] = '';

        $get = $purchase->getItemHistory();
        $data['itemHistory'] = $get;

        $this->load->view('admin/admin-purchase-item-list', $data);
    }

    public function loadPatientRegistration() {
        $this->load->model(array('Patient'));
        $data['msg'] = '';
        $patient0 = new Patient();

        $data['patientList'] = $patient0->get();
        $this->load->view('admin/admin-patient-registration', $data);
    }

    public function patientRegistration() {
        $this->load->model(array('Patient'));
        $data['msg'] = '';
        $patient0 = new Patient();

        //collect input
        $patient0->getPostData();

        $patient0->pword = sha1($this->input->post('email'));
//        echo '<tt><pre>' . var_export($patient0, TRUE) . '</pre></tt>';
        $patient0->save();

        $db_error = $this->db->error();
        if ($db_error['code'] == 0) {
            $data['msg'] = '<p class="text-success"> New registration has been successful </p>';
        } else {
            $data['msg'] = '<p class="text-error"> Invalid or duplicate entry found </p>';
        }
        $data['patientList'] = $patient0->get();
        $this->load->view('admin/admin-patient-registration', $data);
    }

    public function loadPatientList() {
//        $this->load->model(array(''));
        $data['msg'] = '';
        $this->load->view('admin/admin-patient-list', $data);
    }

}
