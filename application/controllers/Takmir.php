<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Takmir extends CI_Controller {

/*
isi :
1. takmir. operasi CRUD
vars:
tkid
tknama
tknotelp
tkjabatan
tkmasajabatan
mediaid

*/

	public function __construct(){
		parent::__construct();
		//load model
		$this->load->model('mtakmir');
	}

	//view all takmir
	public function index(){
		$data['page'] = "Takmir";
		$data['cmtakmir'] = $this->mtakmir->tampiltakmir()->result();

		$this->load->view('core/core',$data);
		$this->load->view('vtakmir',$data);
	}

/*
method untuk ke hal tulis post
insert + delete

*/
	public function tambahtk(){
		$data['page'] = "Tambah Takmir";

		$this->load->view('core/core',$data);
		$this->load->view('vtakmir',$data);
	}

	public function dbtambahtk(){
		//takmir id auto incremented
		// $data['tkid'] = $this->input->post('tkid');
		$data['tknama'] = $this->input->post('tknama');
		$data['tknotelp']= $this->input->post('tknotelp');
		$data['tkjabatan']= $this->input->post('tkjabatan');
		$data['tkmasajabatan']= $this->input->post('tkmasajabatan');
		$data['mediaid']= $this->input->post('mediaid');

		$this->mtakmir->tambahtakmir($data);
		redirect(base_url('takmir'));
		unset($data);
	}

	public function dbubah(){
		//rawan
		$data['tkid'] = $this->input->post('tkid');
		$data['tknama'] = $this->input->post('tknama');
		$data['tknotelp']= $this->input->post('tknotelp');
		$data['tkjabatan']= $this->input->post('tkjabatan');
		$data['tkmasajabatan']= $this->input->post('tkmasajabatan');
		$data['mediaid']= $this->input->post('mediaid');

		$this->mtakmir->ubahtakmir($data);
		redirect(base_url('takmir'));
		unset($data);
	}

	public function dbhapus($tkid){
		$data['tkid'] = $tkid;
		$this->mtakmir->haptkakmir($data);

		redirect(base_url('takmir'));
		unset($data,$tkid);
	}

	public function ubahtk($tkid){
		$data['page'] = "Ubah Takmir";
		$data['tkid'] = $tkid;
		$data['takmir'] = $this->mtakmir->tampiltakmir($data)->row();

		$this->load->view('core/core',$data);
		$this->load->view('vtakmir',$data);
	}

	public function haptkakmir(){
		$data['page'] = "Hapus takmir";
		// $data['tanya'] = "<script>alert('yakin hapus ?')</script>";
		// $this->mpost->

		$this->load->view('core/core',$data);
		$this->load->view('vtakmir',$data);
		redirect(base_url('takmir'));
	}
}
