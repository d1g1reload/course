<?php

class Student extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        if (!$this->session->userdata('is_loggedin')) {

            $this->session->set_flashdata('failed', 'Silahkan login terlebih dahulu');

            redirect('admin');
        }
    }
    function index()
    {
        $user_id = $this->session->userdata('user_id');
        $data['no_data'] = $this->Student_m->check_class($user_id);
        $data['class'] = $this->Student_m->get_class_user($user_id);
        $data['content_admin'] = "app/course/student/list";
        $this->load->view('layouts/panel', $data);
    }

    function student_lecture($id)
    {
        $uri = $this->uri->segment(4);
        $data['course'] = $this->Student_m->get_course_enroll_id($uri);
        $data['lesson'] = $this->Student_m->get_course_enroll_detail($id);
        $data['content'] = "app/course/student/main";
        $this->load->view('layouts/main', $data);
    }

    function student_lecture_play($id, $detail_id)
    {

        $data['course'] = $this->Student_m->get_course_enroll_id($id);
        $data['lesson'] = $this->Student_m->get_course_enroll_detail($id);
        $data['detail_lesson'] = $this->Student_m->get_course_enroll_detail_id($id, $detail_id);
        $data['content'] = "app/course/student/playlist";
        $this->load->view('layouts/main', $data);
    }
}
