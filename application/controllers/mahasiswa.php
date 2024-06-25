<?php

class Mahasiswa extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_mahasiswa');
        $this->load->model('m_calonsiswa');
        $this->load->model('m_guru');
        
    }

    public function index(){
        $data['user'] = $this->ModelUser->user()->result();
        $jumlah= $this->m_guru->jumlah_guru();
        $calon=$this->m_calonsiswa->jumlah_calon();
        $ar = $this->m_mahasiswa->jumlah_siswa();
        $ad=$this->ModelUser->jumlah_admin();
        $siswa = $ar->num_rows();
        $guru= $jumlah->num_rows();
        $calonn=$calon->num_rows();
        $admin=$ad->num_rows();
        $data = array(
            'jumlah_siswa' => $siswa,
            'jumlah_guru' => $guru,
            "jumlah_calon"=>$calonn,
            "jumlah_admin"=>$admin
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
        redirect('mahasiswa/siswa');
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

    public function tambah_guru(){
        $nama_guru   = $this->input->post('nama_guru');
        $nip_guru  = $this->input->post('nip_guru');
        $foto   = $_FILES['foto'];
        $jabatan   = $this->input->post('jabatan');
        $pelajaran   = $this->input->post('pelajaran');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');

        if($foto=''){}else{
            $config['upload_path']          = './assets/img/upload/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 10000;
            $config['max_width']            = 10000;
            $config['max_height']           = 10000;

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('foto')){
                echo $this->upload->display_errors();
                die();
            }else{
                $foto= $this->upload->data("file_name");
            }
        }
        $data = array(
            'nama_guru'          => $nama_guru,
            'nip_guru'           => $nip_guru,
            'tgl_lahir'           => $tgl_lahir,
            'alamat'              => $alamat,
            'jabatan'            => $jabatan,
            'pelajaran'          => $pelajaran,
            'foto'               => $foto
            
        );
        $this->m_guru->input_data_guru($data,'tb_guru'); 
        redirect('mahasiswa/guru');
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
        $this->load->view('edit_guru',$data);
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

    public function update_guru(){
        $id= $this->input->post('id');
        $nama_guru= $this->input->post('nama_guru');
        $nip_guru= $this->input->post('nip_guru');
        $tgl_lahir= $this->input->post('tgl_lahir');
        $alamat= $this->input->post('alamat');
        $foto= $this->input->post('foto');
        $jabatan= $this->input->post('jabatan');
        $pelajaran= $this->input->post('pelajaran');

        $data = array(
            'nama_guru' => $nama_guru,
            'nip_guru' => $nip_guru,
            'tgl_lahir' => $tgl_lahir,
            'alamat' => $alamat,
            'jabatan' => $jabatan,
            'pelajaran' => $pelajaran,
            'foto' => $foto
        );
        $where = array(
            'id' => $id
        );

        $this->m_mahasiswa->update_dataa($where,$data,'tb_guru');
        redirect('mahasiswa/guru');
    }

    public function detail($id){
        $this->load->model('m_guru');
        $detail= $this->m_guru->detail($id);
        $data['detail'] = $detail;
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/aside');
        $this->load->view('detail',$data);
        $this->load->view('dashboard/footer'); 
    }
}