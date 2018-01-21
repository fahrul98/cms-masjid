<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/*
	 isi :
	 1. Home admin (statistik). Setelah login langsung access method index().

	 vars:

	 */
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		if ($this->session->userdata('username') and $this->session->userdata('userpass')){
		// if(false){
			// redirect(base_url('admin'));
		}else{
			redirect(base_url('login'));
		}
    $data['page'] = "Beranda";
		$this->load->view('core/core',$data);
		$this->load->view('vadmin');
	}

	public function logout(){
		// $this->m_aplikasi->putus_koneksi();

		// semua variabel session akan dihapus dari memory
		$array_session = $this->session->all_userdata();
		$this->session->unset_userdata($array_session);
		unset($array_session);
		// memutus session
		$this->session->sess_destroy();

		// kembali lagi ke login
		redirect(base_url('login'));
	}
}
