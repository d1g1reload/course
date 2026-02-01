<?php

class Course_m extends CI_Model
{
    public function get_course($user_id)
    {

        $q = "SELECT u.id,c.id AS course_id,c.user_id,c.course_banner,c.course_title,c.course_description,c.course_price,
            c.course_discount,c.course_status,c.course_category,c.course_create
            FROM users AS u
            INNER JOIN tm_course AS c ON c.user_id = u.id
            WHERE u.id = '$user_id'";
        return $this->db->query($q)->result();
    }

    public function get_categories()
    {
        return $this->db->get('tm_course_category')->result();
    }

    public function get_course_list()
    {
        // Perhatikan penambahan 'c.category_id' di dalam SELECT
        $q = "SELECT c.id, c.user_id, c.category_id, c.course_banner, c.course_title,
            c.course_price, c.course_discount, c.course_status, 
            c.course_level, u.fullname, tm_clevel.level_name 
            FROM tm_course AS c 
            INNER JOIN users AS u ON u.id = c.user_id
            INNER JOIN tm_course_level AS tm_clevel ON tm_clevel.id = c.course_level";
        return $this->db->query($q)->result();
    }
    public function count_course()
    {
        $q = "SELECT COUNT(*) as 'jum' FROM tm_course ";
        return $this->db->query($q)->row();
    }

    public function get_course_slug($slug)
    {

        return $this->db->where('course_slug', $slug)->get('tm_course')->row();
    }

    public function get_level_course()
    {
        return $this->db->get('tm_course_level')->result();
    }


    public function get_course_id($id)
    {
        $q = "SELECT c.id,c.user_id,c.course_banner,c.course_title,c.course_description,c.course_price,
            c.course_discount,c.course_status,c.course_category,c.course_create,cl.level_name
            FROM tm_course AS c
            INNER JOIN tm_course_level AS cl ON cl.id  = c.course_level 
            INNER JOIN users AS u ON u.id = c.user_id
            WHERE c.id = '$id'";
        return $this->db->query($q)->row();
    }

    public function get_course_detail($id)
    {
        $this->db->select('c.id,c.course_title,c.course_create,c_detail.id as detail_id,c_detail.course_id,c_detail.course_order,
        c_detail.course_detail_title,c_detail.course_detail_video_code,c_detail.course_detail_duration');
        $this->db->from('tm_course_detail as c_detail');
        $this->db->join('tm_course as c', ' c.id = c_detail.course_id', 'inner');
        $this->db->where('c_detail.course_id', $id);
        $this->db->order_by('c_detail.course_order', 'ASC');
        return $this->db->get()->result();
    }

    public function get_course_detail_id($id, $detail_id_lesson)
    {

        $query = "SELECT c.id, c.course_title, c_detail.id, c_detail.course_detail_title,
        c_detail.course_detail_duration, c_detail.course_detail_video_code FROM tm_course_detail as c_detail 
        INNER JOIN tm_course as c ON c.id = c_detail.course_id 
        WHERE c_detail.course_id = '$id' AND c_detail.id = '$detail_id_lesson'";
        return $this->db->query($query)->row();
    }

    public function course_add($product_course)
    {
        $this->db->insert('tm_course', $product_course);
    }

    public function course_update($id, $product_course)
    {
        return $this->db->where('id', $id)->update('tm_course', $product_course);
    }

    public function delete_course($id)
    {
        return $this->db->where('id', $id)->delete('tm_course');
    }

    public function delete_detail_course($id)
    {
        $this->db->where('course_id', $id)->delete('tm_course_detail');
    }

    public function course_add_detail($content_data)
    {
        $this->db->insert('tm_course_detail', $content_data);

        // Mengembalikan TRUE jika ada baris yang berhasil diinsert
        return $this->db->affected_rows() > 0;
    }

    // Di file models/Course_m.php

    public function get_next_order($course_id)
    {
        // Cari angka terbesar di kolom course_order
        $this->db->select_max('course_order');
        $this->db->where('course_id', $course_id);
        $query = $this->db->get('tm_course_detail');
        $result = $query->row();

        // Jika belum ada data, mulai dari 1. Jika ada, ambil max + 1
        return (int)$result->course_order + 1;
    }

    public function course_detail_update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tm_course_detail', $data);
        return $this->db->affected_rows() >= 0;
    }
    // Di file models/Course_m.php

    public function reorder_content($course_id, $old_order, $new_order)
    {
        if ($new_order < $old_order) {
            // KASUS 1: PINDAH KE ATAS (Misal: No 5 jadi No 2)
            // Logika: Geser materi yang ada di posisi 2, 3, 4 MUNDUR (+1) jadi 3, 4, 5.
            // Agar posisi 2 kosong buat kita.

            $this->db->set('course_order', 'course_order + 1', false);
            $this->db->where('course_id', $course_id);
            $this->db->where('course_order >=', $new_order);
            $this->db->where('course_order <', $old_order);
            $this->db->update('tm_course_detail');

        } elseif ($new_order > $old_order) {
            // KASUS 2: PINDAH KE BAWAH (Misal: No 2 jadi No 5)
            // Logika: Geser materi yang ada di posisi 3, 4, 5 MAJU (-1) jadi 2, 3, 4.
            // Ini menutup lubang bekas nomor 2 yang kita tinggalkan.

            $this->db->set('course_order', 'course_order - 1', false);
            $this->db->where('course_id', $course_id);
            $this->db->where('course_order >', $old_order);
            $this->db->where('course_order <=', $new_order);
            $this->db->update('tm_course_detail');
        }
    }

    public function normalize_order($course_id)
    {
        // Ambil semua data urutkan berdasarkan order yang sekarang
        $this->db->order_by('course_order', 'ASC');
        $this->db->where('course_id', $course_id);
        $items = $this->db->get('tm_course_detail')->result();

        $no = 1;
        foreach ($items as $item) {
            // Update ulang nomor urutnya agar rapi berurutan
            $this->db->where('id', $item->id);
            $this->db->update('tm_course_detail', ['course_order' => $no]);
            $no++;
        }
    }

    public function delete_course_detail($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tm_course_detail');

        // Mengembalikan TRUE jika berhasil hapus
        return $this->db->affected_rows() > 0;
    }

    public function is_purchase($user_id, $course_id)
    {
        $this->db->where('enroll_user_id', $user_id);
        $this->db->where('enroll_course_id', $course_id);
        $this->db->where('enroll_status', 1);
        return $this->db->get('course_enrollments')->num_rows() > 0;
    }

    /**
     * statistik
     */

    public function student_buy_completed($user_id)
    {
        $this->db->select('COUNT(*) AS total_courses_bought');
        $this->db->from('purchases');
        $this->db->where('purchase_user_id', $user_id);
        $this->db->where('payment_status', '2');
        $query = $this->db->get();

        // Mengembalikan total dari hasil query
        if ($query->num_rows() > 0) {
            return $query->row()->total_courses_bought;
        } else {
            return 0; // Jika tidak ada data
        }
    }

    public function student_buy_not_completed($user_id)
    {
        $this->db->select('COUNT(*) AS total_courses_bought');
        $this->db->from('purchases');
        $this->db->where('purchase_user_id', $user_id);
        $this->db->where('payment_status', '1');
        $query = $this->db->get();

        // Mengembalikan total dari hasil query
        if ($query->num_rows() > 0) {
            return $query->row()->total_courses_bought;
        } else {
            return 0; // Jika tidak ada data
        }
    }

    /**
     * DASHBOARD STATISTIK
     */

    public function user_count_dashboard()
    {
        return $this->db->get('users')->num_rows();
    }

    public function user_buy_count_dashboard()
    {
        $this->db->where('payment_status', 2);
        return $this->db->get('purchases')->num_rows();
    }

    /**
     * Blog
     */

    public function blog_add($data)
    {
        $this->db->insert('blogs', $data);
    }
}
