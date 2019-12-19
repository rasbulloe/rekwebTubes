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
}
