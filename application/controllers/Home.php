<?php

class Home extends CI_Controller
{

    public function index()
    {


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

    public function detail()
    {
        $data['judul'] = 'Detail | Astro';
        $this->load->view('templates/header', $data);
        $this->load->view('detail/index');
        $this->load->view('templates/footer');
    }
}
