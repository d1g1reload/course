<?php

class Course extends CI_Controller
{


    function course_detail($id = null)
    {
        $discount = $this->Course_m->get_course_id($id);
        $total_discount = ($discount->course_price / 100) * $discount->course_discount;
        $final_price = $discount->course_price - $total_discount;
        $data['course'] = $this->Course_m->get_course_id($id);
        $data['course_detail'] = $this->Course_m->get_course_detail($id);
        $data['discount'] = $final_price;
        $data['content'] = "app/course/detail";
        $this->load->view('layouts/main', $data);
    }
}
