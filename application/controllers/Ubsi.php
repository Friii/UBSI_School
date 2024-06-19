<?php 
defined('BASEPATH') OR exit('no direct script access allowed');

class Ubsi extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('m_calonsiswa');
        $this->load->model('m_pengguna');

    }
    public function index(){
        $this->load->view('template/v_header');
        $this->load->view('template/v_about');
        $this->load->view('template/v_footer');
    }

    public function dashboard(){
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/aside');
        $this->load->view('dashboard/dashboard'); 
        $this->load->view('dashboard/footer');
    }
    public function login(){
    $this->load->view('template/v_login');
    }

    public function tambah(){
        $this->load->view('template/v_tambahlogin');
    }
    
    public function add_user(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');

        $arrInsert = array(
            'username' => $username,
            'password' => md5($password),
            'nama'     => $nama,

        );

        $this->m_pengguna->insertData($arrInsert);
        $this->session->set_flashdata('msg', '2');
        redirect(base_url('ubsi/login'));

    }

    public function cekLoginUser() {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $userData = $this->m_pengguna->getLoginUser($username, $password);
        if (!empty($userData)) {
            $sess = array (
                'username' => $userData->username,
            );
            $this->session->set_userdata($sess);
            redirect('dashboard/dashboard');
        }else{
            $this->session->set_flashdata('msg', '1');
            redirect(base_url('ubsi/login'));
        }

    }

    public function fasilitas(){
        $this->load->view('template/v_header');
        $this->load->view('template/v_fas');
  
    }

    public function jurusan(){
        $this->load->view('template/v_header');
        $this->load->view('template/v_jur');
  
    }
    public function contact(){
        $this->load->view('template/v_contact');
    }
    
    public function saveData(){
        $this->load->view('template/v_contact');

        if($this->input->post('save')){
            $dataa['nama_calon']=$this->input->post('nama_calon');
            $dataa['no_telepon']=$this->input->post('no_telepon');
            $dataa['email_calon']=$this->input->post('email_calon');
            $dataa['password']=$this->input->post('password');
            $response=$this->m_calonsiswa->saverecords($dataa);
            if($response==true){
                echo "Data berhasil disimpan";
            }else{
                echo "Data gagal disimpan";
            }
        }
    }
}

?>
