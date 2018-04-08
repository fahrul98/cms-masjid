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
		if ($this->session->userdata('username') and $this->session->userdata('userpass')){
		}else{
			redirect(base_url(''));
		}
		//load model
		$this->load->model('mprofilm');
		$this->load->model('mprofiladmin');
		$this->load->model('mpengaturan');
	}
	
	public function index(){
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
    $data['page'] = "Profil Masjid";
		$data['ctrl'] = "masjid";
    $data['profil'] = $this->mprofilm->tampilprofilm()->row();
		$data['pgt']=$this->mpengaturan->tampilpengaturan()->row();
		$data['error']=$this->session->userdata('err')?$this->session->userdata('err'):'';
		$data['profil']=$this->session->userdata('input')?$this->session->userdata('input'):
			array(
				'pnama' => $data['profil']->pnama,
				'pnama2' => $data['profil']->pnama,
				'pdeskripsi' => $data['profil']->pdeskripsi,
				'psejarah' => $data['profil']->psejarah,
				'pvisimisi' => $data['profil']->pvisimisi
			);

		$this->load->view('core/core',$data);
		$this->load->view('vprofilm',$data);
		$this->load->view('core/footer',$data);
		$this->session->set_userdata('err',null);
		$this->session->set_userdata('input',null);
	}

	public function dbubahprofilm(){
		$this->form_validation->set_rules('pnama','Nama Masjid','required|min_length[5]|max_length[50]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=5 karakter',
				'max_length' => '%s harus <=50 karakter'
			)
		);
		$this->form_validation->set_rules('pnama2','Nama Masjid','required|min_length[5]|max_length[5000]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=8 karakter',
				'max_length' => '%s harus <=50 karakter'
			)
		);
		$this->form_validation->set_rules('pdeskripsi','Deskripsi','required|min_length[5]|max_length[5000]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=5 karakter',
				'max_length' => '%s harus <=5000 karakter'
			)
		);
		$this->form_validation->set_rules('psejarah','Deskripsi','required|min_length[5]|max_length[5000]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=5 karakter',
				'max_length' => '%s harus <=5000 karakter'
			)
		);
		$this->form_validation->set_rules('pvisimisi','Visi Misi','required|min_length[5]|max_length[5000]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=5 karakter',
				'max_length' => '%s harus <=5000 karakter'
			)
		);

		$data['pnama'] = $this->input->post('pnama');
		$data['pnama2'] = $this->input->post('pnama2');
		$data['pdeskripsi'] = $this->input->post('pdeskripsi');
		$data['psejarah'] = $this->input->post('psejarah');
		$data['pvisimisi'] = $this->input->post('pvisimisi');

		if (!$this->form_validation->run()) {
			$this->session->set_userdata('err',validation_errors());
			$this->session->set_userdata('input',$data);
			redirect('profilm');
		}else{
			$this->session->set_userdata('err','Berhasil diubah');
		}

		$this->mprofilm->ubahprofilm($data);
	}
}
