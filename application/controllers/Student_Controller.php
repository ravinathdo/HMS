<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student_Controller
 *
 * @author User
 */
class Student_Controller extends CI_Controller {
    //put your code here
    
    public function index()
	{
        echo 'Student';
//		$this->load->view('student/student_register');
		$this->load->view('template');
	}
}
