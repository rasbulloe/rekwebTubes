<?php
class Barang_model extends CI_model
{

    public function getAllBarang()
    {
        return $this->db->get('barang')->result_array();
    }
    public function tambahDataMahasiswa()
    {
        $data = [
<<<<<<< HEAD
            "Nama Barang" => $this->input->post('Nama Barang', true),
            "Harga Barang" => $this->input->post('Harga Barang', true),
            "Tanggal Pembelian" => $this->input->post('Tanggal Pembelian', true),
            "Tanggal Penjualan" => $this->input->post('Tanggal Penjualan', true),
            "Spesifikasi" => $this->input->post('Spesifikasi', true),
=======
                "namaBarang" => $this->input->post('namaBarang', true),
                "hargaBarang" => $this->input->post('hargaBarang', true),
                "tanggalPembelian" => $this->input->post('tanggalPembelian', true),
                "tanggalPenjualan" => $this->input->post('tanggalPenjualan', true),
                "spesifikasi" => $this->input->post('spesifikasi', true),
                "gambar" => $this->input->post('gambar', true),
>>>>>>> 456a96ea52e9360412504594758465153982dd5f
        ];
        $this->db->insert('barang', $data);
    }

    public function hapusDataBarang($id)
    {
        // $this->db->where('id', $id);
<<<<<<< HEAD
        $this->db->delete('barang', ['id' => $id]);
    }

    public function getMahasiswaById($id)
    {
        return $this->db->get_where('barang', ['id' => $id])->row_array();
=======
        $this->db->delete('barang', ['idBarang'=>$id]);
    }
    
    public function getMahasiswaById($id){
        return $this->db->get_where('barang', ['idBarang'=> $id])->row_array();
>>>>>>> 456a96ea52e9360412504594758465153982dd5f
    }

    public function ubahDataBarang()
    {
        $data = [
<<<<<<< HEAD
            "Nama Barang" => $this->input->post('Nama Barang', true),
            "Harga Barang" => $this->input->post('Harga Barang', true),
            "Tanggal Pembelian" => $this->input->post('Tanggal Pembelian', true),
            "Tanggal Penjualan" => $this->input->post('Tanggal Penjualan', true),
            "Spesifikasi" => $this->input->post('Spesifikasi', true),
        ];
        $this->db->where('id', $this->input->post('id'));

=======
                "namaBarang" => $this->input->post('namaBarang', true),
                "hargaBarang" => $this->input->post('hargaBarang', true),
                "tanggalPembelian" => $this->input->post('tanggalPembelian', true),
                "tanggalPenjualan" => $this->input->post('tanggalPenjualan', true),
                "spesifikasi" => $this->input->post('spesifikasi', true),
                "gambar" => $this->input->post('gambar', true),
        ];
        $this->db->where('id', $this->input->post('idBarang'));
        
>>>>>>> 456a96ea52e9360412504594758465153982dd5f
        $this->db->update('barang', $data);
    }
    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);
<<<<<<< HEAD
        $this->db->like('Nama Barang', $keyword);
        $this->db->or_like('Harga Barang', $keyword);
        $this->db->or_like('Tanggal Pembelian', $keyword);
        $this->db->or_like('Tanggal Penjualan', $keyword);
        $this->db->or_like('Spesifikasi', $keyword);
        return $this->db->get('mahasiswa')->result_array();
=======
        $this->db->like('namaBarang',$keyword);
        $this->db->or_like('hargaBarang',$keyword);
        $this->db->or_like('tanggalPembelian',$keyword);
        $this->db->or_like('tanggalPenjualan',$keyword);
        $this->db->or_like('spesifikasi',$keyword);
        $this->db->or_like('gambar',$keyword);
        return $this->db->get('barang')->result_array();
>>>>>>> 456a96ea52e9360412504594758465153982dd5f
    }
}
