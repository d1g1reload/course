<?php

class Course_m extends CI_Model
{
    public function get_course()
    {

        return $this->db->get('tm_course')->result();
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
            c.course_discount,c.course_status,c.course_category,cl.level_name
            FROM tm_course AS c
            INNER JOIN tm_course_level AS cl ON cl.id  = c.course_level WHERE c.id = '$id'";
        return $this->db->query($q)->row();
    }

    public function get_course_detail($id)
    {
        $this->db->select('c.id,c.course_title,c_detail.id as detail_id,c_detail.course_id,
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
}
