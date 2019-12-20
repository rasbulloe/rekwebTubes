<?php

class Invoice extends CI_Controller{
    public function index()
    {
        $data['invoice'] = $this->Model_invoice->tampil_data();
       
        $this->load->view('admin/invoice', $data);
       
    }
}