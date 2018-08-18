<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Salary
 *
 * @author User
 */
class Salary extends MY_Model {

    //put your code here
    const DB_TABLE = 'hms_employee_salary';
    const DB_TABLE_PK = 'id';

    public $id;
    public $user_id;
    public $salary_month;
    public $salary_amount;
    public $created_user;

    public function getPostData() {
        $this->user_id = $this->input->post('emplyee_id');
        $this->salary_month = $this->input->post('salary_month');
        $this->salary_amount = $this->input->post('amount');
    }

    public function getSalaryListOnEmployee($emp_id) {
        $this->db->select('hms_employee_salary.*');
        $this->db->from('hms_employee_salary');
        $where = " user_id = '" . $emp_id . "'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

}
