<?php

class Main extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('is_loggedin')) {
            redirect('dashboard');
        } else {
            $this->load->view('main');
        }
    }

    public function login()
    {

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $data_user = $this->User_m->login($email, $password);

        if ($data_user === null) {
            // email tidak terdaftar
            $this->session->set_flashdata('failed', 'Akun anda belum terdaftar.');
            redirect('page/account');
            return;
        }

        if ($data_user === false) {
            // password salah
            $this->session->set_flashdata('failed', 'Password anda salah.');
            redirect('page/account');
            return;
        }

        // cek status aktif
        if ($data_user->is_active != 1) {
            $this->session->set_flashdata('failed', 'Akun anda belum diaktivasi.');
            redirect('page/account');
            return;
        }

        // login sukses
        $user_data = [
            'user_id'     => $data_user->id,
            'fullname'    => $data_user->fullname,
            'email'       => $data_user->email,
            'phone'       => $data_user->phone,
            'role_id'     => $data_user->role_id,
            'is_loggedin' => 1
        ];
        $this->session->set_userdata($user_data);
        redirect('dashboard');


    }



    public function logout()
    {
        $this->session->sess_destroy();
        redirect('main');
    }
}
