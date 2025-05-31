<?php

class Purchase_m extends CI_Model
{
    public function get_list_user_invoice()
    {
        $q = "SELECT * FROM purchases
        INNER JOIN users ON users.id = purchases.purchase_user_id
        INNER JOIN tm_course ON tm_course.id = purchases.purchase_course_id";
        return $this->db->query($q)->result();
    }

    public function get_list_payment_pending()
    {
        $q = "SELECT * FROM purchases
        INNER JOIN users ON users.id = purchases.purchase_user_id
        INNER JOIN tm_course ON tm_course.id = purchases.purchase_course_id
        where payment_status='1'";
        return $this->db->query($q)->result();
    }
    public function get_list_invoice($user_id)
    {
        $q = "SELECT * FROM purchases
        INNER JOIN users ON users.id = purchases.purchase_user_id
        INNER JOIN tm_course ON tm_course.id = purchases.purchase_course_id
        WHERE purchases.purchase_user_id='$user_id'";
        return $this->db->query($q)->result();
    }

    public function get_invoice_id($inv_id)
    {
        $q = "SELECT * FROM purchases
        INNER JOIN users ON users.id = purchases.purchase_user_id
        INNER JOIN tm_course ON tm_course.id = purchases.purchase_course_id
        WHERE purchases.purchase_id='$inv_id'";
        return $this->db->query($q)->row();
    }

    public function create_purchase($data)
    {
        $this->db->insert('purchases', $data);
        return $this->db->insert_id(); // mengembalikan id
    }

    public function update_payment_status($trx_reff, $data)
    {
        $this->db->where('transaction_reff', $trx_reff);
        $this->db->update('purchases', $data);
    }

    public function insert_enroll_user($enroll_user)
    {
        $this->db->insert('course_enrollments', $enroll_user);
    }

    public function save_course_materials_for_user($user_id, $course_id)
    {
        // Ambil semua materi pelajaran dari kursus
        $this->db->select('id');
        $this->db->where('course_id', $course_id);
        $lessons = $this->db->get('tm_course_detail')->result();

        // Persiapkan data untuk disimpan
        $data = [];
        foreach ($lessons as $lesson) {
            $data[] = [
                'lesson_user_id' => $user_id,
                'lesson_course_id' => $course_id,
                'lesson_detail_id' => $lesson->id,
                'completion_status' => 0,
                'created_at' => date('Y-m-d H:i:s'),
            ];
        }

        // Insert batch data ke tabel user_lessons
        if (!empty($data)) {
            $this->db->insert_batch('user_lessons', $data);
        }
    }

    public function update_enroll_user($trx_reff, $update_enroll_user)
    {
        $this->db->where('enroll_reff', $trx_reff);
        $this->db->update('course_enrollments', $update_enroll_user);
    }

    /**
     * saldo instruktur dan user
     */

    public function get_user_id_instruktur($course_id)
    {
        return $this->db->where('id', $course_id)->get('tm_course')->row();
    }

    public function get_saldo_user($saldo_user_id)
    {
        return $this->db->where('id', $saldo_user_id)->get('users')->row();
    }

    public function update_saldo($course_user_id, $saldo_data)
    {
        $this->db->where('id', $course_user_id)->update('users', $saldo_data);
    }
}
