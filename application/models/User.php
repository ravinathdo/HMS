<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author ravi
 */
class User extends MY_Model {

//put your code here
    const DB_TABLE = 'hms_user';
    const DB_TABLE_PK = 'id';

    public $id;
    public $first_name;
    public $last_name;
    public $nic;
    public $user_role;
    public $telephone;
    public $email;
    public $empno;
    public $status_code;
    public $created_user;

    public function updateUser($data, $id) {
        $this->db->where('hms_user.id', $id);
        return $this->db->update('hms_user', $data);
    }

    public function array_from_post($fields) {
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }

    public function getPostData() {
        $this->first_name = $this->input->post('first_name');
        $this->last_name = $this->input->post('last_name');
        $this->nic = $this->input->post('nic');
        $this->pword = sha1($this->input->post('nic'));
        $this->user_role = $this->input->post('user_role');
        $this->telephone = $this->input->post('telephone');
        $this->email = $this->input->post('email');
        $this->empno = $this->input->post('empno');
        $this->status_code = 'ACTIVE';
    }

    
    
    
    
    public function getPatientLogin($formData) {
        $this->db->select('hms_patient.*');
        $this->db->from('hms_patient');
//        echo $formData['pword'];
        $pword = sha1($formData['pword']);
        $where = " email = '" . $formData['email'] . "' AND pword = '" . $pword . "' AND status_code = 'ACTIVE'";
        $this->db->where($where);
//        echo $where;
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function getAdminLogin($formData) {
        $this->db->select('hms_user.*');
        $this->db->from('hms_user');
        $pword = sha1($formData['pword']);
        $where = " nic = '" . $formData['nic'] . "' AND pword = '" . $pword . "' AND status_code = 'ACTIVE'";
        $this->db->where($where);
//                echo $where;

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function getDoctorLogin($formData) {
        $this->db->select('hms_doctor.*');
        $this->db->from('hms_doctor');
        $pword = sha1($formData['pword']);
//        echo $pword;
        $where = " nic = '" . $formData['nic'] . "' AND pword = '" . $pword . "' AND status_code = 'ACTIVE'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function changePassword($dataArray, $id) {
        $this->db->where('hms_user.id', $id);
        return $this->db->update('hms_user', $dataArray);
    }

}
