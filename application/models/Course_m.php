<?php

class Course_m extends CI_Model
{

    function get_course()
    {
        return $this->db->get('tm_course')->result();
    }

    function get_course_id($id)
    {
        return $this->db->where('id', $id)->get('tm_course')->row();
    }

    function get_course_detail($id)
    {
        $this->db->select('c.id,c.course_name,c_detail.id as detail_id,c_detail.course_id ,c_detail.course_detail_name,c_detail.course_video');
        $this->db->from('tm_course_detail as c_detail');
        $this->db->join('tm_course as c', ' c.id = c_detail.course_id', 'inner');
        $this->db->where('c_detail.course_id', $id);
        return $this->db->get()->result();
    }

    function get_course_detail_id($id, $detail_id_lesson)
    {
        // $this->db->select('c.id,c.course_name,c_detail.id as "detail_id" ,c_detail.course_detail_name,c_detail.course_video');
        // $this->db->from('tm_course_detail as c_detail');
        // $this->db->join('tm_course as c', ' c.id = c_detail.course_id', 'inner');
        // $this->db->where('c_detail.course_id', $id);
        // $this->db->where('c_detail.detail_id', $detail_id_lesson);
        $query = "SELECT c.id, c.course_name, c_detail.id, 
        c_detail.course_detail_name, c_detail.course_video FROM tm_course_detail as c_detail 
        INNER JOIN tm_course as c ON c.id = c_detail.course_id 
        WHERE c_detail.course_id = '$id' AND c_detail.id = '$detail_id_lesson'";
        return $this->db->query($query)->row();

        // return $this->db->where('id', $id)->get('tm_course_detail')->row();
    }
}