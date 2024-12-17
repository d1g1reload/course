<?php

class Main extends CI_Controller
{

    function index()
    {

        $data['course'] = $this->Course_m->get_course();
        $data['total_course'] = $this->Course_m->count_course();
        $data['content'] = "app/main";
        $this->load->view('layouts/main', $data);
    }
}
