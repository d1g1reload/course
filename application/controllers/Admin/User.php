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

    function page_profile()
    {
        $user_id = $this->session->userdata('user_id');
        $data['user'] = $this->User_m->get_profile_user($user_id);
        $data['content_admin'] = "app/backend/user/edit";
        $this->load->view('layouts/panel', $data);
    }
    function update_profile($id)
    {
        $fullname = $this->input->post('fullname');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $data = array(
            'fullname' => $fullname,
            'email' => $email,
            'phone' => $phone,
        );
        $success = $this->User_m->update_profile_user($id, $data);
        // var_dump($data);
        if ($success) {
            $this->session->set_userdata('fullname', $fullname);
            $this->session->set_userdata('email', $email);
            $this->session->set_userdata('phone', $phone);
            $this->session->set_flashdata('success', 'Berhasil update profile');
            redirect('user/profile/edit');
        } else {
            $this->session->set_flashdata('failed', 'Gagal update profile');
            redirect('user/profile/edit');
        }
    }
}
