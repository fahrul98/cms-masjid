<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwalkegiatan extends CI_Controller {

/*
isi :
1. Jadwalkegiatan masjid operasi CRUD
vars:
jkid
jknama
jkpihak
jkwaktu

*/

	public function __construct(){
		parent::__construct();
		//load model
		$this->load->model('mjkegiatan');
	}

	public function index(){
	  $data['page'] = "Jadwal Kegiatan";
		$data['jadwalk'] = $this->mjkegiatan->tampiljkegiatan()->result();

		$this->load->view('core/core',$data);
		$this->load->view('vjkegiatan',$data);
		$this->load->view('core/footer',$data);
	}

	public function tambahkegiatan(){
		$data['page'] = "Tambah Kegiatan";

		$this->load->view('core/core',$data);
		$this->load->view('vjkegiatan',$data);
		$this->load->view('core/footer',$data);
	}

	public function ubahjkegiatan($jkid){
		$data['page'] = "Ubah Kegiatan";
		$data['jkid'] = $jkid;
		$data['jadwalk'] = $this->mjkegiatan->tampiljkegiatan($data)->row();

		$this->load->view('core/core',$data);
		$this->load->view('vjkegiatan',$data);
		$this->load->view('core/footer',$data);
	}

	public function dbtambahjk(){
		// $data['jkid']=$this->input->post('');
		$data['jknama']=$this->input->post('jknama');
		$data['jkpihak']=$this->input->post('jkpihak');
		$data['jkwaktu']=$this->input->post('jkwaktu');
		$data['tagid']=$this->input->post('tagid');

		$this->mjkegiatan->buatjkegiatan($data);
		redirect(base_url('jadwalkegiatan'));
	}

	public function dbubahjk(){
		$data['jkid']=$this->input->post('jkid');
		$data['jknama']=$this->input->post('jknama');
		$data['jkpihak']=$this->input->post('jkpihak');
		$data['jkwaktu']=$this->input->post('jkwaktu');
		$data['tagid']=$this->input->post('tagid');

		$this->mjkegiatan->ubahjkegiatan($data);
		redirect(base_url('jadwalkegiatan'));
	}

	public function dbhapus($jkid){
		$data['jkid'] = $jkid;
		$this->mjkegiatan->hapusjkegiatan($data);
		redirect(base_url('jadwalkegiatan'));
	}
}
