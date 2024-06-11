<?php

class Mahasiswa extends CI_Controller{
    public function index(){
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