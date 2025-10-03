<?php

class Main extends CI_Controller
{
    public function index()
    {

        $data['course'] = $this->Course_m->get_course_list();
        $data['total_course'] = $this->Course_m->count_course();
        $data['content'] = "app/main";
        $this->load->view('layouts/main', $data);
    }

    public function about()
    {

        $data['content'] = "app/about/about";
        $this->load->view('layouts/main', $data);
    }


    public function register()
    {
        $options = ['cost' => 12];
        $fullname = $this->input->post('fullname');
        $email = $this->input->post('email');
        $encrypt_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);
        $phone = $this->input->post('phone');
        $roleid = $this->input->post('role_id');
        $created_at = date('Y-m-d');

        $checkEmail = $this->User_m->check_email($email);

        if ($checkEmail > 0) {
            $this->session->set_flashdata('failed', 'Email anda sudah terdaftar');
            redirect('page/account/register');
        } else {

            /**
             * send OTP to user
             */
            $uotp = '0123456789';
            $otp_code = substr(str_shuffle($uotp), 0, 4);
            // Cek apakah OTP sudah ada di database
            if ($this->User_m->isOTPExists($otp_code)) {
                // Jika OTP sudah ada, generate OTP baru
                $otp_code = substr(str_shuffle($uotp), 0, 4);
            }
            $text = "Berikut adalah kode OTP anda " . $otp_code;
            $create_otp = date('Y-m-d H:i:s');



            $data_otp = array(
                'phone'     => $phone,
                'otp_code'  => $otp_code,
                'created'   => $create_otp
            );
            $this->course_lib->sendOtp($phone, $text);
            $this->User_m->save_otp($data_otp);

            $data = array(
                'fullname'  => $fullname,
                'email'     => $email,
                'password'  => $encrypt_pass,
                'phone'     => $phone,
                'role_id'   => $roleid,
                'created_at' => $created_at
            );
            $this->User_m->create($data);
            $this->session->set_flashdata('success', 'Kode OTP sudah dikirimkan ke Nomor HP anda.');
            redirect('page/otp');
        }
    }

    public function otp()
    {
        $data['content'] = "app/account/otp";
        $this->load->view('layouts/main', $data);
    }

    public function verify_otp()
    {
        $code_otp = $this->input->post('otp_code');
        $data_otp = $this->User_m->otp_verify($code_otp);
        if ($data_otp->otp_code == $code_otp) {
            $data = array(
                'is_active' => 1
            );
            $phone = $data_otp->phone;
            $this->User_m->update_status_user($phone, $data);
            $this->session->set_flashdata('success', 'OTP berhasil diverifikasi, silahkan login.');
            redirect('page/otp');
        } else {
            $this->session->set_flashdata('failed', 'Kode OTP anda tidak terdaftar.');
            redirect('page/otp');
        }
    }


}
