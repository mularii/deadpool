<?php 
defined('BASEPATH') or exit ('no direct script access allowed'); 
class Web extends CI_Controller{ 
    function __construct(){ 
        parent::__construct(); 
        $this->load->helper('url'); 
    } 

    public function index(){ 
        $data['judul'] = ""; 
        $this->load->view('v_header');
        $this->load->view('v_index');
        $this->load->view('v_footer'); 
    }

    public function addstudent() 
    { 
        $data['judul'] = "Halaman Add Student"; 
        $this->load->view('v_header'); 
        $this->load->view('v_form_input_siswa'); 
        $this->load->view('v_footer'); 
    }

    public function cetak() 
    {
        $this->load->model('m_siswa');
        $data = [ 
            'nama' => $this->input->post('nama'), 
            'nis' => $this->input->post('nis'), 
            'ttl' => $this->input->post('ttl'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama'),
            'tempat_agama' =>$this->m_siswa->getagama($this->input->post('agama'))
        ]; 
        
        $this->load->view('v_header', $data);
        $this->load->view('v_data_input_siswa', $data); 
        $this->load->view('v_footer', $data);
    } 
}