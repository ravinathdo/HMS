<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Doctor
 *
 * @author ravi
 */
class Doctor extends MY_Model {

    //put your code here

    const DB_TABLE = 'hms_doctor';
    const DB_TABLE_PK = 'id';

    public $id;
    public $first_name;
    public $last_name;
    public $nic;
    public $pword;
    public $email;
    public $telephone;
    public $degree;
    public $specialist_id;
    public $doc_fee;
    public $slmc_no;
    public $created_date;
    public $created_user;

    public function getPostData() {
        $this->first_name = $this->input->post('first_name');
        $this->last_name = $this->input->post('last_name');
        $this->nic = $this->input->post('nic');
        $this->pword = sha1($this->input->post('nic'));
        $this->email = $this->input->post('email');
        $this->telephone = $this->input->post('telephone');
        $this->degree = $this->input->post('degree');
        $this->specialist_id = $this->input->post('specialist_id');
        $this->doc_fee = $this->input->post('doc_fee');
        $this->slmc_no = $this->input->post('slmc_no');
        $this->status_code = 'ACTIVE';
        $this->user_role = 'DOCTOR';
    }

    public function array_from_post($fields) {
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }

    /**
     * get doctor details with special details
     * @param type $doctor_id
     */
    public function getDoctorDetails($doctor_id) {
        $this->db->select('hms_doctor.*,hms_specialist.specialist');
        $this->db->from('hms_doctor');
        $this->db->join('hms_specialist','hms_specialist.id = hms_doctor.specialist_id');
        $where = " hms_doctor.id = '" . $doctor_id . "'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

}
