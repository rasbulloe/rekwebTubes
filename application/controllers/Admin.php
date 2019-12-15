<?php
defined('BASEPATH') or exit('No direct script aceess allowed');


class Admin extends CI_Controller
{

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['judul'] = 'Astro Shop';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/index');
        $this->load->view('templates/footer');
    }

    public function account()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['judul'] = 'My Profile';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('user/account');
        $this->load->view('templates/footer');
    }
}
