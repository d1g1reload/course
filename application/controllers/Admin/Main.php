<?php

class Main extends CI_Controller
{

    function index()
    {
        if ($this->session->userdata('is_loggedin')) {
            redirect('dashboard');
        } else {
            $this->load->view('main');
        }
    }

    function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $data_user = $this->User_m->login($email, $password);
        $check_account = $this->User_m->check_email($email);
        if ($check_account > 0) {

            if ($data_user->is_active == 1) {

                $user_data = array(
                    'user_id'       => $data_user->id,
                    'fullname'      => $data_user->fullname,
                    'email'         => $data_user->email,
                    'phone'         => $data_user->phone,
                    'role_id'        => $data_user->role_id,
                    'is_loggedin'   => 1
                );
                $this->session->set_userdata($user_data);
                redirect('dashboard');
            } elseif ($data_user->is_active == 0) {
                $this->session->set_flashdata('failed', 'Akun anda belum di aktivasi.');
                redirect('page/account');
            } else {
                $this->session->set_flashdata('failed', 'Email dan Password tidak sesuai');
                redirect('page/account');
            }
        } else {
            $this->session->set_flashdata('failed', 'Akun anda belum terdaftar.');
            redirect('page/account');
        }
    }



    function logout()
    {
        $this->session->sess_destroy();
        redirect('main');
    }
}
