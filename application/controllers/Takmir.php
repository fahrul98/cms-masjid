<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Takmir extends CI_Controller {

/*
isi :
1. takmir. operasi CRUD
vars:
tkid
tknama
tknotelp
tkjabatan
tkmasajabatan
mediaid

*/

	public function __construct(){
		parent::__construct();
		//load model
		$this->load->model('mtakmir');
		$this->load->model('mprofiladmin');
	}

	//view all takmir
	public function index(){
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['page'] = "Takmir";
		$data['cmtakmir'] = $this->mtakmir->tampiltakmir()->result();
		$data['error']=$this->session->userdata('err')?$this->session->userdata('err'):'';


		$this->load->view('core/core',$data);
		$this->load->view('vtakmir',$data);
		$this->load->view('core/footer',$data);
	}

/*
method untuk ke hal tulis post
insert + delete

*/
	public function tambahtk(){
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['page'] = "Tambah Takmir";
		$data['error']=$this->session->userdata('err')?$this->session->userdata('err'):'';
		$data['input']=$this->session->userdata('input')?$this->session->userdata('input'):
			array(
				'tknama' => '',
				'tknotelp' => '',
				'tkjabatan' => '',
				'tkmasajabatan' => '',
				'mediaid' => ''
			);

		$this->load->view('core/core',$data);
		$this->load->view('vtakmir',$data);
		$this->load->view('core/footer',$data);
		//bersih session
		$this->session->set_userdata('err',null);
		$this->session->set_userdata('input',null);
	}

	public function dbtambahtk(){
		//takmir id auto incremented
		// $data['tkid'] = $this->input->post('tkid');
		$this->form_validation->set_rules('tknama','Nama Takmir','required|min_length[1]|max_length[50]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=1 karakter',
				'max_length' => '%s harus <=50 karakter'
			)
		);
		$this->form_validation->set_rules('tknotelp','No. Telpon','max_length[20]',
			array(
				'max_length' => '%s harus <=20 karakter'
			)
		);
		$this->form_validation->set_rules('tkjabatan','Jabatan','max_length[30]',
			array(
				'max_length' => '%s harus <=20 karakter'
			)
		);
		$this->form_validation->set_rules('tkmasajabatan','Masa Jabatan','max_length[10]',
			array(
				'max_length' => '%s harus <=10 karakter'
			)
		);

		$data['tknama'] = $this->input->post('tknama');
		$data['tknotelp']= $this->input->post('tknotelp');
		$data['tkjabatan']= $this->input->post('tkjabatan');
		$data['tkmasajabatan']= $this->input->post('tkmasajabatan');
		$data['mediaid']= $this->input->post('mediaid');

		if (!$this->form_validation->run()) {
			$this->session->set_userdata('err',validation_errors());
			$this->session->set_userdata('input',$data);
			redirect('takmir/tambahtk');
		}

		$this->mtakmir->tambahtakmir($data);
		redirect(base_url('takmir'));
		unset($data);
	}

	public function dbubah(){
		$this->form_validation->set_rules('tknama','Nama Takmir','required|min_length[1]|max_length[50]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=1 karakter',
				'max_length' => '%s harus <=50 karakter'
			)
		);
		$this->form_validation->set_rules('tknotelp','No. Telpon','max_length[20]',
			array(
				'max_length' => '%s harus <=20 karakter'
			)
		);
		$this->form_validation->set_rules('tkjabatan','Jabatan','max_length[30]',
			array(
				'max_length' => '%s harus <=20 karakter'
			)
		);
		$this->form_validation->set_rules('tkmasajabatan','Masa Jabatan','max_length[10]',
			array(
				'max_length' => '%s harus <=10 karakter'
			)
		);
		//rawan
		$data['tkid'] = $this->input->post('tkid');
		$data['tknama'] = $this->input->post('tknama');
		$data['tknotelp']= $this->input->post('tknotelp');
		$data['tkjabatan']= $this->input->post('tkjabatan');
		$data['tkmasajabatan']= $this->input->post('tkmasajabatan');
		$data['mediaid']= $this->input->post('mediaid');

		if (!$this->form_validation->run()) {
			$this->session->set_userdata('err',validation_errors());
			$this->session->set_userdata('input',$data);
			redirect('takmir/ubahtk/'.$data['tkid']);
		}

		$this->mtakmir->ubahtakmir($data);
		redirect(base_url('takmir'));
		unset($data);
	}

	public function dbhapus($tkid){
		$data['tkid'] = $tkid;
		$this->mtakmir->haptkakmir($data);

		redirect(base_url('takmir'));
		unset($data,$tkid);
	}

	public function ubahtk($tkid){
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['page'] = "Ubah Takmir";
		$data['tkid'] = $tkid;
		$data['takmir'] = $this->mtakmir->tampiltakmir($data)->row();
		$data['error']=$this->session->userdata('err')?$this->session->userdata('err'):'';
		$data['input']=$this->session->userdata('input')?$this->session->userdata('input'):
			array(
				'tknama' => '',
				'tknotelp' => '',
				'tkjabatan' => '',
				'tkmasajabatan' => '',
				'mediaid' => ''
			);

		$this->load->view('core/core',$data);
		$this->load->view('vtakmir',$data);
		$this->load->view('core/footer',$data);

		//bersih session
		$this->session->set_userdata('err',null);
		$this->session->set_userdata('input',null);
	}

	public function haptkakmir(){
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['page'] = "Hapus takmir";
		// $data['tanya'] = "<script>alert('yakin hapus ?')</script>";
		// $this->mpost->

		$this->load->view('core/core',$data);
		$this->load->view('vtakmir',$data);
		$this->load->view('core/footer',$data);
		redirect(base_url('takmir'));
	}
}
