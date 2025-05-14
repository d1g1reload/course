<?php

class Student_m extends CI_Model
{
    public function check_class($user_id)
    {
        $this->db->where('enroll_user_id', $user_id);
        return $this->db->get('course_enrollments')->num_rows();
    }

    public function get_class_user($user_id)
    {
        $q = "SELECT * FROM course_enrollments
        INNER JOIN tm_course ON tm_course.id = course_enrollments.enroll_course_id
        WHERE course_enrollments.enroll_status='1' and course_enrollments.enroll_user_id='$user_id'";
        return $this->db->query($q)->result();
    }

    public function get_course_enroll_id($id)
    {
        $q = "SELECT * FROM course_enrollments
            WHERE course_enrollments.enroll_course_id = '$id'";
        return $this->db->query($q)->row();
    }

    public function get_course_enroll_detail($id, $user_id)
    {
        $q = "SELECT u_lesson.lesson_course_id,u_lesson.lesson_detail_id,c_detail.course_detail_title
                FROM user_lessons as u_lesson
                INNER JOIN tm_course AS c ON c.id = u_lesson.lesson_course_id
                INNER JOIN tm_course_detail as c_detail ON c_detail.id = u_lesson.lesson_detail_id
                WHERE u_lesson.lesson_course_id='$id' AND u_lesson.lesson_user_id = '$user_id'
                ORDER BY c_detail.course_order asc";
        return $this->db->query($q)->result();
    }

    public function get_course_enroll_detail_id($id, $detail_id_lesson)
    {

        $query = "SELECT * FROM user_lessons as u_lesson 
         INNER JOIN tm_course_detail as c_detail ON c_detail.id = u_lesson.lesson_detail_id 
		  INNER JOIN tm_course as c ON c.id = u_lesson.lesson_course_id 
        WHERE u_lesson.lesson_course_id = '$id' AND u_lesson.lesson_detail_id = '$detail_id_lesson'";
        return $this->db->query($query)->row();
    }
}
