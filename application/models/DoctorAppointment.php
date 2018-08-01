<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DoctorAppointment
 *
 * @author ravi
 */
class DoctorAppointment extends MY_Model {

    //put your code here
    const DB_TABLE = 'hms_doctor_appointment';
    const DB_TABLE_PK = 'id';

    public $id;
    public $doctor_id;
    public $patient_id;
    public $appointment_date;
    public $status_code;
    public $doctor_comment;
    public $fee;
    public $created_date;
    public $created_user;

    public function getPostData() {
        $this->doctor_id = $this->input->post('doctor_id');
        $this->appointment_date = $this->input->post('appointment_date');
        $this->status_code = 'ACTIVE';
        $this->fee = $this->input->post('fee');
    }

    
    
    
}
