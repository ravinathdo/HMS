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

    public function loadFeedback() {
        $this->load->model(array('Feedback'));
        $data['msg'] = '';
        $feedback = new Feedback();
        $userFeedback = $feedback->getUserFeedback($this->session->userdata('userbean')->id);
        $data['userFeedback'] = $userFeedback;
//        echo '<tt><pre>' . var_export($userFeedback, TRUE) . '</pre></tt>';
        $this->load->view('patient/patient-feedback', $data);
    }

    public function feedback() {
        $this->load->model(array('Feedback'));
        $data['msg'] = '';
        $feedb = $this->input->post('feedback');
        $feedback = new Feedback();

        $feedback->feedback = $feedb;
        $feedback->created_user = $this->session->userdata('userbean')->id;

        $feedback->save();
        $data['msg'] = '<p class="text-success">New Feedback created</p>';

        $userFeedback = $feedback->getUserFeedback($this->session->userdata('userbean')->id);
        $data['userFeedback'] = $userFeedback;

        $this->load->view('patient/patient-feedback', $data);
    }

    public function removeFeedback($feed_id) {
        $this->load->model(array('Feedback'));
        $data['msg'] = '';
        $feedback = new Feedback();
        $feedback->deleteFeedback($feed_id);
        
        $userFeedback = $feedback->getUserFeedback($this->session->userdata('userbean')->id);
        $data['userFeedback'] = $userFeedback;
//        echo '<tt><pre>' . var_export($userFeedback, TRUE) . '</pre></tt>';
        $this->load->view('patient/patient-feedback', $data);
    }

    public function loadViewLabTestCenters() {
        $this->load->model(array('LabTest', 'Center'));
        $data['msg'] = '';

        $labTest = new LabTest();
        $center = new Center();

        $centerList = $center->get();
        $newData = array('centerList' => $centerList);
        $this->session->set_userdata($newData);


        $labCenterDetails = $labTest->get();
        $data['labCenterDetails'] = $labCenterDetails;

        $this->load->view('patient/patient-lab-test', $data);
    }

    public function viewLabTestCenters() {
        $this->load->model(array('LabTest', 'Center'));
        $data['msg'] = '';
        $center = new Center();
        $labTest = new LabTest();

        $centerList = $center->get();
        $newData = array('centerList' => $centerList);
        $this->session->set_userdata($newData);

        $center_name = $this->input->post('center_name');
        $labCenterDetails = $labTest->getLabCenterDetails($center_name);

        $data['labCenterDetails'] = $labCenterDetails;
//        echo '<tt><pre>' . var_export($labCenterDetails, TRUE) . '</pre></tt>';
        $this->load->view('patient/patient-lab-test', $data);
    }

    public function loadSearchDoctors() {
        $this->load->model(array('Specialist'));
        $data['msg'] = '';

        //get specialize list
        $specialist = new Specialist();
        $specialistList = $specialist->get();

//        get the doctor list 
//        $doctor = new Doctor();
//        $docList = $doctor->get();
        $doctorList = $this->session->userdata('doctorList');
//        echo '<tt><pre>' . var_export($doctorList, TRUE) . '</pre></tt>';
        //add to session
        $newdata = array('specialistList' => $specialistList);
        $this->session->set_userdata($newdata);

        $this->load->view('patient/patient-search-doctors', $data);
    }

    /**
     * get specialized-doctor against to specialized id
     */
    public function getSpecialistDoctors() {
        $this->load->model(array('Doctor', 'Specialist'));
        $doctor = new Doctor();
        $specialist = new Specialist();

        $specialistList = $specialist->get();
        $specialist_id = $this->input->post('specialist_id');

        $data['msg'] = '';
//      get the doctor list 
        $docList = $doctor->getSpecializeDoctorsList($specialist_id);

//        echo '<tt><pre>' . var_export($docList, TRUE) . '</pre></tt>';
        //add to session
        $newdata = array('doctorList' => $docList, 'specialistList' => $specialistList);
        $this->session->set_userdata($newdata);
//        echo '<tt><pre>' . var_export($docList, TRUE) . '</pre></tt>';
        $this->load->view('patient/patient-search-doctors', $data);
    }

    public function getDoctorAvailability($doctor_id) {
        $this->load->model(array('DoctorAvailability', 'Specialist'));
        $doctorAvailability = new DoctorAvailability();
        $specialist = new Specialist();

        $docAvailabilityList = $doctorAvailability->getDocAvailability($doctor_id);
        $data['docAvailabilityList'] = $docAvailabilityList;

        $specialistList = $specialist->get();
        $newdata = array('specialistList' => $specialistList);
        $this->session->set_userdata($newdata);
//        echo '<tt><pre>' . var_export($docAvailabilityList, TRUE) . '</pre></tt>';
        $this->load->view('patient/patient-search-doctors', $data);
    }

    public function loadMyAppointment() {
        //session user
        $this->load->model(array('Patient'));
        $patient = new Patient();
        $userbean = $this->session->userdata('userbean');
        $patientAppointmentList = $patient->getPatientAppointmentList($userbean->id);
        $data['myAppointmentList'] = $patientAppointmentList;

//        echo '<tt><pre>' . var_export($patientAppointmentList, TRUE) . '</pre></tt>';
        $this->load->view('patient/patient-appointment-list', $data);
    }

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


//        echo '<tt><pre>' . var_export($doctorDetail, TRUE) . '</pre></tt>';
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

    public function rejectAppointment($appo_id) {
        echo 'x';
        echo $appo_id;
        echo 'x';
        $this->load->model(array('DoctorAppointment'));
        //collect data into array 
        $doctorAppointment = new DoctorAppointment();

        $newData = array('status_code' => 'REJECT');
        $doctorAppointment->rejectAppointment($newData, $appo_id);

        echo 'rejectAppointment';
//        redirect('Patient_Controller/loadMyAppointment');
    }

    public function setAppointment() {
        $this->load->model(array('Doctor', 'DoctorAppointment'));

        $doctorPayment = $this->session->userdata('doctorPayment');
//        echo '<tt><pre>' . var_export($doctorPayment, TRUE) . '</pre></tt>';
        $doctorappointment = $this->session->userdata('doctorappointment');
//        echo '<tt><pre>' . var_export($doctorappointment, TRUE) . '</pre></tt>';
        $userbean = $this->session->userdata('userbean');

        //insert into hms_doctor_appointment
        $doctorAppointment = new DoctorAppointment();
        $doctorAppointment->doctor_id = $doctorPayment->doctor_id;
        $doctorAppointment->patient_id = $userbean->id;
        $doctorAppointment->appointment_date = $doctorPayment->appointment_date;
        $doctorAppointment->status_code = "OPEN";
        $doctorAppointment->doctor_fee = $doctorPayment->doc_fee;
        $doctorAppointment->hospital_fee = $doctorPayment->hospital_fee;
        $doctorAppointment->fee = $doctorPayment->total_fee;
        $doctorAppointment->created_user = $userbean->id;


        $doctorAppointment->save();


        date_default_timezone_set("Asia/Colombo");
        $dt = date("Y-m-d h:i:sa");


        $data['appointmentNo'] = $doctorAppointment->id;
        $data['appointmentDate'] = $dt;
        $data['msg'] = '<p class="text-success">New Appointment has been placed</p>';
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

        //---------form validation
        $this->load->library('form_validation');
        $this->form_validation->set_message('password_validation', 'Invlaid password length');
        $this->form_validation->set_rules(array(
            array(
                'field' => 'first_name',
                'label' => 'firstname',
                'rules' => 'trim|required',
            ), array(
                'field' => 'pword',
                'label' => 'pword',
                'rules' => 'trim|required|callback_password_validation', //custome call back function
            )
        ));
//        $this->form_validation->set_rules('repword', 'Confirm Password', 'required|matches[pword]');
//        echo '<tt><pre>' . var_export($patient, TRUE) . '</pre></tt>';

        $this->form_validation->set_error_delimiters('<p style="color:red">', '</p>');
        if (!$this->form_validation->run()) {
            $data['msg'] = '';
            $this->load->view('patient/patient-register', $data);
        } else {
//            unset($patient['repword']);
            $patient->pword = sha1($patient->pword);
            $patient->save();
            $db_error = $this->db->error();
//            echo '<tt><pre>' . var_export($db_error, TRUE) . '</pre></tt>';
            if (!empty($db_error)) {
                $data['msg'] = '<p class="text-error"> Invalid or duplicate entry found </p>';
            } else {
                $data['msg'] = '<p class="text-success">New registration has been successful, please login ,<br> Patient Reg No ' . $patient->id . ' </p>';
            }
            $this->load->view('patient/patient-register', $data);
        }
    }

    public function password_validation($input) {
        if (strlen($input) >= 6) {
            return true;
        } else {
            return false;
        }
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
            date_default_timezone_set('Asia/Colombo');
            $today = date("Y-m-d", time());

            $newdata = array(
                'userbean' => $login[0],
                'logged_in' => TRUE,
                'today' => $today
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

    public function loadOPDAppointment() {
        $this->load->model(array('Doctor'));
        $data['msg'] = '';
        $data['opd_fee'] = 850;

        $doctor = new Doctor();
        $categoryDoctorList = $doctor->getCategoryDoctorList('OPD');
        //get OPD doctor list
        $newdata = array('categoryDoctorList' => $categoryDoctorList);
        $this->session->set_userdata($newdata);
        $this->load->view('patient/patient-opd-appointment', $data);
    }

    /**
     * create OPD appointment
     */
    public function OPDAppointment() {
        $this->load->model(array('OPDAppointment'));

        $appointment_date = $this->input->post('appointment_date');
        $opd_fee = $this->input->post('opd_fee');
        $doctor_id = $this->input->post('doctor_id');

        $opdAppointment = new OPDAppointment();
        $opdAppointment->appointment_date = $appointment_date;
        $opdAppointment->patient_id = $this->session->userdata('userbean')->id;
        $opdAppointment->created_user = $this->session->userdata('userbean')->id;
        $opdAppointment->status_code = "OPEN";
        $opdAppointment->fee = $opd_fee;
        $opdAppointment->doctor_id = $doctor_id;


        $opdAppointment->save();

        $data['msg'] = '<p class="text-success">OPD Appointment created successfully, No:' . $opdAppointment->id . '  </p>';
        $data['opd_fee'] = $opd_fee;
        $this->load->view('patient/patient-opd-appointment', $data);
    }

    public function getOPDPAtientAppointmentList() {
        $this->load->model(array('OPDAppointment'));
        $oPDAppointment0 = new OPDAppointment();
        $userbean = $this->session->userdata('userbean');
        $data['patientAppointmentList'] = $oPDAppointment0->getOPDPatientAppointmentList($userbean->id);
        $this->load->view('patient/patient-opd-appointment-list', $data);
    }

    public function index() {
        echo 'Index';
    }

}
