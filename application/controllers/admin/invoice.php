<?php

class Invoice extends CI_Controller
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
