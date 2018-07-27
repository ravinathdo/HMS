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

    public function array_from_post($fields) {
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }

    public function getPatientLogin($formData) {
        $this->db->select('hms_patient.*');
        $this->db->from('hms_patient');
        $pword = sha1($formData['pword']);
        $where = " email = '" . $formData['email'] . "' AND pword = '" . $pword . "' AND status_code = 'ACTIVE'";
        $this->db->where($where);
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
        $where = " nic = '" . $formData['nic'] . "' AND pword = '" . $pword . "' AND status_code = 'ACTIVE'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

}
