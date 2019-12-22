<?php
class Kategori_model extends CI_model
{

    public function data_meja_makan()
    {
       return $this->db->get_where("tb_barang", array('Kategori' => 'Meja Makan'));
    }

}