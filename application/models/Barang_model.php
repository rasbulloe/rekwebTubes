<?php
class Barang_model extends CI_model
{

    public function tampilDataBarang()
    {
        return $this->db->get('tb_barang');
    }

        public function tambahDataModel($data, $table){
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

}
