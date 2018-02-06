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
		$this->load->model('mprofiladmin');
	}

	//view all rekamdonasi
	public function index(){
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['page'] = "Rekam Donasi";
		$data['cmrdonasi'] = $this->mrdonasi->tampilrdonasi()->result();
		$data['error']=$this->session->userdata('err')?$this->session->userdata('err'):'';

		$this->load->view('core/core',$data);
		$this->load->view('vrdonasi',$data);
		$this->load->view('core/footer',$data);
	}

/*
method untuk ke hal tulis post
insert + delete

*/
	public function tambahrdonasi(){
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['page'] = "Tambah rekamdonasi";
		$data['error']=$this->session->userdata('err')?$this->session->userdata('err'):'';
		$data['input']=$this->session->userdata('input')?$this->session->userdata('input'):
			array(
				'rdwaktu' => '',
				'rdjumlah' => '',
				'rddonatur' => '',
				'rdtotal' => '',
				'rdid' => ''
			);

		$this->load->view('core/core',$data);
		$this->load->view('vrdonasi',$data);
		$this->load->view('core/footer',$data);

		//bersih session
		$this->session->set_userdata('err',null);
		$this->session->set_userdata('input',null);
	}

	public function dbtambahrdonasi(){
		//rekamdonasi id auto incremented
		$this->form_validation->set_rules('rdjumlah','Nominal','required|min_length[8]|max_length[11]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=4 karakter',
				'max_length' => '%s harus <=11 karakter'
			)
		);

		$data['rdwaktu']=$this->input->post('rdwaktu');
		$data['rdjumlah']=$this->input->post('rdjumlah');
		$data['rddonatur']=$this->input->post('rddonatur')!=''?$this->input->post('rddonatur'):null;
		// if($this->input->post('rddonatur')==''){
		// 	$data['rddonatur']=null;
		// }

		$data['rdtotal']=$this->input->post('rdtotal');
		if (!$this->form_validation->run()) {
			$this->session->set_userdata('err',validation_errors());
			$this->session->set_userdata('input',$data);
			redirect('rekamdonasi/tambahrdonasi');
		}

		$this->mrdonasi->tambahrdonasi($data);
		redirect(base_url('rekamdonasi'));
		unset($data);
	}

	public function dbubah(){
		$this->form_validation->set_rules('rdjumlah','Nominal','required|min_length[8]|max_length[11]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=4 karakter',
				'max_length' => '%s harus <=11 karakter'
			)
		);
		//rawan
		$data['rdwaktu']=$this->input->post('rdwaktu');
		$data['rdjumlah']=$this->input->post('rdjumlah');
		$data['rddonatur']=$this->input->post('rddonatur');
		$data['rdtotal']=$this->input->post('rdtotal');
		$data['rdid']=$this->input->post('rdid');

		if (!$this->form_validation->run()) {
			$this->session->set_userdata('err',validation_errors());
			$this->session->set_userdata('input',$data);
			redirect('rekamdonasi/ubahrdonasi/'.$data['rdid']);
		}

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
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['page'] = "Ubah rekamdonasi";
		$data['rdid'] = $rdid;
		$data['cmrdonasi'] = $this->mrdonasi->tampilrdonasi($data)->row();
		$data['error']=$this->session->userdata('err')?$this->session->userdata('err'):'';
		$data['input']=$this->session->userdata('input')?$this->session->userdata('input'):
			array(
				'rdwaktu' => '',
				'rdjumlah' => '',
				'rddonatur' => '',
				'rdtotal' => '',
				'rdid' => ''
			);

		$this->load->view('core/core',$data);
		$this->load->view('vrdonasi',$data);
		$this->load->view('core/footer',$data);

		//bersih session
		$this->session->set_userdata('err',null);
		$this->session->set_userdata('input',null);
	}

	public function hapusrdonasi(){
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['page'] = "Hapus rekamdonasi";
		// $data['tanya'] = "<script>alert('yakin hapus ?')</script>";
		// $this->mpost->

		$this->load->view('core/core',$data);
		$this->load->view('vrdonasi',$data);
		redirect(base_url('rekamdonasi'));
	}
}
