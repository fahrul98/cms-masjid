<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
/*
isi :
Halaman untuk netizen/ non-admin view. rencana : akses controller pengunjung menggunakan .htaccess biar urlnya lebih bagus
akses ke /view bebas.

landing +stats
navbar
profilmasjid sekilas
profiltakmir sekilas
post sekilas

sidebar?
*/


	public function __construct(){
		parent::__construct();
		//load model
	}

	//home page
	public function index(){
		$this->load->model('mprofilm');
		$this->load->model('mpost');
		$data['page'] = "Beranda";
		$data['mode'] = "pengunjung";
		$data['cmprofil'] = $this->mprofilm->tampilprofilm()->row();
		$data['cmpost'] = $this->mpost->tampilpost()->result();

		$this->load->view('core/core',$data);
		$this->load->view('vpengunjung',$data);
	}

/*

method-method halaman pengunjung

*/
	public function post($postid = null){
		$this->load->model('mpost');
		$data['page'] = "a";
		$data['mode'] = "pengunjung";
		if (!isset($postid)) {
			// $postid = 1;
			// $data['mode'] = 'viewall';
			$data['page'] = "Semua Post";
			$data['cmpost'] = $this->mpost->tampilpost()->result();
		}else {
			// $data['mode'] = 'view';
			$data['postid'] = $postid;
			$data['post'] = $this->mpost->tampilpost($data)->row();
			$data['page'] = $data['post']->psjudul;
		}

		$this->load->view('core/core',$data);
		$this->load->view('vpengunjung',$data);
	}

	public function profilm(){
		$this->load->model('mprofilm');
		$data['mode'] = "pengunjung";
		$data['page'] = "Profil Masjid";
		$data['profil'] = $this->mprofilm->tampilprofilm()->row();

		$this->load->view('core/core',$data);
		$this->load->view('vpengunjung',$data);
	}

	public function takmirm(){
		$this->load->model('mtakmir');
		$data['mode'] = "pengunjung";
		$data['page'] = "Takmir Masjid";
		$data['cmtakmir'] = $this->mtakmir->tampiltakmir()->result();

		$this->load->view('core/core',$data);
		$this->load->view('vpengunjung',$data);
	}

	public function ustadz(){
		$this->load->model('mustadz');
		$data['mode'] = "pengunjung";
		$data['page'] = "Ustadz";
		$data['cmustadz'] = $this->mustadz->tampilustadz()->result();

		$this->load->view('core/core',$data);
		$this->load->view('vpengunjung',$data);
	}

	public function keuanganmasjid(){
		// $this->load->model('mustadz');
		$data['mode'] = "pengunjung";
		$data['page'] = "Keuangan Masjid";
		// $data['cmustadz'] = $this->mustadz->tampilustadz()->result();

		$this->load->view('core/core',$data);
		$this->load->view('vpengunjung',$data);
	}
	public function jadwalkegiatan(){
		// $this->load->model('mustadz');
		$data['mode'] = "pengunjung";
		$data['page'] = "Jadwal Kegiatan";
		// $data['cmustadz'] = $this->mustadz->tampilustadz()->result();

		$this->load->view('core/core',$data);
		$this->load->view('vpengunjung',$data);
	}
	public function mmm(){
		// $this->load->model('mustadz');
		$data['mode'] = "pengunjung";
		$data['page'] = "Ustadz";
		// $data['cmustadz'] = $this->mustadz->tampilustadz()->result();

		$this->load->view('core/core',$data);
		$this->load->view('vpengunjung',$data);
	}
}
