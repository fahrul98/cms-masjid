<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tag extends CI_Controller {

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
		$this->load->model('mpost');
		$this->load->model('mprofiladmin');
	}

	public function index(){
	  $data['page'] = "Tag";
		$data['cmtag'] = $this->mpost->tampiltag()->result();
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();

		$this->load->view('core/core',$data);
		$this->load->view('vtag',$data);
		$this->load->view('core/footer',$data);
	}

	public function tag(){
		$data['page'] = "Tag";
		$this->load->model('mprofiladmin');
		$data['cmtag'] = $this->mpost->tampiltag()->result();
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();

		$this->load->view('core/core',$data);
		$this->load->view('vtag',$data);
		$this->load->view('core/footer',$data);
	}

	public function tambahtag(){
		$data['page'] = "Tambah Tag";
		$this->load->model('mprofiladmin');
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();

		$this->load->view('core/core',$data);
		$this->load->view('vtag',$data);
		$this->load->view('core/footer',$data);
	}

	public function dbtambah(){
		$data['tag'] = $this->input->post('tag');

		$this->mpost->tambahtag($data);
		redirect(base_url('tag'));
		unset($data);
	}

	public function dbhapus($tagid){
		$data['tagid'] = $tagid;
		$this->mpost->hapustag($data);
		redirect(base_url('tag'));
	}
}
