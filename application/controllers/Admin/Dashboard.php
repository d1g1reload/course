<?php


class Dashboard extends CI_Controller
{
    function __construct()
    {

        parent::__construct();
        // if (!$this->session->userdata('is_loggedin')) {

        //     $this->session->set_flashdata('failed', 'Silahkan login terlebih dahulu');

        //     redirect('admin');
        // }
    }

    function index()
    {

        $data['content_admin'] = "app/backend/dashboard";
        $this->load->view('layouts/panel', $data);
    }
}
