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
    public $vehicle_id;
    public $created_user;

    
    
    public function getVehicleFromStatus($status_code) {
        $this->db->select('hms_vehicle_request.*');
        $this->db->from('hms_vehicle_request');
        $where = " status_code = '" . $status_code . "'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    
    public function getMyVehicleRequest() {
        $this->db->select('hms_vehicle_request.*');
        $this->db->from('hms_vehicle_request');
        $where = " doctor_id = '" . $doctor_id . "'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    
    
    function updateVehicle($data, $id) {
        $this->db->where('hms_vehicle_request.id', $id);
        return $this->db->update('hms_vehicle_request', $data);
    }

    public function getRequestHistory($vid) {
        $this->db->select('hms_vehicle_request.*,hms_user.first_name,hms_user.user_role,hms_vehicle.vehicle_number');
        $this->db->from('hms_vehicle_request');
        $where = " vehicle_id = '" . $vid . "'";
        $this->db->where($where);
        $this->db->join('hms_user', 'hms_user.id = hms_vehicle_request.request_by');
        $this->db->join('hms_vehicle', 'hms_vehicle.id = hms_vehicle_request.vehicle_id');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function getAllRequest() {
        $this->db->select('hms_vehicle_request.*,hms_user.first_name,hms_user.user_role,hms_user.telephone,hms_vehicle.vehicle_number');
        $this->db->from('hms_vehicle_request');
        $this->db->join('hms_user', 'hms_user.id = hms_vehicle_request.request_by');
        $this->db->join('hms_vehicle', 'hms_vehicle.id = hms_vehicle_request.vehicle_id');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

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
