<?php

class Contact extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Contact | Astro';
        $this->load->view('templates/header', $data);
        $this->load->view('contact/index');
        $this->load->view('templates/footer');
    }

    public function index2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Contact | Astro';
        $this->load->view('templates/user_header', $data);
        $this->load->view('contact/index');
        $this->load->view('templates/footer');
    }
}
