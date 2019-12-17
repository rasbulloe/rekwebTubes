<?php
class Barang_model extends CI_model{
    
    public function getAllBarang(){
        return $this->db->get('barang')->result_array();
    }
    public function tambahDataMahasiswa(){
        $data = [
                "namaBarang" => $this->input->post('namaBarang', true),
                "hargaBarang" => $this->input->post('hargaBarang', true),
                "tanggalPembelian" => $this->input->post('tanggalPembelian', true),
                "tanggalPenjualan" => $this->input->post('tanggalPenjualan', true),
                "spesifikasi" => $this->input->post('spesifikasi', true),
                "gambar" => $this->input->post('gambar', true),
        ];
        $this->db->insert('barang', $data);
    }
    
    public function hapusDataBarang($id){
        // $this->db->where('id', $id);
        $this->db->delete('barang', ['idBarang'=>$id]);
    }
    
    public function getMahasiswaById($id){
        return $this->db->get_where('barang', ['idBarang'=> $id])->row_array();
    }
    
    public function ubahDataBarang(){
        $data = [
                "namaBarang" => $this->input->post('namaBarang', true),
                "hargaBarang" => $this->input->post('hargaBarang', true),
                "tanggalPembelian" => $this->input->post('tanggalPembelian', true),
                "tanggalPenjualan" => $this->input->post('tanggalPenjualan', true),
                "spesifikasi" => $this->input->post('spesifikasi', true),
                "gambar" => $this->input->post('gambar', true),
        ];
        $this->db->where('id', $this->input->post('idBarang'));
        
        $this->db->update('barang', $data);
        
    }
    public function cariDataMahasiswa(){
        $keyword = $this->input->post('keyword', true);
        $this->db->like('namaBarang',$keyword);
        $this->db->or_like('hargaBarang',$keyword);
        $this->db->or_like('tanggalPembelian',$keyword);
        $this->db->or_like('tanggalPenjualan',$keyword);
        $this->db->or_like('spesifikasi',$keyword);
        $this->db->or_like('gambar',$keyword);
        return $this->db->get('barang')->result_array();
    }
}