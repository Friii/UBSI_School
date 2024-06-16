<?php

class Mahasiswa extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_mahasiswa');
    }

    public function index(){
        $ar = $this->m_mahasiswa->jumlah_siswa();
        $siswa = $ar->num_rows();

        $data = array(
            'jumlah_siswa' => $siswa
        );
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/aside');
        $this->load->view('dashboard/dashboard',$data);
        $this->load->view('dashboard/footer'); 
    
    }

    public function siswa(){
        $data['mahasiswa'] = $this->m_mahasiswa->tampil_data()->
        result();
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/aside');
        $this->load->view('mahasiswa',  $data);
        $this->load->view('dashboard/footer'); 
        
    
    }

    public function tambah_aksi(){
        $nama   = $this->input->post('nama');
        $nip   = $this->input->post('nip');
        $tgl_lahir   = $this->input->post('tgl_lahir');
        $jurusan   = $this->input->post('jurusan');

        $data = array(
            'nama'          => $nama,
            'nip'           => $nip,
            'tgl_lahir'     => $tgl_lahir,
            'jurusan'       => $jurusan,
        );
        $this->m_mahasiswa->input_data($data,'tb_mahasiswa'); 
        redirect('mahasiswa/index');

    }
}