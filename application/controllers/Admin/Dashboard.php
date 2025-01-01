<?php


class Dashboard extends CI_Controller
{
    function __construct()
    {

        parent::__construct();
        if (!$this->session->userdata('is_loggedin')) {

            $this->session->set_flashdata('failed', 'Silahkan login terlebih dahulu');

            redirect('page/account');
        }
    }

    function index()
    {
        $user_id = $this->session->userdata('user_id');
        //student statistik
        $data['student_buy_completed'] = $this->Course_m->student_buy_completed($user_id);
        $data['student_buy_not_completed'] = $this->Course_m->student_buy_not_completed($user_id);

        $data['content_admin'] = "app/backend/dashboard";
        $this->load->view('layouts/panel', $data);
    }
}
