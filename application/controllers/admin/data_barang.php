<?php
defined('BASEPATH') or exit('No direct script aceess allowed');

class Data_barang extends CI_Controller
{
    public function index()
    {
<<<<<<< HEAD

        $data['barang'] = $this->Barang_model->tampil_data()->result();
=======
        $data['barang'] = $this->Barang_model->tampilDataBarang()->result();
        $this->load->view('templates/admin_header');
>>>>>>> d06e7f6eaf1fd9d47b60b1a87c56b2698d8d131d
        $this->load->view('admin/data_barang', $data);
    }

    public function tambah_aksi()
    {

        $nama_brg   = $this->input->post('nama_brg');
        $keterangan_short = $this->input->post('keterangan_short');
        $kategori   = $this->input->post('kategori');
        $harga      = $this->input->post('harga');
        $stok       = $this->input->post('stok');
        $gambar     = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = '.assets/img/home/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal diupload!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_brg'      => $nama_brg,
            'keterangan_short'    => $keterangan_short,
            'kategori'      => $kategori,
            'harga'         => $harga,
            'stok'          => $stok,
            'gambar'        => $gambar
        );

<<<<<<< HEAD
        $this->Barang_model->tambah_barang($data, 'tb_barang');
        redirect('admin/data_barang/index');
=======
        $this->Barang_model->tambahDataModel($data, 'tb_barang');
        redirected('admin/data_barang/index');
>>>>>>> d06e7f6eaf1fd9d47b60b1a87c56b2698d8d131d
    }
}
