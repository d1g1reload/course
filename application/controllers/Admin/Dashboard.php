<?php


class Dashboard extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        if (!$this->session->userdata('is_loggedin')) {

            $this->session->set_flashdata('failed', 'Silahkan login terlebih dahulu');

            redirect('page/account');
        }
    }

    public function index()
    {
        $user_id = $this->session->userdata('user_id');
        //admin dan instruktur statistik
        $saldo = $this->User_m->saldo_user($user_id);
        $data['user_saldo'] = str_replace(".00", "", $saldo->saldo);
        $data['user_count'] = $this->Course_m->user_count_dashboard();
        $data['user_buy'] = $this->Course_m->user_buy_count_dashboard();
        $data['payment_pending'] = $this->Purchase_m->get_list_payment_pending();
        if ($this->session->userdata('role_id') == 2) {
            $data['course_statistic'] = $this->Purchase_m->get_statistic_user_buy_course($user_id);
        }


        //student statistik
        $data['student_buy_completed'] = $this->Course_m->student_buy_completed($user_id);
        $data['student_buy_not_completed'] = $this->Course_m->student_buy_not_completed($user_id);

        $data['content_admin'] = "app/backend/dashboard";
        $this->load->view('layouts/panel', $data);
    }
}
