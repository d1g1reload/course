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
        $update_payment_user = array(
            'payment_status' => 2,
            'update_at' => $update_at
        );
        $success_update = $this->Purchase_m->update_payment_status($trx_reff, $update_payment_user);

        $is_success = true;
        if ($is_success) {
            $update_enroll_user = array(
                'enroll_status' => 1,
            );
            //daftarkan pengguna ke kursus
            $this->Purchase_m->update_enroll_user($trx_reff, $update_enroll_user);

            // Simpan materi kursus untuk pengguna
            $this->Purchase_m->save_course_materials_for_user($user_id, $course_id);

            //update saldo insturktur
            $course_data = $this->Purchase_m->get_user_id_instruktur($course_id);
            $course_price = $course_data->course_price;
            $course_percent_instruktur = 70;
            $course_percent_admin = 30;

            $course_instruktur_id = $course_data->user_id;
            $instruktur_profile = $this->Purchase_m->get_saldo_user($course_instruktur_id);
            $saldo_instruktur = $instruktur_profile->saldo;
            $calculate_instruktur = ($course_percent_instruktur / 100) * $course_price;
            $course_price_instruktur = $calculate_instruktur;
            $update_saldo_instruktur = $saldo_instruktur + $course_price_instruktur;
            $update_instruktur = [
                'saldo' => $update_saldo_instruktur
            ];
            $this->Purchase_m->update_saldo($course_instruktur_id, $update_instruktur);

            //update saldo administrator
            $admin_id = 4;
            $admin_profile = $this->Purchase_m->get_saldo_user($admin_id);
            $saldo_admin = $admin_profile->saldo;
            $calculate_admin = ($course_percent_admin / 100) * $course_price;

            $course_price_admin = $calculate_admin;
            $update_saldo_admin = $saldo_admin + $course_price_admin;
            $update_admin = [
                'saldo' => $update_saldo_admin
            ];
            $this->Purchase_m->update_saldo($admin_id, $update_admin);


        }
        $this->session->set_flashdata('success', 'Berhasil Approve Pembayaran.');
        redirect('dashboard');
    }
}
