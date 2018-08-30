<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Doctor_Controller
 *
 * @author ravi
 */
class Doctor_Controller extends CI_Controller {

    public function changePassword() {

        $this->load->model(array('User', 'Doctor'));
        $user = new User();
        $doctors = new Doctor();

        $data['msg'] = '';
        $old_password = $this->input->post('old_password');
        $new_password = $this->input->post('new_password');
        $retype_password = $this->input->post('retype_password');

        $post_data = array('nic' => $this->session->userdata('userbean')->nic, 'pword' => $old_password);
        $login = $user->getDoctorLogin($post_data);


        //check the password is correct
//        echo $new_password;
//        echo '<br>';
//        echo $retype_password;

        if (strlen($new_password) >= 6 && ($new_password == $retype_password)) {
            if ($login != null) {
                //login success
                //update the password
                $updateData = array('pword' => sha1($new_password));
                $doctors->updateDoctor($updateData, $this->session->userdata('userbean')->id);

                $data['msg'] = '<p class="text-success">Password Reset successful</p>';
            } else {
                $data['msg'] = '<p class="text-danger">Invalid password</p>';
            }
        } else {
            $data['msg'] = '<p class="text-danger">Invalid password constrains</p>';
        }





        //redirect to profile 
        $this->load->view('doctor/user-profile', $data);
    }

    public function updateProfile() {
        $this->load->model(array('Doctor'));
        $data['msg'] = '';
        $doctor = new Doctor();

        $updateArray = array('email' => $this->input->post('email'),
            'telephone' => $this->input->post('telephone'),
            'degree' => $this->input->post('degree'));


        //collect iputs 
        //update input 
        $doctor->updateDoctor($updateArray, $this->session->userdata('userbean')->id);
        $db_error = $this->db->error();
//        echo '<tt><pre>' . var_export($db_error, TRUE) . '</pre></tt>';

        if ($db_error['code'] == 0) {
            $data['msg'] = '<p class="text-success">Profile updated successfuly</p>';
            //session data update 
            $this->session->userdata('userbean')->email = $this->input->post('email');
            $this->session->userdata('userbean')->telephone = $this->input->post('telephone');
            $this->session->userdata('userbean')->degree = $this->input->post('degree');
        } else {
            $data['msg'] = '<p class="text-error"> Invalid or duplicate entry found </p>';
        }

        //reload data from db
//        echo 'doctor->updateProfile';
        $this->load->view('doctor/user-profile', $data);
    }

    public function loadPatientList() {
        $this->load->model(array('Patient'));
        $patient = new Patient();
        $data['msg'] = '';
        $patientList = $patient->get();
        $data['patientList'] = $patientList;

        $this->load->view('doctor/doctor-patient-details', $data);
    }

    public function loadAdmitPatient($ward_id) {
        $this->load->model(array('Patient', 'WardPatient'));
        $patient = new Patient();
        $wardPatient = new WardPatient();

        $data['ward_id'] = $ward_id;
        $data['PatientList'] = $patient->get();

        //load patient list
        $doctor_id = $this->session->userdata('userbean')->id;
        $doctorWardPatient = $wardPatient->getDoctorWardPatient($doctor_id);
        $data['doctorWardPatient'] = $doctorWardPatient;

        $this->load->view('doctor/doctor-patient-admit', $data);
    }

    public function admitPatient() {
        $this->load->model(array('Ward', 'Patient', 'WardPatient'));
        $ward = new Ward();
        $doctor_id = $this->session->userdata('userbean')->id;

        $wardPatient0 = new WardPatient();

        $wardPatient0->ward_id = $this->input->post('ward_id');
        $wardPatient0->patient_id = $this->input->post('patient_id');
        $wardPatient0->comment = $this->input->post('comment');
        $wardPatient0->status_code = 'ADMIT';
        $wardPatient0->created_user = $doctor_id;


        $wardPatient0->save();
        $db_error = $this->db->error();
//        echo '<tt><pre>' . var_export($db_error, TRUE) . '</pre></tt>';
        if (!empty($db_error)) {
            if ($db_error['code'] == 0) {
                $data['msg'] = '<p class="text-success">Patient admit has been success</p>';
            } else {
                $data['msg'] = '<p class="text-error"> Invalid or duplicate entry found </p>';
            }
        }

//        echo '<tt><pre>' . var_export($wardPatient0, TRUE) . '</pre></tt>';

        $wardList = $ward->getDoctorWards($doctor_id);
        $data['wardList'] = $wardList;
        $this->load->view('doctor/doctor-ward', $data);
    }

    public function loadWard() {
        $this->load->model(array('Ward'));

        $doctor_id = $this->session->userdata('userbean')->id;
        $data['msg'] = '';
        $ward = new Ward();
        $wardList = $ward->getDoctorWards($doctor_id);
        $data['wardList'] = $wardList;
        $this->load->view('doctor/doctor-ward', $data);
    }

    public function loadDrugDetails() {
        $this->load->model(array('Drug'));
        $drug = new Drug();
        $drugList = $drug->get();
        $data['drugList'] = $drugList;
        $this->load->view('doctor/doctor-drug', $data);
    }

    //put your code here
    public function loadDoctorLogin() {
        $data['msg'] = '';
        $this->load->view('doctor/doctor-login', $data);
    }

    public function doctorLogin() {

        $this->load->model(array('User'));
        $user = new User();

        $post_data = $user->array_from_post(array('nic', 'pword'));
//        echo '<tt><pre>' . var_export($post_data, TRUE) . '</pre></tt>';        
        $login = $user->getDoctorLogin($post_data);

        if ($login != null) {
            //login success
            $newdata = array(
                'userbean' => $login[0],
                'logged_in' => TRUE
            );
            $this->session->set_userdata($newdata);
            $this->load->view('doctor/home');
        } else {
            $data['msg'] = '<p class="text-danger">Invalid username or password</p>';
            $this->load->view('doctor/doctor-login', $data);
        }
    }

    public function loadAvailability() {

        $this->load->model(array('DoctorAvailability'));
        $doctor_availability = new DoctorAvailability();

//Our YYYY-MM-DD date string.
        $date = "2018-07-28";
//Convert the date string into a unix timestamp.
        $unixTimestamp = strtotime($date);
//Get the day of the week using PHP's date function.
        $dayOfWeek = date("l", $unixTimestamp);
//Print out the day that our date fell on.
//        echo $date . ' fell on a ' . $dayOfWeek;
        //get availabiilty for the  doctor
        $userbean = $this->session->userdata('userbean');
        $docAvilabilityList = $doctor_availability->getDocAvailability($userbean->id);

        $data = array('msg' => '', 'docAvilabilityList' => $docAvilabilityList);
        $this->load->view('doctor/doctor-availability', $data);
    }

    public function availability() {
        $this->load->model(array('DoctorAvailability'));
        $doctor_availability = new DoctorAvailability();

        //sesion user id
        $userbean = $this->session->userdata('userbean');

        $doctor_availability->getPostData();
        $doctor_availability->doctor_id = $userbean->id;


        $result = $doctor_availability->checkDocAvailability($userbean->id, $doctor_availability->day_available);
        try {
            if (!$result) {
                $doctor_availability->save();
                $data['msg'] = '<p class="text-success">New Availability created successfuly</p>';
            } else {
                $data['msg'] = '<p class="text-danger">Availability already available</p>';
            }
        } catch (Exception $e) {
            //alert the user.
            echo 'Error';
        }

        $docAvilabilityList = $doctor_availability->getDocAvailability($userbean->id);
        $data['docAvilabilityList'] = $docAvilabilityList;
        $this->load->view('doctor/doctor-availability', $data);
    }

    /**
     * get the details of the appointment 
     * @param type $param
     */
    public function getAppointmentDetail($appo_id,$patient_id) {
        //echo 'Appointment ID:'.$appo_id;
        $this->load->model(array('DoctorAppointment', 'Patient'));
        $doctorAppointment = new DoctorAppointment();
        $patient = new Patient();
        $data['appointmentDetail'] = $doctorAppointment->getAppointmentDetails($appo_id)[0];
        //echo '<tt><pre>' . var_export($data['appointmentDetail'], TRUE) . '</pre></tt>';
        //get patient history
        $patientMedicalHistory = $patient->getPatientMedicalHistory($patient_id);
        //echo '<tt><pre>' . var_export($patientMedicalHistory, TRUE) . '</pre></tt>';
        $data['patientMedicalHistory'] = $patientMedicalHistory;
        
        $this->load->view('doctor/doctor-appointment-view', $data);
    }

    public function getAppointmentList($doctor_id) {
        //get the doctor id from get 
        $this->load->model(array('DoctorAppointment'));
        $doctorAppointment = new DoctorAppointment();
//        echo '<tt><pre>' . var_export($doctor_id, TRUE) . '</pre></tt>';
        $data['docAppointmentList'] = $doctorAppointment->getDocAppointmentList($doctor_id);
//        echo '<tt><pre>' . var_export($data['docAppointmentList'], TRUE) . '</pre></tt>';
        $this->load->view('doctor/doctor-appointment', $data);
    }

    public function completeAppointment() {
        $this->load->model(array('DoctorAppointment'));
        $doctorAppointment = new DoctorAppointment();
        $array_from_post = $doctorAppointment->array_from_post(array('appo_id', 'comment','patient_id'));
        echo '<tt><pre>' . var_export($array_from_post, TRUE) . '</pre></tt>';
        echo 'Updating.....';
        $doctorAppointment->setAppointmentCompete($array_from_post['appo_id'], $array_from_post['comment']);


        //get appoinment details again
        redirect('/Doctor_Controller/getAppointmentDetail/' . $array_from_post['appo_id'].'/'.$array_from_post['patient_id']);
    }

    public function rejectAppointment() {
        $this->load->model(array('DoctorAppointment'));
        $doctorAppointment = new DoctorAppointment();
        $array_from_post = $doctorAppointment->array_from_post(array('appo_id'));
        echo '<tt><pre>' . var_export($array_from_post, TRUE) . '</pre></tt>';
//         echo 'Updating.....';
        $doctorAppointment->setAppointmentReject($array_from_post['appo_id']);


        //get appoinment details again
        redirect('/Doctor_Controller/getAppointmentDetail/' . $array_from_post['appo_id']);
    }

}
