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

    //put your code here
    public function loadDoctorLogin() {
        $data['msg'] = '';
        $this->load->view('doctor/doctor-login', $data);
    }

    public function doctorLogin() {

        $this->load->model(array('User'));
        $user = new User();

        $post_data = $user->array_from_post(array('nic', 'pword'));


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
        echo $date . ' fell on a ' . $dayOfWeek;


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
    public function getAppointmentDetail($appo_id) {
        //echo 'Appointment ID:'.$appo_id;
         $this->load->model(array('DoctorAppointment','Patient'));
        $doctorAppointment = new DoctorAppointment();
        $patient = new Patient();
        $data['appointmentDetail'] = $doctorAppointment->getAppointmentDetails($appo_id)[0];
                //echo '<tt><pre>' . var_export($data['appointmentDetail'], TRUE) . '</pre></tt>';

        
        //get patient history
        $patientMedicalHistory = $patient->getPatientMedicalHistory(8);
        //echo '<tt><pre>' . var_export($patientMedicalHistory, TRUE) . '</pre></tt>';
        $data['patientMedicalHistory'] = $patientMedicalHistory;
        $this->load->view('doctor/doctor-appointment-view', $data);
    }
    
    public function getAppointmentList($doctor_id) {
        //get the doctor id from get 
        $this->load->model(array('DoctorAppointment'));
        $doctorAppointment = new DoctorAppointment();
        $data['docAppointmentList'] = $doctorAppointment->getDocAppointmentList($doctor_id);
        $this->load->view('doctor/doctor-appointment', $data);
    }
    
    public function completeAppointment() {
         $this->load->model(array('DoctorAppointment'));
         $doctorAppointment = new DoctorAppointment();
         $array_from_post = $doctorAppointment->array_from_post(array('appo_id','comment'));
         echo '<tt><pre>' . var_export($array_from_post, TRUE) . '</pre></tt>';
         echo 'Updating.....';
         $doctorAppointment->setAppointmentCompete($array_from_post['appo_id'], $array_from_post['comment']);
         
         
         //get appoinment details again
         redirect('/Doctor_Controller/getAppointmentDetail/'.$array_from_post['appo_id']);
    }

    
    public function rejectAppointment() {
        $this->load->model(array('DoctorAppointment'));
         $doctorAppointment = new DoctorAppointment();
         $array_from_post = $doctorAppointment->array_from_post(array('appo_id'));
         echo '<tt><pre>' . var_export($array_from_post, TRUE) . '</pre></tt>';
//         echo 'Updating.....';
         $doctorAppointment->setAppointmentReject($array_from_post['appo_id']);
         
         
         //get appoinment details again
         redirect('/Doctor_Controller/getAppointmentDetail/'.$array_from_post['appo_id']);
    }
    
    
    
}
