<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ustadz extends CI_Controller {

/*
isi :
1. Ustadz. operasi CRUD
vars:
usid
usnama
usnotelp
usalamat
mediaid

*/

	public function __construct(){
		parent::__construct();
		//load model
		$this->load->model('mustadz');
		$this->load->model('mprofiladmin');
	}

	//view all ustadz
	public function index(){
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['page'] = "Ustadz";
		$data['cmustadz'] = $this->mustadz->tampilustadz()->result();
		$data['error']=$this->session->userdata('err')?$this->session->userdata('err'):'';

		$this->load->view('core/core',$data);
		$this->load->view('vustadz',$data);
		$this->load->view('core/footer',$data);
	}

/*
method untuk ke hal tulis post
insert + delete

*/
	public function tambahust(){
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['page'] = "Tambah Ustadz";
		$data['error']=$this->session->userdata('err')?$this->session->userdata('err'):'';
		$data['input']=$this->session->userdata('input')?$this->session->userdata('input'):
			array(
				'usnama' => '',
				'usnotelp' => '',
				'usalamat' => '',
				'mediaid' => ''
			);

		$this->load->view('core/core',$data);
		$this->load->view('vustadz',$data);
		$this->load->view('core/footer',$data);
		//bersih session
		$this->session->set_userdata('err',null);
		$this->session->set_userdata('input',null);
	}

	public function dbtambahust(){
		//ustadz id auto incremented
		// $data['usid'] = $this->input->post('usid');
		$this->form_validation->set_rules('usnama','Nama Ustadz','required|min_length[2]|max_length[50]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=2 karakter',
				'max_length' => '%s harus <=50 karakter'
			)
		);
		$this->form_validation->set_rules('usnotelp','No telp','max_length[50]',
			array(
				'max_length' => '%s harus <=20 karakter'
			)
		);
		$this->form_validation->set_rules('usalamat','Alamat Ustadz','max_length[255]',
			array(
				'max_length' => '%s harus <=255 karakter'
			)
		);
		$this->form_validation->set_rules('mediaid','Nama Ustadz','max_length[11]',
			array(
				'max_length' => '%s harus <=11 karakter'
			)
		);

		$data['usnama'] = $this->input->post('usnama');
		$data['usnotelp'] = $this->input->post('usnotelp');
		$data['usalamat'] = $this->input->post('usalamat');
		$data['mediaid'] = $this->input->post('mediaid');

		if (!$this->form_validation->run()) {
			$this->session->set_userdata('err',validation_errors());
			$this->session->set_userdata('input',$data);
			redirect('ustadz/tambahust');
		}

		$this->mustadz->tambahust($data);
		redirect(base_url('ustadz'));
		unset($data);
	}

	public function dbubah(){
		$this->form_validation->set_rules('usnama','Nama Ustadz','required|min_length[2]|max_length[50]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=2 karakter',
				'max_length' => '%s harus <=50 karakter'
			)
		);
		$this->form_validation->set_rules('usnotelp','No telp','max_length[50]',
			array(
				'max_length' => '%s harus <=20 karakter'
			)
		);
		$this->form_validation->set_rules('usalamat','Alamat Ustadz','max_length[255]',
			array(
				'max_length' => '%s harus <=255 karakter'
			)
		);
		$this->form_validation->set_rules('mediaid','Nama Ustadz','max_length[11]',
			array(
				'max_length' => '%s harus <=11 karakter'
			)
		);
		//rawan
		$data['usid'] = $this->input->post('usid');
		$data['usnama'] = $this->input->post('usnama');
		$data['usnotelp'] = $this->input->post('usnotelp');
		$data['usalamat'] = $this->input->post('usalamat');
		$data['mediaid'] = $this->input->post('mediaid');

		if (!$this->form_validation->run()) {
			$this->session->set_userdata('err',validation_errors());
			$this->session->set_userdata('input',$data);
			redirect('ustadz/ubahust'.$data['usid']);
		}

		$this->mustadz->ubahust($data);
		redirect(base_url('ustadz'));
		unset($data);
	}

	public function dbhapus($usid){
		$data['usid'] = $usid;
		$this->mustadz->hapusust($data);

		redirect(base_url('ustadz'));
		unset($data,$usid);
	}

	public function ubahust($usid){
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['page'] = "Ubah Ustadz";
		$data['usid'] = $usid;
		$data['ustadz'] = $this->mustadz->tampilustadz($data)->row();
		$data['error']=$this->session->userdata('err')?$this->session->userdata('err'):'';
		$data['input']=$this->session->userdata('input')?$this->session->userdata('input'):
			array(
				'usnama' => '',
				'usnotelp' => '',
				'usalamat' => '',
				'mediaid' => ''
			);

		$this->load->view('core/core',$data);
		$this->load->view('vustadz',$data);
		$this->load->view('core/footer',$data);

		//bersih session
		$this->session->set_userdata('err',null);
		$this->session->set_userdata('input',null);
	}

	public function hapusustadz(){
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['page'] = "Hapus Ustadz";
		// $data['tanya'] = "<script>alert('yakin hapus ?')</script>";
		// $this->mpost->

		$this->load->view('core/core',$data);
		$this->load->view('vustadz',$data);
		$this->load->view('core/footer',$data);
		redirect(base_url('ustadz'));
	}
}
