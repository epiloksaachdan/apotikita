<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function getuser($user, $pass)
    {
        $hasil = $this->db->get_where('user', ['username' => $user, 'password' => $pass]);
        return $hasil->result_array();
    }
}
