<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OPDAppointment
 *
 * @author User
 */
class OPDAppointment extends MY_Model {

    //put your code here
    const DB_TABLE = 'hms_opd_appointment';
    const DB_TABLE_PK = 'id';

    public $id;
    public $patient_id;
    public $doctor_id;
    public $appointment_date;
    public $status_code;
    public $created_date;
    public $created_user;
    public $updated_user;
    public $fee;

    public function getOPDAppointmentList() {
        $this->db->select('hms_opd_appointment.*,hms_patient.first_name');
        $this->db->from('hms_opd_appointment');
        $this->db->join('hms_patient', 'hms_patient.id = hms_opd_appointment.patient_id');
        $this->db->order_by('hms_opd_appointment.id', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function getOPDPatientAppointmentList($patient_id) {
        $this->db->select('hms_opd_appointment.*');
        $this->db->from('hms_opd_appointment');
        $where = " patient_id = '" . $patient_id . "'";
        $this->db->where($where);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

 
    function updateOPDAppointment($data, $id) {
        $this->db->where('hms_opd_appointment.id', $id);
        return $this->db->update('hms_opd_appointment', $data);
    }

}
