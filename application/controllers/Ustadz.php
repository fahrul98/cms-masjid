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
	}

	//view all ustadz
	public function index(){
		$data['page'] = "Ustadz";
		$data['cmustadz'] = $this->mustadz->tampilustadz()->result();

		$this->load->view('core/core',$data);
		$this->load->view('vustadz',$data);
	}

/*
method untuk ke hal tulis post
insert + delete

*/
	public function tambahust(){
		$data['page'] = "Tambah Ustadz";

		$this->load->view('core/core',$data);
		$this->load->view('vustadz',$data);
	}

	public function dbtambahust(){
		//ustadz id auto incremented
		// $data['usid'] = $this->input->post('usid');
		$data['usnama'] = $this->input->post('usnama');
		$data['usnotelp'] = $this->input->post('usnotelp');
		$data['usalamat'] = $this->input->post('usalamat');
		$data['mediaid'] = $this->input->post('mediaid');

		$this->mustadz->tambahust($data);
		redirect(base_url('ustadz'));
		unset($data);
	}

	public function dbubah(){
		//rawan
		$data['usid'] = $this->input->post('usid');
		$data['usnama'] = $this->input->post('usnama');
		$data['usnotelp'] = $this->input->post('usnotelp');
		$data['usalamat'] = $this->input->post('usalamat');
		$data['mediaid'] = $this->input->post('mediaid');

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
		$data['page'] = "Ubah Ustadz";
		$data['usid'] = $usid;
		$data['ustadz'] = $this->mustadz->tampilustadz($data)->row();

		$this->load->view('core/core',$data);
		$this->load->view('vustadz',$data);
	}

	public function hapusustadz(){
		$data['page'] = "Hapus Ustadz";
		// $data['tanya'] = "<script>alert('yakin hapus ?')</script>";
		// $this->mpost->

		$this->load->view('core/core',$data);
		$this->load->view('vustadz',$data);
		redirect(base_url('ustadz'));
	}
}
