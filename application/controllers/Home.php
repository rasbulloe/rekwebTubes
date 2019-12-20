<?php

class Home extends CI_Controller
{

    public function index()
    {

        $data['barang'] = $this->Barang_model->tampil_data()->result();
        $data['judul'] = 'Home | Astro';
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

    public function contact()
    {
        $data['judul'] = 'Contact | Astro';
        $this->load->view('templates/header', $data);
        $this->load->view('contact/index');
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail | Astro';
        $data['barang'] = $this->Barang_model->getBarangById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('home/detail', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_ke_keranjang($id)
    {
        $barang = $this->Barang_model->find($id);

        $data = array(
            'id'                => $barang->id_brg,
            'qty'               => 1,
            'price'             => $barang->harga,
            'name'              => $barang->nama_brg,
            'keterangan_short'  => $barang->keterangan_short,
            'kategori'          => $barang->kategori,
            'harga'             => $barang->harga,
            'stok'              => $barang->stok,
            'gambar'            => $barang->gambar
        );

        $this->cart->insert($data);
        redirect('home');
    }

    public function detail_keranjang ()
    {
        $this->load->view('templates/header');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }
}
