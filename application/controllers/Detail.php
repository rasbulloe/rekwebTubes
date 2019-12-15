<?php

class Detail extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Detail | Astro';
        $this->load->view('templates/header', $data);
        $this->load->view('detail/index');
        $this->load->view('templates/footer');
    }
}
