<?php 
defined('BASEPATH') OR exit('no direct script access allowed');

class Ubsi extends CI_Controller
{
    public function index(){
        $this->load->view('template/v_header');
        $this->load->view('template/v_about');
        $this->load->view('template/v_footer');
    }
}
?>
