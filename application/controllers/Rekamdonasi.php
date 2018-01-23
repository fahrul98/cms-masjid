<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekamdonasi extends CI_Controller {

/*
isi :
1. rekamdonasi. operasi CRUD
vars:
rdid
rdwaktu
rdjumlah
rddonatur
rdtotal

*/

	public function __construct(){
		parent::__construct();
		//load model
		$this->load->model('mrdonasi');
	}

	//view all rekamdonasi
	public function index(){
		$data['page'] = "Rekam Donasi";
		$data['cmrdonasi'] = $this->mrdonasi->tampilrdonasi()->result();

		$this->load->view('core/core',$data);
		$this->load->view('vrdonasi',$data);
	}

/*
method untuk ke hal tulis post
insert + delete

*/
	public function tambahrdonasi(){
		$data['page'] = "Tambah rekamdonasi";

		$this->load->view('core/core',$data);
		$this->load->view('vrdonasi',$data);
	}

	public function dbtambahrdonasi(){
		//rekamdonasi id auto incremented
		// $data['rdid'] = $this->input->post('rdid');
		// $data['rdid']=$this->input->post('');
		$data['rdwaktu']=$this->input->post('rdwaktu');
		$data['rdjumlah']=$this->input->post('rdjumlah');
		$data['rddonatur']=$this->input->post('rddonatur');
		$data['rdtotal']=$this->input->post('rdtotal');

		$this->mrdonasi->tambahrdonasi($data);
		redirect(base_url('rekamdonasi'));
		unset($data);
	}

	public function dbubah(){
		//rawan
		$data['rdwaktu']=$this->input->post('rdwaktu');
		$data['rdjumlah']=$this->input->post('rdjumlah');
		$data['rddonatur']=$this->input->post('rddonatur');
		$data['rdtotal']=$this->input->post('rdtotal');
		$data['rdid']=$this->input->post('rdid');

		$this->mrdonasi->ubahrdonasi($data);
		redirect(base_url('rekamdonasi'));
		unset($data);
	}

	public function dbhapus($rdid){
		$data['rdid'] = $rdid;
		$this->mrdonasi->hapusrdonasi($data);

		redirect(base_url('rekamdonasi'));
		unset($data,$rdid);
	}

	public function ubahrdonasi($rdid){
		$data['page'] = "Ubah rekamdonasi";
		$data['rdid'] = $rdid;
		$data['cmrdonasi'] = $this->mrdonasi->tampilrdonasi($data)->row();

		$this->load->view('core/core',$data);
		$this->load->view('vrdonasi',$data);
	}

	public function hapusrdonasi(){
		$data['page'] = "Hapus rekamdonasi";
		// $data['tanya'] = "<script>alert('yakin hapus ?')</script>";
		// $this->mpost->

		$this->load->view('core/core',$data);
		$this->load->view('vrdonasi',$data);
		redirect(base_url('rekamdonasi'));
	}
}
