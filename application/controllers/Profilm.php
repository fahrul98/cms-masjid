<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profilm extends CI_Controller {

/*
isi :
1. Profil masjid. operasi RU
vars:
pnama
pdeskripsi
psejarah
pvisimisi
*/
	public function __construct(){
		parent::__construct();
		//load model
		$this->load->model('mprofilm');
	}
	public function index(){
	    $data['page'] = "Profil Masjid";
	    $data['profil'] = $this->mprofilm->tampilprofilm()->row();

			$this->load->view('core/core',$data);
			$this->load->view('vprofilm',$data);
	}

	public function dbubahprofilm(){
		$data['pnama'] = $this->input->post('pnama');
		$data['pnama2'] = $this->input->post('pnama2');
		$data['pdeskripsi'] = $this->input->post('pdeskripsi');
		$data['psejarah'] = $this->input->post('psejarah');
		$data['pvisimisi'] = $this->input->post('pvisimisi');

		$this->mprofilm->ubahprofilm($data);
	}
}
