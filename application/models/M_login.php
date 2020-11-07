<?php

class M_login extends CI_Model
{
    private $table = 'user';
    function cek_login($data)
    {
        $cek = $this->db->get_where($this->table, $data);
        if ($cek->num_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    function get_user($data)
    {
        return $this->db->get_where($this->table, $data);
    }
}
