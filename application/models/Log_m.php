<?php


class Log_m extends CI_Model
{
    public function save_zenziva($data)
    {
        return $this->db->insert('zenziva_log', $data);
    }
}
