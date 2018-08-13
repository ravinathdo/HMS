<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Feedback
 *
 * @author User
 */
class Feedback extends MY_Model {

//put your code here

    const DB_TABLE = 'hms_feedback';
    const DB_TABLE_PK = 'id';
    
    public $id;
    public $feedback;
    public $created_date;
    public $created_user;

    
    public function deleteFeedback($param) {
        $this->db->where('id',$param);
        $this->db->delete('hms_feedback');
    }
    
    public function getUserFeedback($userid) {
        $this->db->select('hms_feedback.*');
        $this->db->from('hms_feedback');
        $where = " created_user = '" . $userid . "'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

}
