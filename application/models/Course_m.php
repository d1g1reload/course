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

    public function get_course_list()
    {
        $q = "SELECT c.id,c.user_id,c.course_banner,c.course_title,
                c.course_price,c.course_discount,c.course_status,c.course_category,
                c.course_level,u.fullname FROM tm_course AS c 
                INNER JOIN users AS u ON u.id = c.user_id";
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

    public function course_add_detail($course_data)
    {
        $this->db->insert('tm_course_detail', $course_data);
    }


    function is_purchase($user_id, $course_id)
    {
        $this->db->where('enroll_user_id', $user_id);
        $this->db->where('enroll_course_id', $course_id);
        $this->db->where('enroll_status', 1);
        return $this->db->get('course_enrollments')->num_rows() > 0;
    }

    /**
     * statistik
     */

    function student_buy_completed($user_id)
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

    function student_buy_not_completed($user_id)
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
}
