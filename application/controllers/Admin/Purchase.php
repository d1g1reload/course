<?php

date_default_timezone_set('Asia/Jakarta');

class Purchase extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        if (!$this->session->userdata('is_loggedin')) {

            $this->session->set_flashdata('failed', 'Silahkan login terlebih dahulu');

            redirect('page/account');
        }
    }
    public function page_purchase()
    {
        $course_id = $this->input->post('course_id');
        $data['detail'] = $this->Course_m->get_course_id($course_id);
        $data['content'] = "app/backend/purchase/buy";
        $this->load->view('layouts/main', $data);
    }
    public function create()
    {
        $user_id        = $this->session->userdata('user_id');
        $course_creator_id = $this->input->post('course_creator_id');
        $course_id      = $this->input->post('course_id');
        $purchase_date  = date('Y-m-d H:i:s');
        $price          = $this->input->post('price');
        $discount          = $this->input->post('discount');
        $payment_method = $this->input->post('payment_method');
        $transaction_reff = $this->course_lib->generateUUID();

        $data = array(
            'purchase_user_id'  => $user_id,
            'purchase_course_id' => $course_id,
            'purchase_creator_id' => $course_creator_id,
            'purchase_date'     => $purchase_date,
            'price'             => $price,
            'discount'          => $discount,
            'payment_status'    => 1,
            'payment_method'    => $payment_method,
            'transaction_reff'  => $transaction_reff,
        );


        $this->Purchase_m->create_purchase($data);
        $enroll_date = date('Y-m-d H:i:s');
        $enroll_user = array(
            'enroll_user_id' => $user_id,
            'enroll_course_id' => $course_id,
            'enroll_reff' => $transaction_reff,
            'enrollment_date' => $enroll_date
        );
        //daftarkan pengguna ke kursus
        $this->Purchase_m->insert_enroll_user($enroll_user);
        $this->session->set_flashdata('success', 'Pesanan berhasil dibuat silahkan lakukan pembayaran.');
        redirect('course/purchase/list');
    }

    public function transactions()
    {
        if ($this->session->userdata('role_id') == 1) {

            $data['purchase'] = $this->Purchase_m->get_list_user_invoice();
            $data['content_admin'] = "app/backend/purchase/list";
            $this->load->view('layouts/panel', $data);
        } else {
            $user_id = $this->session->userdata('user_id');
            $data['purchase'] = $this->Purchase_m->get_list_invoice($user_id);
            $data['content_admin'] = "app/backend/purchase/list";
            $this->load->view('layouts/panel', $data);
        }
    }
    public function detail_transaction($inv_id)
    {
        $data['detail'] = $this->Purchase_m->get_invoice_id($inv_id);
        $data['content_admin'] = "app/backend/purchase/detail";
        $this->load->view('layouts/panel', $data);
    }

    public function approve_user_course()
    {
        $trx_reff = $this->input->post('trx_reff');
        $user_id = $this->input->post('user_id');
        $course_id = $this->input->post('course_id');
        $update_at = date('Y-m-d H:i:s');

        // Mulai Transaksi Database (Agar data aman & konsisten)
        $this->db->trans_start();

        // 1. Update Status Pembayaran di tabel Purchases
        $update_payment_user = array(
            'payment_status' => 2, // 2 = Success/Paid
            'update_at' => $update_at
        );
        $this->Purchase_m->update_payment_status($trx_reff, $update_payment_user);

        // 2. Update Status Enroll (Aktifkan Kursus untuk User)
        $update_enroll_user = array(
            'enroll_status' => 1,
        );
        $this->Purchase_m->update_enroll_user($trx_reff, $update_enroll_user);

        // 3. Simpan akses materi kursus untuk pengguna
        $this->Purchase_m->save_course_materials_for_user($user_id, $course_id);

        // ==========================================
        // LOGIKA PERHITUNGAN BAGI HASIL (70:30)
        // ==========================================

        // Ambil data kursus (Harga & Diskon) & Data Instruktur
        // Pastikan fungsi ini select 'course_price', 'course_discount', dan 'user_id' (pemilik kursus)
        $course_data = $this->Purchase_m->get_user_id_instruktur($course_id);

        $base_price = $course_data->course_price;     // Harga Asli
        $discount_percent = $course_data->course_discount; // Diskon (%)

        // Hitung Nominal Diskon
        $discount_amount = ($base_price * $discount_percent) / 100;

        // Hitung Uang Masuk (Net Sales) yang akan dibagi
        $net_sales = $base_price - $discount_amount;

        // Hitung Jatah Masing-masing
        $share_instruktur = $net_sales * 0.70; // 70%
        $share_admin      = $net_sales * 0.30; // 30%

        // 4. Update Saldo Instruktur
        $course_instruktur_id = $course_data->user_id;
        $instruktur_profile = $this->Purchase_m->get_saldo_user($course_instruktur_id);

        $saldo_awal_instruktur = $instruktur_profile->saldo;
        $saldo_akhir_instruktur = $saldo_awal_instruktur + $share_instruktur;

        $update_instruktur = [
            'saldo' => $saldo_akhir_instruktur
        ];
        $this->Purchase_m->update_saldo($course_instruktur_id, $update_instruktur);

        // 5. Update Saldo Administrator
        $admin_id = 4; // ID Admin (Sebaiknya jangan hardcode, tapi ambil dari config/session jika memungkinkan)
        $admin_profile = $this->Purchase_m->get_saldo_user($admin_id);

        $saldo_awal_admin = $admin_profile->saldo;
        $saldo_akhir_admin = $saldo_awal_admin + $share_admin;

        $update_admin = [
            'saldo' => $saldo_akhir_admin
        ];
        $this->Purchase_m->update_saldo($admin_id, $update_admin);

        // Selesaikan Transaksi
        $this->db->trans_complete();

        if ($this->db->trans_status() === false) {
            // Jika ada error database
            $this->session->set_flashdata('failed', 'Terjadi kesalahan sistem, pembayaran gagal diapprove.');
        } else {
            // Jika sukses semua
            $this->session->set_flashdata('success', 'Berhasil Approve Pembayaran. Saldo Instruktur & Admin telah diperbarui.');
        }

        redirect('dashboard');
    }
}
