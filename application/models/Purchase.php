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

    /**
     * Return the count of pending purchase request
     */
    
    
    public function getMyPurchase($user_id) {
        $this->db->select('hms_purchase.*');
        $this->db->from('hms_purchase');
        $where = " created_user = '" . $user_id . "'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    
    
    public function getMyPurchaseRequest($requester_id) {
        $this->db->select('hms_purchase.*');
        $this->db->from('hms_purchase');
        $where = " request_by = '" . $requester_id . "'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    
    
    public function getPurchaseRequestCount() {
        $this->db->select('hms_purchase.*');
        $this->db->from('hms_purchase');
        $where = " hms_purchase.status_code = 'PENDING'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return  $query->num_rows();
        } else {
            return 0;
        }
    }
    
    
   function updatePurchase($data, $id) {
        $this->db->where('hms_purchase.id', $id);
        return $this->db->update('hms_purchase', $data);
    }


    //get pending item request
    public function getPendingRequest() {
        $this->db->select('hms_purchase.*,hms_user.first_name');
        $this->db->from('hms_purchase');
        $this->db->join('hms_user', 'hms_user.id = hms_purchase.request_by');
        $where = " hms_purchase.status_code = 'PENDING'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    /**
     * get according to the status
     * @param type $status
     * @return boolean
     */
    public function getPurchaseList($status) {
        $this->db->select('hms_purchase.*,hms_user.first_name');
        $this->db->from('hms_purchase');
        $this->db->join('hms_user', 'hms_user.id = hms_purchase.request_by');
        $where = " hms_purchase.status_code = '".$status."'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    
    
    public function getItemHistory() {
        $this->db->select('hms_purchase.*,hms_user.first_name');
        $this->db->from('hms_purchase');
        $this->db->join('hms_user', 'hms_user.id = hms_purchase.request_by');
        $where = " hms_purchase.status_code != 'PENDING'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function setStatusChange($data, $id) {
        $this->db->where('hms_purchase.id', $id);
        return $this->db->update('hms_purchase', $data);
    }

}
