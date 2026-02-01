<?php

date_default_timezone_set('Asia/Jakarta');
class Course extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        if (!$this->session->userdata('is_loggedin')) {

            $this->session->set_flashdata('failed', 'Silahkan login terlebih dahulu');

            redirect('main');
        }
    }


    public function index()
    {
        $user_id = $this->session->userdata('user_id');
        $data['course'] = $this->Course_m->get_course($user_id);
        $data['content_admin'] = "app/backend/course/list";
        $this->load->view('layouts/panel', $data);
    }


    public function page_create()
    {
        $data['level'] = $this->Course_m->get_level_course();
        $data['category'] = $this->Course_m->get_categories();
        $data['content_admin'] = "app/backend/course/create";
        $this->load->view('layouts/panel', $data);
    }

    public function course_create()
    {
        $user_id = $this->session->userdata('user_id');
        $title = $this->input->post('course_title', true);
        $course_language = $this->input->post('course_category', true);
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
                    'category_id'        => $course_language,
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

    // FILE: controllers/Admin/Course.php

    public function preview()
    {
        $this->load->library('Course_lib');

        $course_id  = $this->input->post('course_id');
        $video_code = $this->input->post('video_val');

        // --- PERBAIKAN: JANGAN AMBIL DARI POST, TAPI HITUNG DARI DB ---
        // $order_value = $this->input->post('order_value'); // Hapus atau abaikan baris ini

        // Panggil fungsi model yang baru kita buat
        $order_value = $this->Course_m->get_next_order($course_id);
        // -------------------------------------------------------------

        $video = $this->course_lib->youtube_api($video_code);

        // Parse data API (Sesuai kode Anda sebelumnya)
        $json   = json_encode($video, JSON_UNESCAPED_SLASHES);
        $decode = json_decode($json);

        if (!isset($decode->id) || $video_code != $decode->id) {
            $this->session->set_flashdata('failed', 'Kode video youtube salah atau tidak ditemukan.');
            redirect('admin/page/course/detail/' . $course_id);
        } else {
            $data['youtube_code']     = $decode->id;
            $data['youtube_title']    = $decode->snippet->title;
            $data['youtube_duration'] = $this->course_lib->convert_time_youtube($decode->contentDetails->duration);
            $data['course_id']        = $course_id;

            // Kirim urutan yang sudah dihitung akurat dari DB
            $data['course_order']     = $order_value;

            $data['content_admin']    = "app/backend/course/preview";
            $this->load->view('layouts/panel', $data);
        }
    }

    public function preview_detail()
    {

        $this->load->library('Course_lib');

        $course_id = $this->input->post('course_id', true);
        $video_code = $this->input->post('video_val', true);
        $order_value = $this->input->post('order_value');
        $detail_id = $this->input->post('detail_id');

        $video = $this->course_lib->youtube_api($video_code);
        $json = json_encode($video, JSON_UNESCAPED_SLASHES);
        $decode = json_decode($json);

        if ($video_code != $decode->id) {
            $this->session->set_flashdata('failed', 'Kode video youtube yang anda masukan salah, silahkan coba lagi.');
            redirect('admin/page/course/detail/' . $course_id);
        } else {
            $data['youtube_code'] = $decode->id;
            $data['youtube_title'] = $decode->snippet->title;
            $data['youtube_duration'] = $this->course_lib->convert_time_youtube($decode->contentDetails->duration);
            $data['course_id'] = $course_id;
            $data['course_order'] = $order_value;
            $data['detail_id'] = $detail_id;
            $data['content_admin'] = "app/backend/course/preview_update";
            $this->load->view('layouts/panel', $data);
        }
    }


    public function course_detail_update()
    {
        // 1. Ambil Input
        $detail_id              = $this->input->post('detail_id', true);
        $content_id             = $this->input->post('course_id', true);
        $new_order              = $this->input->post('course_order');

        $content_title          = $this->input->post('course_detail_title', true);
        $content_duration       = $this->input->post('course_detail_duration', true);
        $content_video_code     = $this->input->post('course_detail_video_code', true);
        $content_description    = $this->input->post('course_detail_description', false);
        $content_created        = date('Y-m-d H:i:s');

        // --- LOGIKA REORDERING ---
        // Kita tetap pakai reorder agar posisi target tercapai dulu
        $old_data = $this->db->get_where('tm_course_detail', ['id' => $detail_id])->row();

        if ($old_data) {
            $old_order = $old_data->course_order;
            if ($new_order != $old_order) {
                $this->Course_m->reorder_content($content_id, $old_order, $new_order);
            }
        }

        // 2. SIMPAN DATA UTAMA
        $content_data = array(
            'course_id'                 => $content_id,
            'course_order'              => $new_order,
            'course_detail_title'       => $content_title,
            'course_detail_duration'    => $content_duration,
            'course_detail_video_code'  => $content_video_code,
            'course_detail_description' => $content_description,
            'course_detail_created'     => $content_created,
        );

        $update = $this->Course_m->course_detail_update($detail_id, $content_data);

        // --- LOGIKA PENYEMBUH (AUTO FIX) ---
        // PENTING: Jalankan ini setelah update agar urutan 7, 5, 4 kembali jadi 1, 2, 3..
        $this->Course_m->normalize_order($content_id);
        // -----------------------------------

        if ($update) {
            $this->session->set_flashdata('success', 'Materi berhasil diupdate dan urutan dirapikan.');
        } else {
            $this->session->set_flashdata('error', 'Gagal mengupdate materi.');
        }

        redirect('admin/page/course/detail/' . $content_id);
    }

    public function delete_detail($detail_id, $course_id)
    {
        // 1. Lakukan Penghapusan
        $delete = $this->Course_m->delete_course_detail($detail_id);

        if ($delete) {
            // 2. PENTING: Rapikan urutan (Self-Healing)
            // Karena ada yang dihapus, pasti ada nomor yang bolong.
            // Fungsi ini akan menambal celah tersebut.
            $this->Course_m->normalize_order($course_id);

            $this->session->set_flashdata('success', 'Materi berhasil dihapus dan urutan otomatis dirapikan.');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus materi.');
        }

        // Redirect kembali ke halaman detail kursus
        redirect('admin/page/course/detail/' . $course_id);
    }

    public function course_submit()
    {
        // Ambil Input
        $content_id             = $this->input->post('course_id', true);
        $course_order           = $this->input->post('course_order'); // Ini ambil angka dari View Preview
        $content_title          = $this->input->post('course_detail_title', true);
        $content_duration       = $this->input->post('course_detail_duration', true);
        $content_video_code     = $this->input->post('course_detail_video_code', true);

        // PERBAIKAN 1: Gunakan FALSE agar tag HTML dari Summernote tidak hilang
        $content_description    = $this->input->post('course_detail_description', false);

        $content_created        = date('Y-m-d H:i:s'); // Format jam H besar (24 jam)

        $content_data = array(
            'course_id'                 => $content_id,
            'course_order'              => $course_order,
            'course_detail_title'       => $content_title,
            'course_detail_duration'    => $content_duration,
            'course_detail_video_code'  => $content_video_code,
            'course_detail_description' => $content_description,
            'course_detail_created'     => $content_created,
        );

        // PERBAIKAN 2: Panggil Model dan simpan statusnya (True/False)
        $insert = $this->Course_m->course_add_detail($content_data);

        if ($insert) {
            $this->session->set_flashdata('success', 'Berhasil menambahkan materi baru.');
        } else {
            $this->session->set_flashdata('error', 'Gagal menambahkan materi. Silakan coba lagi.');
        }

        redirect('admin/page/course/detail/' . $content_id);
    }


    public function page_edit($id)
    {
        $data['course'] = $this->Course_m->get_course_id($id);
        $data['content_admin'] = "app/backend/course/edit";
        $this->load->view('layouts/panel', $data);
    }

    public function course_edit()
    {

        $title = $this->input->post('course_title', true);
        $description = $this->input->post('course_description', true);
        $id = $this->input->post('course_id');
        $product_course = array(
            'course_title'       => $title,
            'course_description' => $description,
         );

        if ($product_course) {
            $this->Course_m->course_update($id, $product_course);
            $this->session->set_flashdata('success', 'Update Course Success.');
            redirect('courselist');
        } else {

            $this->session->set_flashdata('error', 'Update Course Failed.');
            redirect('courselist');
        }
    }

    public function course_delete($id)
    {
        $deleteCourse = $this->Course_m->delete_course($id);
        if ($deleteCourse) {
            $this->Course_m->delete_detail_course($id);
            $this->session->set_flashdata('success', 'Delete Course Success.');
            redirect('courselist');
        }
    }

    /**
     * Blog Section
     */

    public function blog_list()
    {
        $data['content_admin'] = "app/backend/blog/list";
        $this->load->view('layouts/panel', $data);
    }

    public function blog_add()
    {
        $data['content_admin'] = "app/backend/blog/create";
        $this->load->view('layouts/panel', $data);
    }

    public function blog_submit()
    {

        $category = $this->input->post('blog_category', true);
        $title = $this->input->post('blog_title', true);
        $description = $this->input->post('blog_description', false);
        $created = date('Y-m-d h:i:s');

        if ($_FILES and $_FILES['blog_image']['name']) {
            $config = array(
                'upload_path' => './assets/blogimage/',
                'allowed_types' => 'jpeg|jpg|png|JPG|PNG|JPEG',
                'max_size' => 10000,
                'encrypt_name' => true,
                'remove_spaces' => true
            );

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('blog_image')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('course/blog');
            } else {

                $file = $this->upload->data();
                $product_blog = array(
                    'blog_image'        => $file['file_name'],
                    'blog_category'     => $category,
                    'blog_title'        => $title,
                    'blog_description'  => $description,
                    'blog_date'         => $created,

                );

                if ($product_blog) {
                    $this->Course_m->blog_add($product_blog);
                    $this->session->set_flashdata('success', 'Create Blog Success.');
                    redirect('course/blog');
                } else {

                    $this->session->set_flashdata('error', 'Create Blog Failed.');
                    redirect('course/blog');
                }
            }
        }
    }
}
