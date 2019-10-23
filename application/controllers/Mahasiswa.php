<?php 

    class Mahasiswa extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->model('Mahasiswa_model');

        }
       
        public function index() {

            $data['judul'] = 'Daftar Mahasiswa';

            $this->load->view('templates/header', $data);
            $this->load->view('templates/footer');


            $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
            $this->load->view('mahasiswa/index', $data);
       
        }

        public function tambah() {
            
            $data['judul'] = 'Tambah Data';

            $this->load->view('templates/header', $data);
            $this->load->view('templates/footer');

            $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[3]');
            $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

            if ($this->form_validation->run() == false) {
                $this->load->view('mahasiswa/tambah');
            } else {
                $this->Mahasiswa_model->tambahDataMahasiswa();
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('mahasiswa/index');
            }
        }

        public function hapus($id) {
            $this->Mahasiswa_model->hapusDataMahasiswa($id);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('mahasiswa');
        }
    
        public function detail($id) {
            $data['judul'] = 'Detail Data Mahasiswa';
            $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/detail', $data);
            $this->load->view('templates/footer');
        }
    
    
    }