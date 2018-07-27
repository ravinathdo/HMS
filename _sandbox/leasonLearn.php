# leason learn of the HMS
<!--Login Model-->
<!--Set Session Variable on controller-->
<!--Access Session Variable in view-->
<!--Logout-->



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