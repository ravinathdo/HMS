<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ward
 *
 * @author User
 */
class Ward extends MY_Model {
    //put your code here
    const DB_TABLE = 'hms_ward';
    const DB_TABLE_PK = 'ward_no';

    public $ward_no;
    public $ward_name;
    public $doctor_incharge;
    
    
    public function getDoctorWards($doctor_id) {
       $this->db->select('hms_ward.*');
        $this->db->from('hms_ward');
        $where = " doctor_incharge = '" . $doctor_id . "'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    
    
}
