<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WardPatient
 *
 * @author User
 */
class WardPatient extends MY_Model {

//put your code here
    const DB_TABLE = 'hms_ward_patient';
    const DB_TABLE_PK = 'id';

    public $id;
    public $ward_id;
    public $patient_id;
    public $comment;
    public $created_date;
    public $created_user;
    public $status_code;

    function updatePatient($data, $id) {
        $this->db->where('hms_ward_patient.id', $id);
        return $this->db->update('hms_ward_patient', $data);
    }

    public function getAdmitDetails() {
        $this->db->select('hms_ward_patient.*,hms_patient.first_name,hms_patient.last_name');
        $this->db->from('hms_ward_patient');
        $this->db->join('hms_patient', 'hms_patient.id = hms_ward_patient.patient_id');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function getDoctorWardPatient($doctor_id) {
        $this->db->select('hms_ward_patient.*,hms_patient.first_name,hms_patient.last_name');
        $this->db->from('hms_ward_patient');
        $this->db->join('hms_patient', 'hms_patient.id = hms_ward_patient.patient_id');
        $where = " hms_ward_patient.created_user = '" . $doctor_id . "'";
        $this->db->where($where);
        $this->db->order_by("hms_ward_patient.id", "desc");
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

}
