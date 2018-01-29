<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/*
	 isi :
	 1. Home admin (statistik). Setelah login langsung access method index().

	 vars:

	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('mprofiladmin');
	}

	public function index(){
    $data['page'] = "Login";
		if ($this->session->userdata('username') and $this->session->userdata('userpass')){
		// if(false){
				 redirect(base_url('admin'));
		}else{
			// $this->load->view('v_login');
			//$this->load->view('core/core',$data);
			//$this->load->view('vlogin', $data);
			$this->load->view('core/core',$data);
			$this->load->view('vlogin');
			$this->load->view('core/footer',$data);
		}
	}

	public function dblogin(){
		$data['username'] = $this->input->post('username');
		$data['userpass'] = $this->input->post('userpass');

		$q = $this->mprofiladmin->adminlogin($data)->row();
		if (count($q)>0) {
			$arrsess = array('username' => $q->username,
				'userpass' => $q->userpass,
				'userfullname' => $q->userfullname
			);

			$this->session->set_userdata($arrsess);
			redirect(base_url('admin'));
		}else{
			redirect(base_url('login'));
		}
	}
}
