<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

/*
isi :
Beranda untuk netizen/ non-admin view
*/

	public function __construct(){
		parent::__construct();
		//load model
		$this->load->model('mpost');
	}

	//view all post
	public function index(){
		$data['page'] = "Home";
		$data['cmpost'] = $this->mpost->tampilpost()->result();

		$this->load->view('core/core',$data);
		$this->load->view('vpost',$data);
	}

/*

method-method untuk operasi admin

*/
	public function tulis(){
		$data['page'] = "Tulis Postingan";

		$this->load->view('core/core',$data);
		$this->load->view('vpost',$data);
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
		$data['page'] = "Ubah Postingan";
		$data['postid'] = $postid;
		$data['post'] = $this->mpost->tampilpost($data)->row();

		$this->load->view('core/core',$data);
		$this->load->view('vpost',$data);
	}

	public function hapuspost(){
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
