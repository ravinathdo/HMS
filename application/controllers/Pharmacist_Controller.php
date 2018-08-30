<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pharmacist_Controller
 *
 * @author User
 */
class Pharmacist_Controller extends CI_Controller {

    //put your code here

    public function loadHome() {
        $this->load->view('pharmacist/home');
    }

    public function loadManageDrug() {
        $this->load->model(array('Drug'));
        $data['msg'] = '';
        $drug = new Drug();
        $drugList = $drug->get();
        $data['drugList'] = $drugList;
        $this->load->view('pharmacist/pharmacist-drug', $data);
    }

    public function loadViewStock() {
        $this->load->model(array('Drug'));
        $data['msg'] = '';
        $drug = new Drug();

        $drugList = $drug->get();
        $data['drugList'] = $drugList;
        $this->load->view('pharmacist/pharmacist-stock', $data);
    }

    public function viewStock() {
//        echo 'viewStock';
        $this->load->model(array('Drug'));
        $data['msg'] = '';
        $drug = new Drug();

        $qty = $this->input->post('qty');
//        echo $qty;
        $drugList = $drug->getFillterStock($qty);

        $data['drugList'] = $drugList;
        $this->load->view('pharmacist/pharmacist-stock', $data);
    }

    public function addDrug() {
        $this->load->model(array('Drug'));
        $data['msg'] = '';
        $drug = new Drug();


        //add
        $drug->drug_name = $this->input->post('drug_name');
        $drug->qty = $this->input->post('qty');
        $drug->price = $this->input->post('price');
        $drug->mesure = $this->input->post('mesure');

        //reload
        $drug->save();

         $db_error = $this->db->error();
//            echo '<tt><pre>' . var_export($db_error, TRUE) . '</pre></tt>';
        if ($db_error['code'] == 0) {
            $data['msg'] = '<p class="text-success">New record created successful </p>';
        } else {
            $data['msg'] = '<p class="text-error"> Invalid or duplicate entry found </p>';
        }
        
        $drugList = $drug->get();
        $data['drugList'] = $drugList;
        $this->load->view('pharmacist/pharmacist-drug', $data);
    }

    public function loadUpdateDrug($id) {
        $this->load->model(array('Drug'));
        $data['msg'] = '';
        $drug = new Drug();


        //get by ID
        // $id
        $drugDetail = $drug->getFromID($id);
//       echo '<tt><pre>' . var_export($drugDetail, TRUE) . '</pre></tt>';
        $data['drugDetail'] = $drugDetail[0];

//       echo '<tt><pre>' . var_export($data['drugDetail'], TRUE) . '</pre></tt>';
//       
//      $updateArray = array(
//          'drug_name'=> $this->input->post('drug_name'),
//          'qty'=> $this->input->post('qty'),
//          'price'=> $this->input->post('price')
//          );

        $this->load->view('pharmacist/pharmacist-drug-update', $data);
    }

    public function updateDrug() {
        $this->load->model(array('Drug'));
        $data['msg'] = '';
        $drug = new Drug();


        //get by ID
        // $id
//       echo '<tt><pre>' . var_export($drugDetail, TRUE) . '</pre></tt>';
//       echo '<tt><pre>' . var_export($data['drugDetail'], TRUE) . '</pre></tt>';
        $id = $this->input->post('id');

        $updateArray = array(
            'drug_name' => $this->input->post('drug_name'),
            'qty' => $this->input->post('qty'),
            'price' => $this->input->post('price')
        );

//        echo '<tt><pre>' . var_export($updateArray, TRUE) . '</pre></tt>';
        $drug->updateDrug($updateArray, $id);
        $db_error = $this->db->error();
//        echo '<tt><pre>' . var_export($db_error, TRUE) . '</pre></tt>';
        if ($db_error['code'] == 0) {
            $data['msg'] = '<p class="text-success">Drug updated successful </p>';
        } else {
            $data['msg'] = '<p class="text-error"> Invalid or duplicate entry found </p>';
        }



        $drugDetail = $drug->getFromID($id);
//        echo '<tt><pre>' . var_export($drugDetail, TRUE) . '</pre></tt>';
        $data['drugDetail'] = $drugDetail[0];


        $this->load->view('pharmacist/pharmacist-drug-update', $data);
    }

}
