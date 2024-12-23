<?php

class Main extends CI_Controller
{
    public function index()
    {

        $data['course'] = $this->Course_m->get_course();
        $data['total_course'] = $this->Course_m->count_course();
        $data['content'] = "app/main";
        $this->load->view('layouts/main', $data);
    }

    public function about()
    {

        $data['content'] = "app/about/about";
        $this->load->view('layouts/main', $data);

    }
}
