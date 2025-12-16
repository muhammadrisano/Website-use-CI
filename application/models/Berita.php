<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Model
{
    public function getBeritaFront()
    {
        $query = "SELECT `berita`.*,`kategori`.`nama_kategori` FROM `berita` INNER JOIN `kategori` ON `berita`.`id_kategori`=`kategori`.`id_kategori` ORDER BY `berita_id`DESC LIMIT 5";
        return $this->db->query($query)->result_array();
    }
    public function detailBerita($id)
    {
        $this->db->set('jumlah_lihat', 'jumlah_lihat + 1', FALSE);
        $this->db->where('berita_id', $id);
        $update = $this->db->update('berita');

        $query = "SELECT `berita`.*,`kategori`.`nama_kategori` FROM `berita` INNER JOIN `kategori` ON `berita`.`id_kategori`=`kategori`.`id_kategori` WHERE `berita_id` = '$id'";

        return $this->db->query($query)->result_array()[0];
    }
    public function kategoriBerita($id)
    {
        $query = "SELECT `berita`.*,`kategori`.`nama_kategori` FROM `berita` INNER JOIN `kategori` ON `berita`.`id_kategori`=`kategori`.`id_kategori` WHERE `berita`.`id_kategori` = '$id'";
        return $this->db->query($query)->result_array();
    }
}
