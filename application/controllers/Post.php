<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

/*
isi :
1. Post. operasi CRUD
vars:
postid
psbuat
psubah
tagid
psjudul
psustadz
pstext
mediaid
*/

	public function __construct($postid = null){
		parent::__construct();
		//load model
		$this->load->model('mpost');
		$this->load->model('mprofiladmin');
	}

	//view all post

	public function index($postid = null){
		//jika admin login
		if (true) {
			$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
			// $data['mode'] = '';
			$data['page'] = "Post";
			$data['cmpost'] = $this->mpost->tampilpost()->result();

			$this->load->view('core/core',$data);
			$this->load->view('vpost',$data);
			$this->load->view('core/footer',$data);
		}else {

		}
	}

	//view post untuk netizen
	public function view($postid=null){
		//jika postid null maka muncul daftar post
		if (!isset($postid)) {
			// $postid = 1;
			// $data['mode'] = 'viewall';
			$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
			$data['page'] = "Semua Post";
			$data['cmpost'] = $this->mpost->tampilpost()->result();

			$this->load->view('core/core',$data);
			$this->load->view('vpost',$data);
			$this->load->view('core/footer',$data);
		}else {
			$data['mode'] = 'view';
			$data['postid'] = $postid;
			$data['post'] = $this->mpost->tampilpost($data)->row();
			$data['page'] = $data['post']->psjudul;

			$this->load->view('core/core',$data);
			$this->load->view('vpost',$data);
			$this->load->view('core/footer',$data);
		}
	}

/*

method-method untuk operasi admin

*/
	public function tulis(){
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['page'] = "Tulis Postingan";

		$this->load->view('core/core',$data);
		$this->load->view('vpost',$data);
		$this->load->view('core/footer',$data);
	}

	public function dbtulis(){
		$data['psjudul'] = $this->input->post('judul');
		$data['psustadz'] = $this->input->post('ustadz');
		$data['pstext'] = $this->input->post('text');

		$this->mpost->buatpost($data);
		redirect(base_url('post'));
		unset($data);
	}

	public function dbubah(){
		$data['postid'] = $this->input->post('postid');
		$data['psjudul'] = $this->input->post('judul');
		$data['psustadz'] = $this->input->post('ustadz');
		$data['pstext'] = $this->input->post('text');

		$this->mpost->ubahpost($data);
		redirect(base_url('post'));
		unset($data);
	}

	public function dbhapus($postid){
		$data['postid'] = $postid;
		$this->mpost->hapuspost($data);

		redirect(base_url('post'));
		unset($data,$postid);
	}

	public function ubahpost($postid){
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['page'] = "Ubah Postingan";
		$data['postid'] = $postid;
		$data['post'] = $this->mpost->tampilpost($data)->row();

		$this->load->view('core/core',$data);
		$this->load->view('vpost',$data);
		$this->load->view('core/footer',$data);
	}

	public function hapuspost(){
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['page'] = "Hapus Postingan";
		// $data['tanya'] = "<script>alert('yakin hapus ?')</script>";
		// $this->mpost->

		$this->load->view('core/core',$data);
		$this->load->view('vpost',$data);
		redirect(base_url('post'));
	}

/*

method-method untuk user view

*/

}
