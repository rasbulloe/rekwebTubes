<?php
defined('BASEPATH') or exit('No direct script aceess allowed');


class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Anda Belum Login! <button type="button" class="close" data-dismiss="alert" arial-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('auth');
        }
    }


    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['maincontent'] = $this->load->view('admin/pages/home', '', true);
        $data['judul'] = 'Astro Shop';
        // $this->load->view('admin/templates_admin/header', $data);
        $this->load->view('admin/index', $data);
        // $this->load->view('admin/templates_admin/footer');
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
