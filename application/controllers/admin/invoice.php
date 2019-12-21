<?php

class Invoice extends CI_Controller{
    public function index()
    {
        $data['invoice'] = $this->Model_invoice->tampil_data();
       
        $this->load->view('admin/invoice', $data);
       
    }

    public function detail($id_invoice) 
    {
        $data['invoice'] = $this->Model_invoice->getInvoiceById($id_invoice);
        $data['pesanan'] = $this->Model_invoice->getPesananById($id_invoice);
        $this->load->view('admin/detail_invoice', $data);
        
        

    }
}