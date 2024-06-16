<?php 
defined('BASEPATH') OR exit('no direct script access allowed');

class Ubsi extends CI_Controller
{
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
    
    
}

?>
