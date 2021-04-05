<?php
class siswa extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_siswa');
    }

    public function index(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data Siswa";
        $data['siswa'] = $this->M_siswa->data_siswa();
        $this->template->load_admin('index','siswa',$data);
    }

    public function tambah(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data siswa";
        $data['subtitle'] = "Tambah Data siswa";
        $this->template->load_admin('index','siswa_tambah',$data);
    }

    public function simpan(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $this->M_siswa->simpan();
        redirect('siswa');
    }
}