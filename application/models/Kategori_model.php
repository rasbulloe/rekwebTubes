<?php
class Kategori_model extends CI_model
{

    public function data_meja_makan()
    {
       return $this->db->get_where("tb_barang", array('Kategori' => 'Meja Makan'));
    }

    public function data_kursi()
    {
       return $this->db->get_where("tb_barang", array('Kategori' => 'Kursi'));
    }

    public function data_lemari_penyimpanan()
    {
       return $this->db->get_where("tb_barang", array('Kategori' => 'Lemari Penyimpanan'));
    }

    public function data_tempat_tidur()
    {
       return $this->db->get_where("tb_barang", array('Kategori' => 'Tempat Tidur'));
    }
}