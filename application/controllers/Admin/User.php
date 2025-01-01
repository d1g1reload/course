<?php

class User extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        if (!$this->session->userdata('is_loggedin')) {

            $this->session->set_flashdata('failed', 'Silahkan login terlebih dahulu');

            redirect('admin');
        }
    }
    function mentor()
    {
        $data['list'] = $this->User_m->get_mentor();
        $data['content_admin'] = "app/backend/user/mentor";
        $this->load->view('layouts/panel', $data);
    }
}
