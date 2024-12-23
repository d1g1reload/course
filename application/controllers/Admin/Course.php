<?php

date_default_timezone_set('Asia/Jakarta');
class Course extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        if (!$this->session->userdata('is_loggedin')) {

            $this->session->set_flashdata('failed', 'Silahkan login terlebih dahulu');

            redirect('admin');
        }
    }


    public function index()
    {
        $data['course'] = $this->Course_m->get_course();
        $data['content_admin'] = "app/backend/course/list";
        $this->load->view('layouts/panel', $data);
    }


    public function page_create()
    {
        $data['level'] = $this->Course_m->get_level_course();
        $data['content_admin'] = "app/backend/course/create";
        $this->load->view('layouts/panel', $data);
    }

    public function course_create()
    {
        $user_id = $this->session->userdata('user_id');
        $title = $this->input->post('course_title', true);
        $course_price = $this->input->post('course_price', true);
        $course_discount = $this->input->post('course_discount', true);
        $description = $this->input->post('course_description', true);
        $course_status = $this->input->post('course_status', true);
        $course_category = $this->input->post('course_category', true);
        $course_level = $this->input->post('course_level', true);
        $created = date('Y-m-d h:i:s');

        if ($_FILES and $_FILES['course_banner']['name']) {
            $config = array(
                'upload_path' => './assets/course/',
                'allowed_types' => 'jpeg|jpg|png|JPG|PNG|JPEG',
                'max_size' => 10000,
                'encrypt_name' => true,
                'remove_spaces' => true
            );

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('course_banner')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('courselist');
            } else {
                if ($course_category == 0) {
                    $course_price = 0;
                }
                $file = $this->upload->data();
                $product_course = array(
                    'user_id'            => $user_id,
                    'course_banner'      => $file['file_name'],
                    'course_title'       => $title,
                    'course_slug'        => slug($title),
                    'course_price'       => $course_price,
                    'course_discount'    => $course_discount,
                    'course_description' => $description,
                    'course_category'    => $course_category,
                    'course_status'      => $course_status,
                    'course_level'       => $course_level,
                    'course_create'      => $created,

                );
                // var_dump($product_course);
                if ($product_course) {
                    $this->Course_m->course_add($product_course);
                    $this->session->set_flashdata('success', 'Create Course Success.');
                    redirect('courselist');
                } else {

                    $this->session->set_flashdata('error', 'Create Course Failed.');
                    redirect('courselist');
                }
            }
        }
    }

    public function page_detail($id)
    {
        $data['course'] = $this->Course_m->get_course_id($id);
        $data['course_detail'] = $this->Course_m->get_course_detail($id);
        $data['content_admin'] = "app/backend/course/detail";
        $this->load->view('layouts/panel', $data);
    }

    public function preview()
    {

        $this->load->library('Course_lib');

        $course_id = $this->input->post('course_id', true);
        $video_code = $this->input->post('video_val', true);

        $video = $this->course_lib->youtube_api($video_code);
        $json = json_encode($video, JSON_UNESCAPED_SLASHES);
        $decode = json_decode($json);
        $data['youtube_code'] = $decode->id;
        $data['youtube_title'] = $decode->snippet->title;
        $data['youtube_duration'] = $this->course_lib->convert_time_youtube($decode->contentDetails->duration);
        $data['course_id'] = $course_id;

        $data['content_admin'] = "app/backend/course/preview";
        $this->load->view('layouts/panel', $data);
    }

    public function course_submit()
    {
        $content_id             = $this->input->post('course_id', true);
        $content_title          = $this->input->post('course_detail_title', true);
        $content_duration       = $this->input->post('course_detail_duration', true);
        $content_video_code     = $this->input->post('course_detail_video_code', true);
        $content_description    = $this->input->post('course_detail_description', true);
        $content_created        = date('Y-m-d h:i:s');

        $content_data = array(
            'course_id' => $content_id,
            'course_detail_title' => $content_title,
            'course_detail_duration' => $content_duration,
            'course_detail_video_code' => $content_video_code,
            'course_detail_description' => $content_description,
            'course_detail_created' => $content_created,
        );

        if ($content_data) {
            $this->Course_m->course_add_detail($content_data);
            $this->session->set_flashdata('success', 'Create Content Detail Success.');
            redirect('admin/page/course/detail/' . $content_id);
        } else {
            $this->session->set_flashdata('error', 'Create Content Detail Failed.');
            redirect('admin/page/course/detail/' . $content_id);
        }
    }
}
