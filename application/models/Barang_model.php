<?php
class Barang_model extends CI_model
{

    public function tampilDataBarang()
    {
        return $this->db->get('tb_barang');
    }

<<<<<<< HEAD
    public function tambah_barang($data, $table)
    {
        $this->db->insert($table, $data);
    }
=======
        public function tambahDataModel($data, $table){
            $this->db->insert($table,$data);
        }
>>>>>>> d06e7f6eaf1fd9d47b60b1a87c56b2698d8d131d


    public function hapusDataBarang($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('barang', ['id' => $id]);
    }

    public function ubahDataBarang()
    {
        $data = [
            "nama_brg" => $this->input->post('nama_brg', true),
            "keterangan_short" => $this->input->post('keterangan_short', true),
            "keterangan_long" => $this->input->post('keterangan_long', true),
            "kategori" => $this->input->post('kategori', true),
            "harga" => $this->input->post('harga', true),
            "stok" => $this->input->post('stok', true),
            "gambar" => $this->input->post('gambar', true),
        ];
        $this->db->where('id', $this->input->post('id'));

        $this->db->update('tb_barang', $data);
    }

    public function getBarangById($id){
        return $this->db->get_where('tb_barang', ['id_brg'=> $id])->row_array();
    }


































    // public function tambahDataMahasiswa()
    // {
    //     $data = [
    //         "Nama Barang" => $this->input->post('Nama Barang', true),
    //         "Harga Barang" => $this->input->post('Harga Barang', true),
    //         "Tanggal Pembelian" => $this->input->post('Tanggal Pembelian', true),
    //         "Tanggal Penjualan" => $this->input->post('Tanggal Penjualan', true),
    //         "Spesifikasi" => $this->input->post('Spesifikasi', true),
    //     ];
    //     $this->db->insert('barang', $data);
    // }

    // public function cariDataMahasiswa()
    // {
    //     $keyword = $this->input->post('keyword', true);
    //     $this->db->like('Nama Barang', $keyword);
    //     $this->db->or_like('Harga Barang', $keyword);
    //     $this->db->or_like('Tanggal Pembelian', $keyword);
    //     $this->db->or_like('Tanggal Penjualan', $keyword);
    //     $this->db->or_like('Spesifikasi', $keyword);
    //     return $this->db->get('mahasiswa')->result_array();
    // }
}
