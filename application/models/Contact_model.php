<?php
class Contact_model extends CI_model{
    

    public function tambahDataContact(){
        $data = [
                "nama" => $this->input->post('nama', true),
                "email" => $this->input->post('email', true),
                "noTelp" => $this->input->post('noTelp', true),
                "pesan" => $this->input->post('pesan', true),
        ];
        $this->db->insert('contact', $data);
    }
    
}