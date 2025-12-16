<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prestasi extends CI_Model
{
    public function getPrestasiFront()
    {
        $this->db->select('*');
        $this->db->from('prestasi_siswa');
        $this->db->order_by('id_prestasi_siswa', 'DESC');
        $this->db->limit(6);
        $result = $this->db->get()->result_array();
        return $result;
    }
}
