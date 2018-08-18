<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Patient
 *
 * @author ravi
 */
class Patient extends MY_Model {

    //put your code here
    const DB_TABLE = 'hms_patient';
    const DB_TABLE_PK = 'id';

    public $id;
    public $first_name;
    public $last_name;
    public $telephone;
    public $dob;
    public $email;
    public $pword;
    public $status_code;
    public $user_role;

    function updatePatient($data, $id) {
        $this->db->where('hms_patient.id', $id);
        return $this->db->update('hms_patient', $data);
    }

    public function array_from_post($fields) {
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }

    public function getPostData() {
        $this->first_name = $this->input->post('first_name');
        $this->last_name = $this->input->post('last_name');
        $this->telephone = $this->input->post('telephone');
        $this->email = $this->input->post('email');
        $this->dob = $this->input->post('dob');
        $this->pword = sha1($this->input->post('pword'));
//        $this->repword = $this->input->post('repword');
        $this->status_code = 'ACTIVE';
        $this->user_role = 'PATIENT';
    }

    public function newAppointment($param) {
        
    }

    public function getAppointment($patient_id) {
        $this->db->select('hms_doctor_availability.*');
        $this->db->from('hms_doctor_availability');
        $where = " doctor_id = '" . $doctor_id . "'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    /**
     * get patient medical record history by providing patient id
     * @param type $patient_id
     * @return boolean
     */
    public function getPatientMedicalHistory($patient_id) {
        $this->db->select('hms_doctor_appointment.*,hms_doctor.first_name');
        $this->db->from('hms_doctor_appointment');
        $this->db->join('hms_doctor', 'hms_doctor.id = hms_doctor_appointment.doctor_id');
        $where = " hms_doctor_appointment.patient_id = '" . $patient_id . "' AND hms_doctor_appointment.status_code = 'COMPLETE'";
        $this->db->where($where);
        $this->db->order_by("hms_doctor_appointment.id", "desc");
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    /**
     * load patient appointment list 
     * @param type $patient_id
     * @return boolean
     */
    public function getPatientAppointmentList($patient_id) {
        $this->db->select('hms_doctor_appointment.*,hms_doctor.first_name');
        $this->db->from('hms_doctor_appointment');
        $this->db->join('hms_doctor', 'hms_doctor.id = hms_doctor_appointment.doctor_id');
        $where = " hms_doctor_appointment.patient_id = '" . $patient_id . "'";
        $this->db->where($where);
        $this->db->order_by('hms_doctor_appointment.id', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    
    
}
