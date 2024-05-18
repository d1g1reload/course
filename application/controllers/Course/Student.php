<?php

class Student extends CI_Controller
{


    function student_lecture($id)
    {
        $uri = $this->uri->segment(4);
        $data['course'] = $this->Course_m->get_course_id($uri);
        $data['lesson'] = $this->Course_m->get_course_detail($id);
        $data['content'] = "app/course/student/main";
        $this->load->view('layouts/main', $data);
    }

    function student_lecture_play($id, $detail_id)
    {

        $data['course'] = $this->Course_m->get_course_id($id);
        $data['lesson'] = $this->Course_m->get_course_detail($id);
        $data['detail_lesson'] = $this->Course_m->get_course_detail_id($id, $detail_id);
        $data['content'] = "app/course/student/playlist";
        $this->load->view('layouts/main', $data);
    }
}
