<?php
class Barang_model extends CI_model
{

    public function tampilDataBarang()
    {
        return $this->db->get('tb_barang');
    }

        public function tambah_barang($data, $table){
            $this->db->insert($table,$data);
        }


    public function hapusDataBarang($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('barang', ['id' => $id]);
    }

    public function ubahDataBarang()
    {
        $data = [
            "Nama Barang" => $this->input->post('Nama Barang', true),
            "Harga Barang" => $this->input->post('Harga Barang', true),
            "Tanggal Pembelian" => $this->input->post('Tanggal Pembelian', true),
            "Tanggal Penjualan" => $this->input->post('Tanggal Penjualan', true),
            "Spesifikasi" => $this->input->post('Spesifikasi', true),
        ];
        $this->db->where('id', $this->input->post('id'));

        $this->db->update('barang', $data);
    }

<<<<<<< HEAD
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
=======
>>>>>>> cde789a902e579c60296f5c54d78af0d70a98576
}
