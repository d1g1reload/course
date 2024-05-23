<?php

class Course extends CI_Controller
{

    function index()
    {

        $data['content_admin'] = "app/backend/course/list";
        $this->load->view('layouts/panel', $data);
    }

    function preview()
    {
        $this->load->library('Course_lib');
        $video_code = $this->input->post('video_val', true);
        $apikey = "AIzaSyAaw-003dXTKM1R0ahWTxESbUVMu6EhQqM";
        $youtube = new Madcoda\Youtube\Youtube(array('key' => $apikey));
        $video = $youtube->getVideoInfo($video_code);
        $json = json_encode($video, JSON_UNESCAPED_SLASHES);
        $decode = json_decode($json);
        $data['youtube_code'] = $decode->id;
        $data['youtube_title'] = $decode->snippet->title;
        $data['youtube_duration'] = $this->course_lib->convert_time_youtube($decode->contentDetails->duration);


        $data['content_admin'] = "app/backend/course/preview";
        $this->load->view('layouts/panel', $data);
    }
}
