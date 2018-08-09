<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LabTest
 *
 * @author User
 */
class LabTest extends MY_Model {

    //put your code here
    const DB_TABLE = 'hms_lab_test';
    const DB_TABLE_PK = 'id';

    public $id;
    public $lab_test;
    public $center_name;
    public $description;
    

    public function getLabCenterDetails($center_name) {
        $this->db->select('hms_lab_test.*');
        $this->db->from('hms_lab_test');
        $where = " center_name = '" . $center_name . "'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }  
    }
    
    
}
