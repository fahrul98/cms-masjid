<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
// application/controllers/Beranda.php
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
		$this->load->model('mprofilm');
		$this->load->model('mpost');
	}

	//home page
	public function index(){
		//$this->load->model('mprofilm');
		$this->load->model('mpost');
		$this->load->model('mmedia');
		$data['page'] = "Beranda";
		$data['mode'] = "pengunjung";
		$data['cmprofil'] = $this->mprofilm->tampilprofilm()->row();
		$data['cmpost'] = $this->mpost->tampilpost($data)->result();
		$data['profil'] = $this->mprofilm->tampilprofilm()->row();
		$batas['batas'] = 4;
		$data['imgs'] = $this->mmedia->tampilmedia($batas)->result();

		$this->load->view('core/core',$data);
		$this->load->view('vpengunjung',$data);
		$this->load->view('core/footer',$data);
	}

/*

method-method halaman pengunjung

*/

//postid diganti slug

	//view post + counting
	public function search(){
		$this->load->model('mpost');
		$data['cmpost'] = $this->mpost->get_search();
		$data['page'] = "Semua Post";
		$data['page2'] = "balik";// untuk tombol kembali

		$data['cmprofil'] = $this->mprofilm->tampilprofilm()->row();
		$data['mode'] = "pengunjung";// biar navbar muncul

		$this->load->view('core/core',$data);
		$this->load->view('vpengunjung',$data);
		$this->load->view('core/footer',$data);
	}

	public function post($slug=null){
		$this->load->model('mpost');
		$data['cmprofil'] = $this->mprofilm->tampilprofilm()->row();
		$data['mode'] = "pengunjung";
		//jika postid null maka muncul daftar post

		if (is_numeric($slug) or !isset($slug)) {
			$jumlah_data = $this->mpost->jumlah_data();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'beranda/post/';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 5;
			$this->pagination->initialize($config);
			$from = $this->uri->segment(3);
			//$data['user'] = $this->m_data->data($config['per_page'],$from);
			$data['cmpost'] = $this->mpost->tampilpaging($config['per_page'],$from,"publik on")->result();
			$str_links=$this->pagination->create_links();
			$data["links"] = explode('.',$str_links );
			// $postid = 1;

			$data['page'] = "Semua Post";
		}else {
			$data['slug'] = $slug;
			$data['post'] = $this->mpost->tampilpost($data)->row();
			//jika post tidak ada redirect ke 404
			if($data['post']==null){
				redirect(base_url(''));
			}

			$data['page'] = "tampilpost";
			$data['page2'] = $data['post']->psjudul;

			$this->add_count($data['post']->postid);
		}

		$data['cmpostfoot'] = $this->mpost->tampilpost()->result();

		$this->load->view('core/core',$data);
		$this->load->view('vpengunjung',$data);
		$this->load->view('core/footer',$data);
		unset($data, $slug);
	}

	//view counter
	public function add_count($postid){
		$this->load->helper('cookie');
		$data['visitor']=$this->input->cookie($postid, FALSE);
		$data['ip'] = $this->input->ip_address();

		// $data['expire']=60*60*24;
		//eksperimen view time=1s biar lebih cepat
		$data['expire']=1;
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

	public function profilm(){
		$this->load->model('mprofilm');
		$data['mode'] = "pengunjung";
		$data['page'] = "Profil Masjid";
		$data['profil'] = $this->mprofilm->tampilprofilm()->row();
		$data['cmprofil'] = $this->mprofilm->tampilprofilm()->row();
		$data['cmpost'] = $this->mpost->tampilpost()->result();

		$this->load->view('core/core',$data);
		$this->load->view('vpengunjung',$data);
		$this->load->view('core/footer',$data);
	}

	public function takmirm(){
		$this->load->model('mtakmir');
		$data['mode'] = "pengunjung";
		$data['page'] = "Takmir Masjid";
		$data['cmtakmir'] = $this->mtakmir->tampiltakmir()->result();
		$data['cmprofil'] = $this->mprofilm->tampilprofilm()->row();
		$data['cmpost'] = $this->mpost->tampilpost()->result();

		$this->load->view('core/core',$data);
		$this->load->view('vpengunjung',$data);
		$this->load->view('core/footer',$data);
	}

	public function ustadz(){
		$this->load->model('mustadz');
		$data['mode'] = "pengunjung";
		$data['page'] = "Ustadz";
		$data['cmustadz'] = $this->mustadz->tampilustadz()->result();
		$data['cmprofil'] = $this->mprofilm->tampilprofilm()->row();
		$data['cmpost'] = $this->mpost->tampilpost()->result();

		$this->load->view('core/core',$data);
		$this->load->view('vpengunjung',$data);
		$this->load->view('core/footer',$data);
	}

	public function keuanganmasjid(){
		$this->load->model('mkmasjid');
		$this->load->model('mrdonasi');
		$data['mode'] = "pengunjung";
		$data['page'] = "Keuangan Masjid";
		$data['kmasjid'] = $this->mkmasjid->tampilkmasjid()->result();
		$data['cmrdonasi'] = $this->mrdonasi->tampilrdonasi()->result();
		$data['cmprofil'] = $this->mprofilm->tampilprofilm()->row();
		$data['cmpost'] = $this->mpost->tampilpost()->result();

		$this->load->view('core/core',$data);
		$this->load->view('vpengunjung',$data);
		$this->load->view('core/footer',$data);
	}

	public function jadwalkegiatan(){
		$this->load->model('mjkegiatan');
		$data['mode'] = "pengunjung";
		$data['page'] = "Jadwal Kegiatan";
		$data['jadwalk'] = $this->mjkegiatan->tampiljkegiatan()->result();
		$data['cmprofil'] = $this->mprofilm->tampilprofilm()->row();
		$data['cmpost'] = $this->mpost->tampilpost()->result();

		$this->load->view('core/core',$data);
		$this->load->view('vpengunjung',$data);
		$this->load->view('core/footer',$data);
	}

	public function bantuan(){
		$this->load->model('mjkegiatan');
		$data['mode'] = "pengunjung";
		$data['page'] = "Bantuan";
		$data['jadwalk'] = $this->mjkegiatan->tampiljkegiatan()->result();
		$data['cmprofil'] = $this->mprofilm->tampilprofilm()->row();
		$data['cmpost'] = $this->mpost->tampilpost()->result();

		$this->load->view('core/core',$data);
		$this->load->view('vpengunjung',$data);
		$this->load->view('core/footer',$data);
	}

	public function tentang(){
		$this->load->model('mjkegiatan');
		$data['mode'] = "pengunjung";
		$data['page'] = "Tentang";
		$data['jadwalk'] = $this->mjkegiatan->tampiljkegiatan()->result();
		$data['cmprofil'] = $this->mprofilm->tampilprofilm()->row();
		$data['cmpost'] = $this->mpost->tampilpost()->result();

		$this->load->view('core/core',$data);
		$this->load->view('vpengunjung',$data);
		$this->load->view('core/footer',$data);
	}

	public function galeri(){
		// $this->load->model('mustadz');
		$this->load->model('mpost');
		$this->load->model('mmedia');
		$data['cmprofil'] = $this->mprofilm->tampilprofilm()->row();
		$data['cmpost'] = $this->mpost->tampilpost($data)->result();
		// $data['profil'] = $this->mprofilm->tampilprofilm()->row();
		$data['imgs'] = $this->mmedia->tampilmedia()->result();
		$data['mode'] = "pengunjung";
		$data['page'] = "Galeri";
		// $data['cmustadz'] = $this->mustadz->tampilustadz()->result();

		$this->load->view('core/core',$data);
		$this->load->view('vpengunjung',$data);
		$this->load->view('core/footer',$data);
	}
}
