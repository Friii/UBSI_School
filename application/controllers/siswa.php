<?php 

class siswa extends CI_Controller{
    public function index(){
        $data['mahasiswa'] = $this->m_mahasiswa->tampil_data()->
            result();
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/aside');
        $this->load->view('siswa', $data); 
        $this->load->view('dashboard/footer');
    }
}

?>
