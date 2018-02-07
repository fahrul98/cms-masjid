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

			$data['error']=$this->session->userdata('err')?$this->session->userdata('err'):'';
			$data['padmin']=$this->session->userdata('input')?$this->session->userdata('input'):
				array(
					'username' => $data['padmin']->username,
					'userpass' => $data['padmin']->userpass,
					'userfullname' => $data['padmin']->userfullname,
					'useremail' => $data['padmin']->useremail,
					'usertgldaftar' => $data['padmin']->usertgldaftar,
					'displayname' =>$data['padmin']->displayname,
					'mediaid' => $data['padmin']->mediaid,
					'useralamat' => $data['padmin']->useralamat,
					'usertelp' => $data['padmin']->usertelp
				);

			$this->load->view('core/core',$data);
			$this->load->view('vprofiladmin',$data);
			$this->load->view('core/footer',$data);
			$this->session->set_userdata('err',null);
			$this->session->set_userdata('input',null);
	}

	public function dbubahprofiladmin(){
		$this->form_validation->set_rules('username','Username','required|min_length[5]|max_length[12]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=8 karakter',
				'max_length' => '%s harus <=12 karakter'
			)
		);
		$this->form_validation->set_rules('userpass','Password','required|min_length[8]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=8 karakter',
			)
		);
		$this->form_validation->set_rules('userfullname','Nama lengkap','required|min_length[8]|max_length[50]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=8 karakter',
				'max_length' => '%s harus <=50 karakter'
			)
		);
		$this->form_validation->set_rules('useremail','Email','required|valid_email',
			array(
				'required' => '%s harus diisi',
				'valid_email' => '%s tidak valid'
			)
		);
		$this->form_validation->set_rules('displayname','Nama layar','required|min_length[3]|max_length[50]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=8 karakter',
				'max_length' => '%s harus <=50 karakter'
			)
		);
		$this->form_validation->set_rules('useralamat','Alamat','max_length[255]',
			array(
				'max_length' => '%s harus <=255 karakter'
			)
		);
		$this->form_validation->set_rules('usertelp','telepon','max_length[20]',
			array(
				'max_length' => '%s harus <=20 karakter'
			)
		);

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

		if (!$this->form_validation->run()) {
			$this->session->set_userdata('err',validation_errors());
			$this->session->set_userdata('input',$data);
			redirect('profiladmin');
		}else{
			$this->session->set_userdata('err','Berhasil diubah');
		}

		$this->mprofiladmin->ubahpadmin($data);
		redirect(base_url('profiladmin'));
		unset($data);
	}
}
