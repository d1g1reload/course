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
        $this->db->where('email', $email);
        $account = $this->db->get('users')->row();
        if ($account != null) {
            if (password_verify($password, $account->password)) {
                return $account;
            }
        }
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
        $this->db->where('phone', $phone)->update('users', $data);
    }

    public function saldo_user($user_id)
    {
        return $this->db->where('id', $user_id)->get('users')->row();
    }

    /**
     * otp
     */

    public function save_otp($dataotp)
    {
        $this->db->insert('otp', $dataotp);
    }

    public function otp_temp($otp_code)
    {
        return $this->db->where('otp_code', $otp_code)->get('otp')->row();
    }

    public function otp_verify($otp_code)
    {
        return $this->db->where('otp_code', $otp_code)->get('otp')->row();
    }

    public function update_counter_otp($otp_code, $data)
    {
        $this->db->where('otp_code', $otp_code)->update('otp', $data);
    }

    public function isOTPExists($otp_code)
    {
        $this->db->where('otp_code', $otp_code);
        $query = $this->db->get('otp'); // Asumsikan tabel OTP bernama 'otps'
        return $query->num_rows() > 0; // Jika ada, return true
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
