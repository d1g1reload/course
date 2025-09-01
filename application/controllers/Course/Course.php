<?php

class Course extends CI_Controller
{
    public function course_detail($id = null)
    {
        $check_id_course = $this->Course_m->get_course_detail($id);
        if (empty($check_id_course)) {
            redirect('main');
        }

        $user_id = $this->session->userdata('user_id');
        $data['is_purchased'] = false;

        $duration = $this->Course_m->get_course_detail($id);
        $totalDurationInSeconds = 0;

        // Menghitung total durasi
        foreach ($duration as $course) {
            list($hours, $minutes, $seconds) = explode(":", $course->course_detail_duration);
            $totalDurationInSeconds += ($hours * 3600) + ($minutes * 60) + $seconds;
        }

        // Konversi total detik kembali ke format HH:MM:SS
        $totalHours = floor($totalDurationInSeconds / 3600);
        $remainingSeconds = $totalDurationInSeconds % 3600;
        $totalMinutes = floor($remainingSeconds / 60);
        $totalSeconds = $remainingSeconds % 60;

        $totalDuration = sprintf("%02d:%02d:%02d", $totalHours, $totalMinutes, $totalSeconds);

        $data['totalDuration'] = $totalDuration;
        $discount = $this->Course_m->get_course_id($id);
        $total_discount = ($discount->course_price / 100) * $discount->course_discount;
        $final_price = $discount->course_price - $total_discount;
        $data['course'] = $this->Course_m->get_course_id($id);
        $data['course_detail'] = $this->Course_m->get_course_detail($id);
        $data['discount'] = $final_price;
        $data['totalDuration'] = $totalDuration;
        $data['is_purchased'] = $this->Course_m->is_purchase($user_id, $id);
        $data['content'] = "app/course/detail";
        $this->load->view('layouts/main', $data);
    }
}
