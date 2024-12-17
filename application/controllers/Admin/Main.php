<?php

class Main extends CI_Controller
{

    function index()
    {
        if ($this->session->userdata('is_loggedin')) {
            redirect('dashboard');
        } else {
            $this->load->view('layouts/admin');
        }
    }

    function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $data_user = $this->User_m->login($email, $password);
        var_dump($data_user);
        if ($data_user) {

            $user_data = array(
                'user_id'       => $data_user->id,
                'photo'         => $data_user->photo,
                'fullname'      => $data_user->fullname,
                'email'         => $data_user->email,
                'posisi'        => $data_user->posisi,
                'is_loggedin'   => 1
            );
            $this->session->set_userdata($user_data);
            if ($data_user->role_id == 1) {
                redirect('dashboard');
            }
        } else {
            redirect('main');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('main');
    }
}
