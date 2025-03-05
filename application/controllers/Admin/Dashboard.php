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
        //admin dan instruktur statistik
        $data['user_count'] = $this->Course_m->user_count_dashboard();
        $data['user_buy'] = $this->Course_m->user_buy_count_dashboard();
        $data['payment_pending'] = $this->Purchase_m->get_list_payment_pending();


        //student statistik
        $data['student_buy_completed'] = $this->Course_m->student_buy_completed($user_id);
        $data['student_buy_not_completed'] = $this->Course_m->student_buy_not_completed($user_id);

        $data['content_admin'] = "app/backend/dashboard";
        $this->load->view('layouts/panel', $data);
    }
}
