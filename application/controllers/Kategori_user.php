<?php


class Kategori_user extends CI_Controller
{


    public function meja_makan()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Kategori | Astro Shop';
        $data['meja_makan'] = $this->Kategori_model->data_meja_makan()->result();
        $this->load->view('templates/user_header', $data);
        $this->load->view('kategori/meja_makan', $data);
        $this->load->view('templates/footer');
    }

    public function kursi()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Kategori | Astro Shop';
        $data['kursi'] = $this->Kategori_model->data_kursi()->result();
        $this->load->view('templates/user_header', $data);
        $this->load->view('kategori/kursi', $data);
        $this->load->view('templates/footer');
    }

    public function lemari_penyimpanan()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Kategori | Astro Shop';
        $data['lemari_penyimpanan'] = $this->Kategori_model->data_lemari_penyimpanan()->result();
        $this->load->view('templates/user_header', $data);
        $this->load->view('kategori/lemari_penyimpanan', $data);
        $this->load->view('templates/footer');
    }

    public function tempat_tidur()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Kategori | Astro Shop';
        $data['tempat_tidur'] = $this->Kategori_model->data_tempat_tidur()->result();
        $this->load->view('templates/user_header', $data);
        $this->load->view('kategori/tempat_tidur', $data);
        $this->load->view('templates/footer');
    }
}
