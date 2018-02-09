<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/*
	 isi :
	 1. Home admin (statistik). Setelah login langsung access method index().

	 vars:
	 */
	public function __construct()
	{
		parent::__construct();
		//pendefinisian folder
		if (!defined('APP')){
		// define('APP', '\application');
			define('APP', '/application');
		}
		if (!defined('CONF')) {
		// define('CONF', '\config');
			define('CONF', '/config');
		}
	}

	// if (file_exists(FCPATH.APP.CONF.'\cms_settings.php')) {
	public function index(){
		//cek cms setting
		if (file_exists(FCPATH.APP.CONF.'/cms_settings.php')) {
			//cek login
			if ($this->session->userdata('username') and $this->session->userdata('userpass')){
				// redirect(base_url('admin'));
				//load fullname admin
				$this->load->model('mprofiladmin');
				$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();

				$data['page'] = "Beranda Admin";
				$data['configpath'] = FCPATH.APP.CONF.'/cms_settings.php';
				$this->load->view('core/core',$data);
				$this->load->view('vadmin');
				$this->load->view('core/footer',$data);
				// print(FCPATH.APP.CONF.'\cms_settings.php');

				//print(FCPATH.APP.CONF.'/cms_settings.php');
			}else{
				redirect(base_url('beranda'));
			}
		}else{
			//ke halaman instalasi
			redirect(base_url('installer'));
		}
		unset($data);

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
		redirect(base_url(''));
	}
}
