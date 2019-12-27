<?php

class Contact extends CI_Controller
{

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Contact | Astro';
        $this->load->view('templates/user_header', $data);
        $this->load->view('contact/index');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi_contact()
    {
        $name   = $this->input->post('nama', true);
        $email = $this->input->post('email');
        $pesan   = $this->input->post('pesan');

        $data = array(
            'name'     => $name,
            'email' => $email,
            'pesan' => $pesan,
        );

        $this->Contact_model->tambah_contact($data, 'contact');
        redirect('contact/index');
    }
}
