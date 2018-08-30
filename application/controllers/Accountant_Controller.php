<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Accountant_Controller
 *
 * @author User
 */
class Accountant_Controller extends CI_Controller {

    public function loadHome() {
        $this->load->view('accountant/home');
    }

    public function loadCostMaintain() {
        $this->load->model(array('Cost'));
        $cost = new Cost();
        $data['msg'] = '';
        $data['costList'] = $cost->get();
        $this->load->view('accountant/acountant-cost-maintain', $data);
    }

    public function costMaintain() {
        $this->load->model(array('Cost'));
        $cost = new Cost();

        $cost->getPostData();
        $cost->created_user = $this->session->userdata('userbean')->id;

        $cost->save();
        $data['msg'] = '<p class="text-success">Record created successfully</p>';
        
        $data['costList'] = $cost->get();
        $this->load->view('accountant/acountant-cost-maintain', $data);
    }

    public function loaddoctorSalary() {
        $this->load->model(array('Doctor'));

        $data['msg'] = '';
        $doctor = new Doctor();
        $data['doctorList'] = $doctor->get();
        $data['doctorEarningList'] = false;


        $this->load->view('accountant/acountant-doctor-salary', $data);
    }

    public function getDoctorPaymentInfo() {
        $this->load->model(array('Doctor', 'DoctorAppointment'));

        $doctor_id = $this->input->post('doctor_id');
        $appoint_month = $this->input->post('appoint_month');

        $data['msg'] = '';
        $doctorAppointment = new DoctorAppointment();
        $data['doctorEarningList'] = $doctorAppointment->getDoctorEarnings($doctor_id, $appoint_month);

//        echo '<tt><pre>' . var_export($data['doctorEarningList'], TRUE) . '</pre></tt>';


        $doctor = new Doctor();
        $data['doctorList'] = $doctor->get();


        $this->load->view('accountant/acountant-doctor-salary', $data);
    }

    public function getEmployeeSalaryList() {
        $data['msg'] = '';
        $this->load->model(array('User', 'Salary'));
        $user0 = new User();
        $salary = new Salary();

        $emp_id = $this->input->post('emplyee_id');
        $data['empSalaryList'] = $salary->getSalaryListOnEmployee($emp_id);

        $data['empList'] = $user0->get(); //list of the staff users
        $this->load->view('accountant/acountant-employee-salary', $data);
    }

    public function setSalary() {
        $usercreated = $this->session->userdata('userbean')->id;

        $this->load->model(array('Accountant', 'Salary', 'User'));
        $salary = new Salary();
        $salary->getPostData();

        $salary->created_user = $usercreated;

//      echo '<tt><pre>' . var_export($salary, TRUE) . '</pre></tt>';
        $salary->save();

        $db_error = $this->db->error();
//        echo '<tt><pre>' . var_export($db_error, TRUE) . '</pre></tt>';
        if ($db_error['code'] == 0) {
            $data['msg'] = '<p class="text-success">Employee Salary Successfuly Credited</p>';
        } else {
            $data['msg'] = '<p class="text-error"> Invalid or duplicate entry found </p>';
        }

        $user = new User();
        $data['empList'] = $user->get(); //list of the staff users

        $this->load->view('accountant/acountant-employee-salary', $data);
    }

    public function loadEmployeeSalary() {
        $this->load->model(array('User'));
        $data['msg'] = '';
        $user = new User();
        $data['empList'] = $user->get(); //list of the staff users
        $this->load->view('accountant/acountant-employee-salary', $data);
    }

    //put your code here
    public function loadPurchasingItem() {
        $this->load->model(array('Accountant', 'Purchase'));
        $data['msg'] = '';
        $purchase = new Purchase();
        $data['approvedList'] = $purchase->getPurchaseList('ACCEPT');
        $data['allList'] = $purchase->get();
        
         $data['pendingList'] = $purchase->getPurchaseList('PENDING');
        $this->load->view('accountant/acountant-item-purchase', $data);
    }

    /**
     * set amount and change the status
     */
    public function purchaseItem() {
        $this->load->model(array('Accountant', 'Purchase'));
        $amount = $this->input->post('amount');
        $id = $this->input->post('id');
        $purchase0 = new Purchase();

        $dataArray = array('amount' => $this->input->post('amount'), 'status_code' => 'COMPLETE');

//        echo '<tt><pre>' . var_export($dataArray, TRUE) . '</pre></tt>';


        $purchase0->updatePurchase($dataArray, $id);
        $data['msg'] = '<p class="text-success">Item updated successfuly</p>';
        //reload
        $purchase = new Purchase();
        $data['approvedList'] = $purchase->getPurchaseList('ACCEPT');
        $data['allList'] = $purchase->get();
        $this->load->view('accountant/acountant-item-purchase', $data);
    }

}
