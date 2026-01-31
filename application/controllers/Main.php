<?php

class Main extends CI_Controller
{
    public function index()
    {
        $data['categories'] = $this->Course_m->get_categories();
        $data['course'] = $this->Course_m->get_course_list();
        $data['total_course'] = $this->Course_m->count_course();
        $data['content'] = "app/main";
        $this->load->view('layouts/main', $data);
    }

    public function course_list()
    {
        $data['categories'] = $this->Course_m->get_categories();
        $data['course'] = $this->Course_m->get_course_list();
        $data['total_course'] = $this->Course_m->count_course();
        $data['content'] = "app/course/course_list";
        $this->load->view('layouts/main', $data);
    }

    public function about()
    {

        $data['content'] = "app/about/about";
        $this->load->view('layouts/main', $data);
    }

    public function help()
    {

        $data['content'] = "app/account/help";
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

        // Cek apakah email sudah terdaftar sebagai User
        $checkEmail = $this->User_m->check_email($email);

        if ($checkEmail > 0) {
            $this->session->set_flashdata('failed', 'Email anda sudah terdaftar');
            redirect('page/account/register');
        } else {

            /**
             * GENERATE OTP
             */
            $uotp = '0123456789';
            $otp_code = substr(str_shuffle($uotp), 0, 4);

            // Cek unibody OTP (pastikan tidak duplikat di database active)
            if ($this->User_m->isOTPExists($otp_code)) {
                $otp_code = substr(str_shuffle($uotp), 0, 4);
            }

            /**
             * SEND EMAIL
             */
            $subject = "Kode OTP Pendaftaran EduHost";
            $body = "Halo <b>$fullname</b>,<br><br>Terima kasih telah mendaftar. Berikut adalah kode OTP Anda:<br><h1>$otp_code</h1><br>Jangan berikan kode ini kepada siapapun.";

            // Menggunakan library sendMail yang sudah Anda miliki
            $send_email = $this->course_lib->sendMail($email, $subject, $body, 'EduHost Registration');

            if ($send_email['success']) {
                // Simpan ke tabel OTP (sesuai screenshot tabel: id, email, otp_code, created_at)
                $data_otp = array(
                    'email'     => $email,      // Menggunakan Email, bukan Phone
                    'otp_code'  => $otp_code,
                    'otp_type'  => 'register',  // Mengisi kolom otp_type (opsional, agar rapi)
                    'created_at' => date('Y-m-d H:i:s') // Sesuaikan dengan nama kolom di screenshot Anda 'created_at'
                );
                $this->User_m->save_otp($data_otp);

                // Simpan data User Baru
                $data = array(
                    'fullname'  => $fullname,
                    'email'     => $email,
                    'password'  => $encrypt_pass,
                    'phone'     => $phone,
                    'role_id'   => $roleid,
                    'created_at' => $created_at
                );
                $this->User_m->create($data);

                // Set session email agar di halaman input OTP sistem tahu siapa yang sedang verifikasi
                $this->session->set_userdata('verify_email', $email);

                $this->session->set_flashdata('success', 'Kode OTP telah dikirim ke Email Anda. Silakan cek Inbox/Spam.');
                redirect('page/otp');
            } else {
                // Jika email gagal terkirim
                $this->session->set_flashdata('failed', 'Gagal mengirim email OTP. Error: ' . $send_email['error']);
                redirect('page/account/register');
            }
        }
    }

    public function otp()
    {
        $data['content'] = "app/account/otp";
        $this->load->view('layouts/main', $data);
    }

    public function verify_otp()
    {
        // Ambil input OTP dari form
        $code_otp = $this->input->post('otp_code');

        // Ambil Email dari session (yang diset saat register)
        $email = $this->session->userdata('verify_email');

        // Cek jika session habis/tidak ada, kembalikan ke register/login
        if (empty($email)) {
            $this->session->set_flashdata('failed', 'Sesi habis. Silakan daftar ulang atau login.');
            redirect('page/account/register');
            return;
        }

        // Cek kecocokan Email DAN Kode OTP di database
        $check_otp = $this->User_m->verify_otp_email($email, $code_otp);

        if ($check_otp) {
            // Data update status user
            $data = array(
                'is_active' => 1
            );

            // Update status user berdasarkan EMAIL
            $this->User_m->update_status_user($email, $data);

            // Hapus OTP agar tidak bisa dipakai 2x (Opsional tapi disarankan)
            $this->User_m->delete_otp($email);

            // Hapus session verify_email
            $this->session->unset_userdata('verify_email');

            $this->session->set_flashdata('success', 'Akun berhasil diverifikasi. Silakan Login.');
            redirect('page/account'); // Arahkan ke halaman login
        } else {
            $this->session->set_flashdata('failed', 'Kode OTP salah atau tidak ditemukan.');
            redirect('page/otp');
        }
    }


}
