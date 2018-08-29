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
    public $doctor_fee;
    public $hospital_fee;
    public $fee;
    public $created_date;
    public $created_user;

    /**
     * patient appointment count 
     * @param type $patient_id
     */
    public function getMyAppointmentCount($patient_id,$status_code) {
        $this->db->select('hms_doctor_appointment.*');
        $this->db->from('hms_doctor_appointment');
        $where = " created_user = '" . $patient_id . "' AND status_code = 'OPEN'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return FALSE;
        }
    }
    
    public function getDoctorEarnings($doctor_id, $year_month) {
        $this->db->select('hms_doctor_appointment.*');
        $this->db->from('hms_doctor_appointment');
        $where = " hms_doctor_appointment.doctor_id = '" . $doctor_id . "' AND hms_doctor_appointment.status_code = 'COMPLETE' "; 
        $this->db->where($where);
        $this->db->like('hms_doctor_appointment.appointment_date', $year_month);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function array_from_post($fields) {
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }

    public function getPostData() {
        $this->doctor_id = $this->input->post('doctor_id');
        $this->appointment_date = $this->input->post('appointment_date');
        $this->status_code = 'ACTIVE';
        $this->fee = $this->input->post('fee');
    }

    public function getDocAppointmentList($doctor_id) {
        $this->db->select('hms_doctor_appointment.*');
        $this->db->from('hms_doctor_appointment');
        $where = " doctor_id = '" . $doctor_id . "'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function getAppointmentDetails($param) {
        $this->db->select('hms_doctor_appointment.*,hms_patient.first_name');
        $this->db->from('hms_doctor_appointment');
        $this->db->join('hms_patient', 'hms_patient.id = hms_doctor_appointment.patient_id');
        $where = " hms_doctor_appointment.id = '" . $param . "'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function setAppointmentCompete($appo_id, $comm) {
        $this->db->set('doctor_comment', $comm);
        $this->db->set('status_code', 'COMPLETE');
        $this->db->where('id', $appo_id);
        $this->db->update('hms_doctor_appointment');
    }

    public function setAppointmentReject($appo_id, $comm) {
        $this->db->set('status_code', 'REJECT');
        $this->db->where('id', $appo_id);
        $this->db->update('hms_doctor_appointment');
    }

    public function rejectAppointment($data, $id) {
        $this->db->where('hms_doctor_appointment.id', $id);
        $this->db->update('hms_doctor_appointment', $data);
    }

}
