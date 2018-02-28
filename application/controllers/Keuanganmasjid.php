<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuanganmasjid extends CI_Controller {

/*
isi :
1. Post. operasi CRUD
vars:
kmid
kmwaktu
kmketerangan
kmpengeluaran
kmsaldo

*/

	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('username') and $this->session->userdata('userpass')){
		}else{
			redirect(base_url(''));
		}
		//load model
		$this->load->model('mkmasjid');
		$this->load->model('mprofiladmin');
	}
//view all post

	public function index(){
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['page'] = "Keuangan Masjid";
		$data['ctrl'] = "kmasjid";
		$data['kmasjid'] = $this->mkmasjid->tampilkmasjid()->result();

		$this->load->view('core/core',$data);
		$this->load->view('vkmasjid',$data);
		$this->load->view('core/footer',$data);
	}

/*
method untuk ke hal tulis post
insert + delete

*/
	public function tambahentri(){
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['page'] = "Tambah Entri";
		$data['ctrl'] = "kmasjid";

		$data['error']=$this->session->userdata('err')?$this->session->userdata('err'):'';
		$data['input']=$this->session->userdata('input')?$this->session->userdata('input'):
			array(
				'kmwaktu' => '',
				'kmketerangan' => '',
				'kmpengeluaran' => '',
				'kmsaldo' => ''
			);

		$this->load->view('core/core',$data);
		$this->load->view('vkmasjid',$data);
		$this->load->view('core/footer',$data);
		$this->session->set_userdata('err',null);
		$this->session->set_userdata('input',null);
	}

	public function dbentri(){
		// $data['kmid']=$this->input->post('kmid');
		$this->form_validation->set_rules('kmketerangan','Keterangan','required|min_length[5]|max_length[30]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=3 karakter',
				'max_length' => '%s harus <=30 karakter',
			)
		);
		$this->form_validation->set_rules('kmpengeluaran','Jumlah nominal','required|min_length[4]|max_length[30]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=4 karakter',
				'max_length' => '%s harus <=30 karakter',
			)
		);
		$this->form_validation->set_rules('kmsaldo','Saldo','required|min_length[4]|max_length[30]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=4 karakter',
				'max_length' => '%s harus <=30 karakter',
			)
		);

		$data['kmwaktu']=$this->input->post('kmwaktu');
		$data['kmketerangan']=$this->input->post('kmketerangan');
		$data['kmpengeluaran']=$this->input->post('kmpengeluaran');
		$data['kmsaldo']=$this->input->post('kmsaldo');

		if (!$this->form_validation->run()) {
			$this->session->set_userdata('err',validation_errors());
			$this->session->set_userdata('input',$data);
			redirect('keuanganmasjid/tambahentri');
		}

		$this->mkmasjid->buatkmasjid($data);
		redirect(base_url('keuanganmasjid'));
		unset($data);
	}

	public function dbubah(){
		$this->form_validation->set_rules('kmketerangan','Keterangan','required|min_length[5]|max_length[30]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=3 karakter',
				'max_length' => '%s harus <=30 karakter',
			)
		);
		$this->form_validation->set_rules('kmpengeluaran','Jumlah nominal','required|min_length[4]|max_length[30]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=4 karakter',
				'max_length' => '%s harus <=30 karakter',
			)
		);
		$this->form_validation->set_rules('kmsaldo','Saldo','required|min_length[4]|max_length[30]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=4 karakter',
				'max_length' => '%s harus <=30 karakter',
			)
		);

		$data['kmid']=$this->input->post('kmid');
		$data['kmwaktu']=$this->input->post('kmwaktu');
		$data['kmketerangan']=$this->input->post('kmketerangan');
		$data['kmpengeluaran']=$this->input->post('kmpengeluaran');
		$data['kmsaldo']=$this->input->post('kmsaldo');

		if (!$this->form_validation->run()) {
			$this->session->set_userdata('err',validation_errors());
			$this->session->set_userdata('input',$data);
			redirect('keuanganmasjid/ubahkmasjid/'.$data['kmid']);
		}

		$this->mkmasjid->ubahkmasjid($data);
		redirect(base_url('keuanganmasjid'));
		unset($data);
	}

	public function dbhapus($kmid){
		$data['kmid'] = $kmid;
		$this->mkmasjid->hapuskmasjid($data);

		redirect(base_url('keuanganmasjid'));
		unset($data,$kmid);
	}

	public function ubahkmasjid($kmid){
		if($kmid==null||$kmid==0){ redirect('keuanganmasjid');}
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['page'] = "Ubah Entri";
		$data['ctrl'] = "kmasjid";
		$data['kmid'] = $kmid;
		$data['kmasjid'] = $this->mkmasjid->tampilkmasjid($data)->row();
		$data['error']=$this->session->userdata('err')?$this->session->userdata('err'):'';
		$data['input']=$this->session->userdata('input')?$this->session->userdata('input'):
			array(
				'kmwaktu' => '',
				'kmketerangan' => '',
				'kmpengeluaran' => '',
				'kmsaldo' => ''
			);

		$this->load->view('core/core',$data);
		$this->load->view('vkmasjid',$data);
		$this->load->view('core/footer',$data);
		$this->session->set_userdata('err',null);
		$this->session->set_userdata('input',null);
	}

	public function hapuspost(){
		$data['page'] = "Hapus Postingan";
		// $data['tanya'] = "<script>alert('yakin hapus ?')</script>";
		// $this->mpost->

		$this->load->view('core/core',$data);
		$this->load->view('vpost',$data);
		redirect(base_url('post'));
	}
}
