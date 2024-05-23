<?php

class Main extends CI_Controller
{

    function index()
    {

        $this->load->view('layouts/admin');
    }

    function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $data_user = $this->User_m->login($email, $password);
        if ($data_user) {
            $user_data = array(
                'photo' => $data_user->photo,
                'fullname' => $data_user->fullname,
                'email' => $data_user->email,
                'posisi' => $data_user->posisi,
                'is_loggedin' => 1
            );

            $this->session->set_userdata($user_data);
            redirect('dashboard');
        } else {
            redirect('main');
        }
    }
}
