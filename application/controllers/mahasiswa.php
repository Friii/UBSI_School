<?php

class Mahasiswa extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_mahasiswa');
        $this->load->model('m_calonsiswa');
        $this->load->model('m_guru');
        
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

    public function calon_siswa(){
        $data['calonsiswa'] = $this->m_calonsiswa->siswa()->
        result();
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/aside');
        $this->load->view('calonsiswa',  $data);
        $this->load->view('dashboard/footer'); 
    }
    public function guru(){
        $data['guru'] = $this->m_guru->guru()->
        result();
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/aside');
        $this->load->view('guru',  $data);
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

    public function tambah_calon(){
        $nama_calon   = $this->input->post('nama_calon');
        $no_telepon  = $this->input->post('no_telepon');
        $email_calon   = $this->input->post('email_calon');

        $data = array(
            'nama_calon'          => $nama_calon,
            'no_telepon'           => $no_telepon,
            'email_calon'     => $email_calon,
          
        );
        $this->m_calonsiswa->input_data($data,'tb_calon_siswa'); 
        redirect('mahasiswa/calon_siswa');
    }

    

   
    

    public function hapus($id){
        $where = array('id' => $id);
        $this->m_mahasiswa->hapus_data($where,'tb_mahasiswa');
        redirect('mahasiswa/siswa');
    }

    public function hapus_calon($id){
        $where = array('id' => $id);
        $this->m_mahasiswa->hapus_dataa($where,'tb_calon_siswa');
        redirect('mahasiswa/calon_siswa');
    }
    
    public function hapus_guru($id){
        $where = array('id' => $id);
        $this->m_mahasiswa->hapus_data_guru($where,'tb_guru');
        redirect('mahasiswa/guru');
    }

    public function edit($id){
        $where= array('id'=>$id);
        $data['mahasiswa']=$this->m_mahasiswa->edit_data($where, 'tb_mahasiswa')->result();


        $this->load->view('dashboard/header');
        $this->load->view('dashboard/aside');
        $this->load->view('edit',$data);
        $this->load->view('dashboard/footer'); 
    }

    public function edit_calon($id){
        $where= array('id'=>$id);
        $data['mahasiswa']=$this->m_mahasiswa->edit_data($where, 'tb_calon_siswa')->result();


        $this->load->view('dashboard/header');
        $this->load->view('dashboard/aside');
        $this->load->view('edit_calon',$data);
        $this->load->view('dashboard/footer'); 
    }
    
    public function edit_guru($id){
        $where= array('id'=>$id);
        $data['mahasiswa']=$this->m_mahasiswa->edit_data($where, 'tb_guru')->result();


        $this->load->view('dashboard/header');
        $this->load->view('dashboard/aside');
        $this->load->view('edit_calon',$data);
        $this->load->view('dashboard/footer'); 
    }

    public function update(){
        $id= $this->input->post('id');
        $nama= $this->input->post('nama');
        $nip= $this->input->post('nip');
        $tgl_lahir= $this->input->post('tgl_lahir');
        $jurusan= $this->input->post('jurusan');

        $data = array(
            'nama' => $nama,
            'nip' => $nip,
            'tgl_lahir' => $tgl_lahir,
            'jurusan' => $jurusan
        );
        $where = array(
            'id' => $id
        );

        $this->m_mahasiswa->update_data($where,$data,'tb_mahasiswa');
        redirect('mahasiswa/siswa');
    }

    public function update_calon(){
        $id= $this->input->post('id');
        $nama_calon= $this->input->post('nama_calon');
        $no_telepon= $this->input->post('no_telepon');
        $email_calon= $this->input->post('email_calon');

        $data = array(
            'nama_calon' => $nama_calon,
            'no_telepon' => $no_telepon,
            'email_calon' => $email_calon,
        );
        $where = array(
            'id' => $id
        );

        $this->m_mahasiswa->update_dataa($where,$data,'tb_calon_siswa');
        redirect('mahasiswa/calon_siswa');
    }

   

   
}