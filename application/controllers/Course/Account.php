<?php

class Account extends CI_Controller
{

    function index()
    {

        $data['content'] = "app/account/main";
        $this->load->view('layouts/main', $data);
    }

    function register()
    {

        $data['content'] = "app/account/register";
        $this->load->view('layouts/main', $data);
    }
}
