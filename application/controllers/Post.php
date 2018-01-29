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
	public function view($slug=null){
		//jika postid null maka muncul daftar post
		if (!isset($slug)) {
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
			$data['slug'] = $slug;
			$data['post'] = $this->mpost->tampilpost($data)->row();
			$data['page'] = $data['post']->psjudul;

			$this->load->view('core/core',$data);
			$this->load->view('vpost',$data);
			$this->load->view('core/footer',$data);
		}
		$this->add_count($data['post']->postid);
		unset($data, $slug);
	}

	//view counter
	public function add_count($postid){
		$this->load->helper('cookie');
		$data['visitor']=$this->input->cookie($postid, FALSE);
		$data['ip'] = $this->input->ip_address();
		$data['expire']=60*60*24;
		if ($data['visitor'] == false) {
	        $cookie = array(
	            "name"   => $postid,
	            "value"  => $data['ip'],
	            "expire" => $data['expire'],
	            "secure" => false
	        );
	        $this->input->set_cookie($cookie);
	        $this->mpost->update_counter($postid);
    	}
		unset($data, $postid, $cookie);
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
