<?php

class Course extends CI_Controller
{


    function course_detail($id = null)
    {
        $data['course'] = $this->Course_m->get_course_id($id);
        $data['course_detail'] = $this->Course_m->get_course_detail($id);
        $data['content'] = "app/course/detail";
        $this->load->view('layouts/main', $data);
    }
}
