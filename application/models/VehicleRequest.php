<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VehicleRequest
 *
 * @author User
 */
class VehicleRequest extends MY_Model {

    //put your code here
    const DB_TABLE = 'hms_vehicle_request';
    const DB_TABLE_PK = 'id';

    public $id;
    public $request_by;
    public $comment;
    public $status_code;
    public $vehicle_no;
    public $datetime_need;
    public $created_user;

    public function getMyRequest($user_id) {
        $this->db->select('hms_vehicle_request.*');
        $this->db->from('hms_vehicle_request');
        $where = " request_by = '" . $user_id . "'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

}
