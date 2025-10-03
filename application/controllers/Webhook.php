<?php


class Webhook extends CI_Controller
{
    public function index()
    {
        return $this->output
                ->set_status_header(200)
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'status' => 'success',
                    'message' => 'Maaf tidak bisa di akses!',
                ]));
    }

    public function zenziva_webhook()
    {
        $input = file_get_contents('php://input');
        $decode_reponse = json_decode($input, true);

        $type = $decode_reponse['type'];
        $messageId = $decode_reponse['messageId'];
        $status = $decode_reponse['status'];

        $insert_log = [
            'message_type' => $type,
            'message_id' => $messageId,
            'message_status' => $status
        ];

        $this->Log_m->save_zenziva($insert_log);

    }
}
