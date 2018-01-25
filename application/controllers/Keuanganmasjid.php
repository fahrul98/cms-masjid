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
		//load model
		$this->load->model('mkmasjid');
	}
//view all post

	public function index(){
		$data['page'] = "Keuangan Masjid";
		$data['kmasjid'] = $this->mkmasjid->tampilkmasjid()->result();

		$this->load->view('core/core',$data);
		$this->load->view('vkmasjid',$data);
	}

/*
method untuk ke hal tulis post
insert + delete

*/
	public function tambahentri(){
		$data['page'] = "Tambah Entri";

		$this->load->view('core/core',$data);
		$this->load->view('vkmasjid',$data);
	}

	public function dbentri(){
		// $data['kmid']=$this->input->post('kmid');
		$data['kmwaktu']=$this->input->post('kmwaktu');
		$data['kmketerangan']=$this->input->post('kmketerangan');
		$data['kmpengeluaran']=$this->input->post('kmpengeluaran');
		$data['kmsaldo']=$this->input->post('kmsaldo');

		$this->mkmasjid->buatkmasjid($data);
		redirect(base_url('keuanganmasjid'));
		unset($data);
	}

	public function dbubah(){
		$data['kmid']=$this->input->post('kmid');
		$data['kmwaktu']=$this->input->post('kmwaktu');
		$data['kmketerangan']=$this->input->post('kmketerangan');
		$data['kmpengeluaran']=$this->input->post('kmpengeluaran');
		$data['kmsaldo']=$this->input->post('kmsaldo');

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
		$data['page'] = "Ubah Entri";
		$data['kmid'] = $kmid;
		$data['kmasjid'] = $this->mkmasjid->tampilkmasjid($data)->row();

		$this->load->view('core/core',$data);
		$this->load->view('vkmasjid',$data);
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