<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_suplier extends CI_Model
{
    public function tambah($data)
    {
        $this->db->insert('suplier', $data);
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }

    public function getSuplier()
    {
        $hasil = $this->db->select('*')
            ->from('suplier')
            ->get()->result_array();
        return $hasil;
    }
}
