<?php
class Contact_model extends CI_model{
    

    public function tambah_contact(){
        $data = [
                "id" => $this->input->post('id', true),
                "nama" => $this->input->post('nama', true),
                "email" => $this->input->post('email', true),
                "pesan" => $this->input->post('pesan', true),
        ];
        $this->db->insert('contact', $data);
        $this->session->set_flashdata('flash', 'Saran dan/kritik anda telah ditambahkan!');
    }
    
}