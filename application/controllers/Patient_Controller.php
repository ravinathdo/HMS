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
require_once(APPPATH . 'libraries/DoctorPayment.php');


class Patient_Controller extends CI_Controller {

    public function loadAppointment() {
        //get my available appointment
        $this->load->model(array('Doctor'));
        $doctor = new Doctor();

        $data['doctorList'] = $doctor->get();
        $this->load->view('patient/patient-appointment', $data);
    }

    public function appointment() {
        $this->load->model(array('Doctor', 'DoctorAppointment'));
        $doctor = new Doctor();
        $doctorappointment = new DoctorAppointment();
        //get my available appointment

        $userbean = $this->session->userdata('userbean');
        $doctorappointment->doctor_id = $this->input->post('doctor_id');
        $doctorappointment->created_user = $userbean->id;

        //get the doctor details by ID
        $doctorDetail = $doctor->getDoctorDetails($doctorappointment->doctor_id);

        //create the object
        $doctorPayment = new DoctorPayment();
        $doctorPayment->doctor_id = $doctorDetail[0]->id;
        $doctorPayment->first_name = $doctorDetail[0]->first_name;
        $doctorPayment->last_name = $doctorDetail[0]->last_name;
        $doctorPayment->doc_fee = $doctorDetail[0]->doc_fee;
        $doctorPayment->hospital_fee = 1000;
        $doctorPayment->total_fee = $doctorPayment->doc_fee + $doctorPayment->hospital_fee;
        $doctorPayment->specialist = $doctorDetail[0]->specialist;
        $doctorPayment->appointment_date = $this->input->post('appointment_date');
        $this->session->set_userdata('doctorPayment', $doctorPayment);
        
        
        $data['doctorList'] = $doctor->get();
        $data['doctorPayment'] = $doctorPayment;
        $data['doctorappointment'] = $doctorappointment;



        //test session data
//        $game = new Game();
//        echo $game->id;
//        $this->session->set_userdata('game', $game);


        //adding to session further usage
        $newData = array('doctorPayment' => $doctorPayment, 'doctorappointment' => $doctorappointment);
        $this->session->set_userdata($newData);
        $_SESSION['doctorPayment'] = $doctorPayment;

        $this->load->view('patient/patient-appointment-payment', $data);
    }

    public function setAppointment() {
        $this->load->model(array('Doctor','DoctorAppointment'));

        
        $doctorPayment = $this->session->userdata('doctorPayment');
        echo '<tt><pre>' . var_export($doctorPayment, TRUE) . '</pre></tt>';
        $doctorappointment = $this->session->userdata('doctorappointment');
        echo '<tt><pre>' . var_export($doctorappointment, TRUE) . '</pre></tt>';
        $userbean = $this->session->userdata('userbean');


        //insert into hms_doctor_appointment
        $doctorAppointment = new DoctorAppointment();
        $doctorAppointment->
        
        $data['msg'] = '';
        $this->load->view('patient/patient-appointment-slip', $data);
    }

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
