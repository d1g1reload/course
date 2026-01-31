<?php

class User_m extends CI_Model
{
    public function get_mentor()
    {
        return $this->db->get('users')->where('role_id', 2)->result();
    }

    public function create($data)
    {
        $this->db->insert('users', $data);
    }

    public function get_user($email)
    {
        return $this->db->where('email', $email)->get('users')->row();
    }

    public function login($email, $password)
    {
        $account = $this->db->where('email', $email)
                            ->get('users')
                            ->row();

        if (!$account) {
            return null; // email tidak ditemukan
        }

        if (!password_verify($password, $account->password)) {
            return false; // password salah
        }

        return $account; // sukses
    }

    public function check_email($email)
    {
        return $this->db->where('email', $email)->get('users')->num_rows();
    }

    public function updated_password($email, $data_password)
    {
        return $this->db->where('email', $email)->update('users', $data_password);
    }

    public function update_status_user($phone, $data)
    {
        $this->db->where('email', $phone)->update('users', $data);
    }

    public function saldo_user($user_id)
    {
        return $this->db->where('id', $user_id)->get('users')->row();
    }

    /**
     * otp
     */

    // Simpan OTP baru
    public function save_otp($dataotp)
    {
        $this->db->insert('otp', $dataotp);
    }

    // Cek apakah kode OTP ada (untuk mencegah duplikat saat generate)
    public function isOTPExists($otp_code)
    {
        $this->db->where('otp_code', $otp_code);
        $query = $this->db->get('otp');
        return $query->num_rows() > 0;
    }

    // Fungsi Utama Verifikasi: Cek kombinasi Email dan Kode OTP
    public function verify_otp_email($email, $otp_code)
    {
        return $this->db->where('email', $email)
                    ->where('otp_code', $otp_code)
                    ->get('otp')
                    ->row();
    }

    // Hapus OTP setelah berhasil dipakai (Opsional, untuk kebersihan database)
    public function delete_otp($email)
    {
        $this->db->where('email', $email)->delete('otp');
    }



    /**
     * update user
     */

    public function get_profile_user($user_id)
    {
        return $this->db->where('id', $user_id)->get('users')->row();
    }

    public function update_profile_user($user_id, $data)
    {
        return $this->db->where('id', $user_id)->update('users', $data);
    }


}
