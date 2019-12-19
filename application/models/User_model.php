<?php
class User_model extends CI_model
{

    public function tampilDataUser()
    {
        return $this->db->get('user');
    }

        public function tambahDataUser($data, $table){
            $this->db->insert($table,$data);
        }


    public function hapusDataUser($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('user', ['id' => $id]);
    }

    public function ubahDataUser()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "email" => $this->input->post('email', true),
            "image" => $this->input->post('image', true),
            "password" => $this->input->post('password', true),
        ];
        $this->db->where('id', $this->input->post('id'));

        $this->db->update('user', $data);
    }

}