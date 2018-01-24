<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profiladmin extends CI_Controller {

/*
isi :
1. Profiladmin masjid operasi RU
vars:
userid
username
userpass
userfullname
useremail
userurl
usertgldaftar
displayname
mediaid
useralamat
usertelp

*/

	public function __construct(){
		parent::__construct();
		//load model
		$this->load->model('mprofiladmin');
	}
	
	public function index(){
	    $data['page'] = "Profil Admin";
			$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();

			$this->load->view('core/core',$data);
			$this->load->view('vprofiladmin',$data);
	}

	public function dbubahprofiladmin(){
		$data['username'] = $this->input->post('username');
		$data['userpass'] = $this->input->post('userpass');
		$data['userfullname'] = $this->input->post('userfullname');
		$data['useremail'] = $this->input->post('useremail');
		// $data['userurl'] = $this->input->post('userurl');
		$data['usertgldaftar'] = $this->input->post('usertgldaftar');
		$data['displayname'] = $this->input->post('displayname');
		$data['mediaid'] = $this->input->post('mediaid');
		$data['useralamat'] = $this->input->post('useralamat');
		$data['usertelp'] = $this->input->post('usertelp');

		$this->mprofiladmin->ubahpadmin($data);
		redirect(base_url('profiladmin'));
		unset($data);
	}
}
