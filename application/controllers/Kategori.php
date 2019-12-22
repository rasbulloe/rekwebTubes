<?php 


class Kategori extends CI_Controller{
	

	public function meja_makan(){
		$data['meja_makan'] = $this->Kategori_model->data_meja_makan()->result();
		$this->load->view('templates/header', $data);
        $this->load->view('kategori/meja_makan', $data);
        $this->load->view('templates/footer');
	}
}


 ?>