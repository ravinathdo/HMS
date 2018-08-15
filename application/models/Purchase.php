<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Purchase
 *
 * @author User
 */
class Purchase extends MY_Model {
    //put your code here
    const DB_TABLE = 'hms_purchase';
    const DB_TABLE_PK = 'id';

    public $id;
    public $purchasing_item;
    public $qty;
    public $status_code;
    public $request_by;
    public $created_user;
    public $amount;

    
    //get pending item request
    public function getPendingRequest() {
        $this->db->select('hms_purchase.*,hms_user.first_name');
        $this->db->from('hms_purchase');
        $this->db->join('hms_user','hms_user.id = hms_purchase.request_by');
        $where = " hms_purchase.status_code = 'PENDING'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    
    
    
    
    
}
