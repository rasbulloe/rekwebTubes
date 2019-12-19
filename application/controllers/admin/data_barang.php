<?php 

class data_barang extends CI_Controller {
    public function index ()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates/admin_header');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $nama_brg   = $this->input->post('nama_brg');
        $keterangan = $this->input->post('keterangan');
        $kategori   = $this->input->post('kategori');
        $harga      = $this->input->post('harga');
        $stok       = $this->input->post('stok');
        $gambar     = $_FILES['gambar']['name'];
        if ($gambar_brg =''){}else {
            $config ['upload_path'] = './uploads';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal diupload!" ;
            }else {
                $gambar_brg=$this->upload->data('file_name');
            }
        }

        $data = array (
            'nama_brg'      => $nama_brg,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'harga'         => $harga,
            'stok'          => $stok,
            'gambar'        => $gambar
        );

        $this->model_barang->tambah_barang($data, 'tb_barang');
        redirected('admin/data_barang/index');
    }

}