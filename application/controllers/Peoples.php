<?php 

    class Peoples extends CI_Controller {
       
        public function index() {

            $data['judul'] = 'List of Peoples';

            $this->load->model('Peoples_model', 'peoples');

            $this->load->library('pagination');

            $config['base_url'] = 'http://localhost/codeigniter/peoples/index';
            $config['total_rows'] = $this->peoples->countAllPeoples();
            $config['per_page'] = 12;

            $this->pagination->initialize($config);


            $data['start'] = $this->uri->segment(3);
            $data['peoples'] = $this->peoples->getPeoples($config['per_page'], $data['start']);


            $this->load->view('templates/header', $data);
            $this->load->view('peoples/index', $data);
            $this->load->view('templates/footer');


       
        }





    }