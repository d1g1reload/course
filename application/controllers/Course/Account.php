<?php

class Account extends CI_Controller
{
    public function index()
    {

        $data['content'] = "app/account/main";
        $this->load->view('layouts/main', $data);
    }

    public function register()
    {

        $data['content'] = "app/account/register";
        $this->load->view('layouts/main', $data);
    }

    /**
     * RESET PASSWORD
     *
     */

    public function page_reset()
    {
        $data['content'] = "app/account/reset";
        $this->load->view('layouts/main', $data);
    }
}
