# leason learn of the HMS
<!--Login Model-->
<!--Set Session Variable on controller-->
<!--Access Session Variable in view-->
<!--Logout-->
<!--Day of the Date -->
<!--Search where from table -->



<!--Search where from table -->
<?php 
public function getDocAvailability($doctor_id) {
        $this->db->select('hms_doctor_availability.*');
        $this->db->from('hms_doctor_availability');
        $where = " doctor_id = '" . $doctor_id . "'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    ?>
<!--Search where from table END-->


<!--Day of the Date -->
<?php 
//Our YYYY-MM-DD date string.
        $date = "2018-07-28";
//Convert the date string into a unix timestamp.
        $unixTimestamp = strtotime($date);
//Get the day of the week using PHP's date function.
        $dayOfWeek = date("l", $unixTimestamp);
//Print out the day that our date fell on.
        echo $date . ' fell on a ' . $dayOfWeek;
        ?>
<!--Day of the Date END-->




<!--Logout-->

<!--Logout END-->


<!--Login Model -->
<!--Login Model END-->

<!--Set Session Variable on controller-->
            <?php 
            $newdata = array(
                'userbean' => $login[0],
                'logged_in' => TRUE
            );
            $this->session->set_userdata($newdata);
            $this->load->view('home'); 
            ?>
<!--Set Session Variable on controller END-->

<!--Access Session Variable in view-->
        <li class="tol">
            <?php
            if ($this->session->userdata('userbean')) {
                $userbean = $this->session->userdata('userbean');
            } else {
                //if invalid session user get redirect to login
                header("Location:" . site_url('User_Controller/logout'));
            }
            ?> Welcome <?= $userbean->first_name; ?>
        <li class="sigi">
            <a href="<?php echo site_url('User_Controller/logout'); ?>"  data-target="#myModal4" > 
                [<?= $userbean->role_code; ?>] | Logout</a>
        </li>
<!--Access Session Variable in view END-->