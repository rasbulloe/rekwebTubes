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
        // $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('home');
    }

    public function detail_keranjang()
    {
        $data['judul'] = 'Keranjang | Astro';
        $this->load->view('templates/header', $data);
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('home/index');
    }

    public function proses_pesanan()
    {
        $is_processed = $this->Model_invoice->index();
        if ($is_processed) {

            $data['judul'] = 'Proses Pesanan | Astro';
            $this->cart->destroy();
            $this->load->view('templates/header', $data);
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');
        } else {
            echo "Maaf, Pesanan Anda Gagal diproses!";
        }
    }

    public function detail($id_brg)
    {
        $data['judul'] = 'Proses Pesanan | Astro';
        $data['barang'] = $this->Barang_model->detail_brg($id_brg);
        $this->load->view('templates/header', $data);
        $this->load->view('detail_barang', $data);
        $this->load->view('templates/footer');
    }
}
