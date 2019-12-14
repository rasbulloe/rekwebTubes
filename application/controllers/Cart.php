<?php
defined('BASEPATH') or exit('No direct script aceess allowed');

class Cart extends CI_Controller
{
    public function index()
    {


        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Cart | Astro';
        $this->load->view('templates/user_header', $data);
        $this->load->view('cart/cart');
        $this->load->view('templates/auth_footer');
    }
}
