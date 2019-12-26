<?php 


class Kategori extends CI_Controller{
	

	public function meja_makan(){
		$data['meja_makan'] = $this->Kategori_model->data_meja_makan()->result();
		$data['judul'] = 'Home | Astro';
		$this->load->view('templates/header', $data);
        $this->load->view('kategori/meja_makan', $data);
        $this->load->view('templates/footer');
	}

	public function kursi(){
		$data['kursi'] = $this->Kategori_model->data_kursi()->result();
		$data['judul'] = 'Home | Astro';
		$this->load->view('templates/header', $data);
        $this->load->view('kategori/kursi', $data);
        $this->load->view('templates/footer');
	}

	public function lemari_penyimpanan(){
		$data['lemari_penyimpanan'] = $this->Kategori_model->data_lemari_penyimpanan()->result();
		$data['judul'] = 'Home | Astro';
		$this->load->view('templates/header', $data);
        $this->load->view('kategori/lemari_penyimpanan', $data);
        $this->load->view('templates/footer');
	}

	public function tempat_tidur(){
		$data['tempat_tidur'] = $this->Kategori_model->data_tempat_tidur()->result();
		$data['judul'] = 'Home | Astro';
		$this->load->view('templates/header', $data);
        $this->load->view('kategori/tempat_tidur', $data);
        $this->load->view('templates/footer');
	}
}


 ?>