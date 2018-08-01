<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DoctorAvailability
 *
 * @author ravi
 */
class DoctorAvailability extends MY_Model {

    //put your code here
    const DB_TABLE = 'hms_doctor_availability';
    const DB_TABLE_PK = 'id';

    public $doctor_id;
    public $day_available;
    public $time_available;

    public function array_from_post($fields) {
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }

    public function getPostData() {
        $this->day_available = $this->input->post('day_available');
        $this->time_available = $this->input->post('time_available');
    }

    
    
    
    
    
    public function getDocAvailability($doctor_id) {
        $this->db->select('hms_doctor_availability.*');
        $this->db->from('hms_doctor_availability');
        $where = " doctor_id = " . $doctor_id . "";
        
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    
        public function checkDocAvailability($doctor_id,$day_available) {
        $this->db->select('hms_doctor_availability.*');
        $this->db->from('hms_doctor_availability');
        $where = " doctor_id = " . $doctor_id . " AND day_available = '".$day_available."'";
        
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

}
