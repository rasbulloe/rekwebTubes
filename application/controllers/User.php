<?php
defined('BASEPATH') or exit('No direct script aceess allowed');


class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Anda Belum Login! <button type="button" class="close" data-dismiss="alert" arial-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('auth');
            // clearstatcache();
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->Barang_model->tampil_data()->result();
        $data['judul'] = 'Astro Shop';

        $this->load->view('templates/user_header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function account()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['judul'] = 'My Profile';
        $this->load->view('templates/user_header', $data);
        $this->load->view('user/account');
        $this->load->view('templates/footer');
    }

    public function detail_keranjang()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['judul'] = 'Keranjang | Astro';
        $this->load->view('templates/user_header', $data);
        $this->load->view('user/keranjang');
        $this->load->view('templates/footer');
    }


    public function hapus_keranjang()
    {
        $this->cart->destroy();
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('user');
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
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('user');
    }


    public function pembayaran()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Pembayaran | Astro';
        $this->load->view('templates/user_header', $data);
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan()
    {
        $is_processed = $this->Model_invoice->index();
        if ($is_processed) {
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['judul'] = 'Proses Pesanan | Astro';
            $this->cart->destroy();
            $this->load->view('templates/user_header', $data);
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');
        } else {
            echo "Maaf, Pesanan Anda Gagal diproses!";
        }
    }

    public function detail($id_brg)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->Barang_model->detail_brg($id_brg);
        $this->load->view('templates/user_header', $data);
        $this->load->view('detail_barang', $data);
        $this->load->view('templates/footer');
    }
}
