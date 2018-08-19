<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HmsUtil
 *
 * @author User
 */
class HmsUtil {

    //put your code here

    public function getDateTime() {
        date_default_timezone_set("Asia/Colombo");
        $dt = date("Y-m-d h:i:sa");
        return $dt;
    }

}
