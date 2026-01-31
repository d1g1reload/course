<?php

class Course extends CI_Controller
{
    public function course_detail($id = null)
    {
        // PERBAIKAN: Cek keberadaan KURSUSNYA, bukan materinya.
        // Gunakan get_course_id, karena ini mengambil dari tabel tm_course
        $check_course_exist = $this->Course_m->get_course_id($id);

        // Jika data kursus di tabel utama tidak ditemukan, baru redirect
        if (empty($check_course_exist)) {
            redirect('main');
            return; // Tambahkan return agar script di bawahnya tidak jalan
        }

        $user_id = $this->session->userdata('user_id');
        $data['is_purchased'] = false;

        // Ambil materi untuk menghitung durasi
        $materi_course = $this->Course_m->get_course_detail($id);

        $totalDurationInSeconds = 0;

        // Menghitung total durasi (Hanya loop jika ada materi)
        if (!empty($materi_course)) {
            foreach ($materi_course as $course) {
                // Pastikan format duration valid sebelum explode untuk mencegah error
                if (!empty($course->course_detail_duration)) {
                    $parts = explode(":", $course->course_detail_duration);
                    // Handle jika formatnya H:M:S atau M:S
                    if (count($parts) == 3) {
                        list($hours, $minutes, $seconds) = $parts;
                        $totalDurationInSeconds += ($hours * 3600) + ($minutes * 60) + $seconds;
                    }
                }
            }
        }

        // Konversi total detik kembali ke format HH:MM:SS
        $totalHours = floor($totalDurationInSeconds / 3600);
        $remainingSeconds = $totalDurationInSeconds % 3600;
        $totalMinutes = floor($remainingSeconds / 60);
        $totalSeconds = $remainingSeconds % 60;

        $totalDuration = sprintf("%02d:%02d:%02d", $totalHours, $totalMinutes, $totalSeconds);

        // Hitung Diskon
        // $check_course_exist sudah berisi data kursus (dari get_course_id di atas), jadi kita pakai variabel itu saja
        $discount_amount = ($check_course_exist->course_price / 100) * $check_course_exist->course_discount;
        $final_price = $check_course_exist->course_price - $discount_amount;

        // Passing data ke View
        $data['course'] = $check_course_exist; // Data detail kursus (Judul, Banner, Deskripsi)
        $data['course_detail'] = $materi_course; // List Video/Materi (Bisa kosong jika belum ada materi)
        $data['discount'] = $final_price;
        $data['totalDuration'] = $totalDuration;
        $data['is_purchased'] = $this->Course_m->is_purchase($user_id, $id);

        $data['content'] = "app/course/detail";
        $this->load->view('layouts/main', $data);
    }
}
