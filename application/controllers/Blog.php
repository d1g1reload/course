<?php

class Blog extends CI_Controller
{
    public function list()
    {
        $data['content'] = "app/blog/list";
        $this->load->view('layouts/main', $data);
    }


}
