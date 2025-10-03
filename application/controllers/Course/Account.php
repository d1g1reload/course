<?php

class Account extends CI_Controller
{
    public function index()
    {

        $data['content'] = "app/account/main";
        $this->load->view('layouts/main', $data);
    }

    public function register()
    {

        $data['content'] = "app/account/register";
        $this->load->view('layouts/main', $data);
    }

    /**
     * RESET PASSWORD
     *
     */

    public function page_reset()
    {
        $data['content'] = "app/account/reset";
        $this->load->view('layouts/main', $data);
    }

    public function reset_otp_password()
    {
        $email = $this->input->post('email');
        $checkEmail = $this->User_m->check_email($email);
        if ($checkEmail) {
            $data_user = $this->User_m->get_user($email);
            $phone = $data_user->phone;
            $check_phone = $this->User_m->check_otp_phone($phone);
            if ($check_phone) {

                $otp_code = $check_phone->otp_code;
                if ($this->User_m->is_otp_and_phone_exists($phone, $otp_code)) {
                    $text = "Berikut adalah kode OTP anda " . $otp_code;

                    $this->course_lib->sendOtp($phone, $text);
                }
            }

            $this->session->set_userdata('reset_email', $email);
            redirect('page/otp/password');

        } else {
            $this->session->set_flashdata('failed', 'Email anda tidak terdaftar.');
            redirect('page/account/reset/email');
        }
    }


    public function page_otp_password()
    {
        $reset_email = $this->session->userdata('reset_email');

        if (empty($reset_email)) {
            // Tidak ada sesi reset, redirect ke home
            $this->session->set_flashdata('failed', 'Silakan cek email anda terlebih dahulu.');
            redirect('page/account/reset/email');
            return;
        }

        $data['content'] = "app/account/reset_otp";
        $this->load->view('layouts/main', $data);

    }

    public function verify_otp_password()
    {
        $otp_input = $this->input->post('otp_code');
        $reset_email = $this->session->userdata('reset_email');

        if (empty($reset_email)) {
            // Tidak ada sesi reset, redirect ke home
            $this->session->set_flashdata('failed', 'Silakan cek email anda terlebih dahulu.');
            redirect('page/account/reset/email');
            return;
        }

        $otp_valid = $this->User_m->otp_verify($otp_input);
        if ($otp_valid) {

            redirect('page/reset/password');
        } else {

            // OTP salah → biarkan session tetap ada supaya bisa coba lagi
            $this->session->set_flashdata('failed', 'Kode OTP salah, silakan coba lagi.');
            redirect('page/otp/password');
        }

    }

    public function page_reset_password()
    {

        $data['content'] = "app/account/new_password";
        $this->load->view('layouts/main', $data);
    }

    public function update_reset_password()
    {
        $reset_email = $this->session->userdata('reset_email');

        if (empty($reset_email)) {
            $this->session->set_flashdata('failed', 'Sesi reset sudah habis, silakan ulangi.');
            redirect('page/account/reset/email');
            return;
        }

        if ($this->input->method() === 'post') {
            $options = ['cost' => 12];
            $new_password = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);
            $data_password = [
                'password' => $new_password
            ];

            $this->User_m->updated_password($reset_email, $data_password);

            $this->session->unset_userdata('reset_email');

            $this->session->set_flashdata('success', 'Password berhasil diubah, silakan login.');
            redirect('page/account');
        } else {
            $data['content'] = "app/account/new_password";
            $this->load->view('layouts/main', $data);
        }


    }

}
