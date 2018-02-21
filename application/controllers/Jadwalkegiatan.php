<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwalkegiatan extends CI_Controller {

/*
isi :
1. Jadwalkegiatan masjid operasi CRUD
vars:
jkid
jknama
jkpihak
jkwaktu

*/

	public function __construct(){
		parent::__construct();
		//cek login
		if ($this->session->userdata('username') and $this->session->userdata('userpass')){
		}else{
			redirect(base_url(''));
		}
		//load model
		$this->load->model('mjkegiatan');
		$this->load->model('mprofiladmin');//
		$this->load->model('mpost');
	}

	public function index(){
	  $data['page'] = "Jadwal Kegiatan";
		$data['jadwalk'] = $this->mjkegiatan->tampiljkegiatan()->result();
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();

		$this->load->view('core/core',$data);
		$this->load->view('vjkegiatan',$data);
		$this->load->view('core/footer',$data);
	}

	public function tambahkegiatan(){
		$data['page'] = "Tambah Kegiatan";
		$data['cmtag'] = $this->mpost->tampiltag()->result();
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['error']=$this->session->userdata('err')?$this->session->userdata('err'):'';
		$data['input']=$this->session->userdata('input')?$this->session->userdata('input'):
			array(
				'jknama' => '',
				'jkpihak' => '',
				'jkwaktu' => '',
				'tagid' => ''
			);

		$this->load->view('core/core',$data);
		$this->load->view('vjkegiatan',$data);
		$this->load->view('core/footer',$data);

		$this->session->set_userdata('err',null);
		$this->session->set_userdata('input',null);
	}

	public function ubahjkegiatan($jkid=null){
		//redirect jika tidak jkid jelas
		if($jkid==null||$jkid==0){ redirect('jadwalkegiatan');}

		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['page'] = "Ubah Kegiatan";
		$data['jkid'] = $jkid;
		$data['jadwalk'] = $this->mjkegiatan->tampiljkegiatan($data)->row();
		$data['cmtag'] = $this->mpost->tampiltag()->result();
		$data['error']=$this->session->userdata('err')?$this->session->userdata('err'):'';
		$data['input']=$this->session->userdata('input')?$this->session->userdata('input'):
			array(
				'jknama' => '',
				'jkpihak' => '',
				'jkwaktu' => '',
				'tagid' => ''
			);

		$this->load->view('core/core',$data);
		$this->load->view('vjkegiatan',$data);
		$this->load->view('core/footer',$data);

		//bersih session
		$this->session->set_userdata('err',null);
		$this->session->set_userdata('input',null);
	}

	public function dbtambahjk(){
		// $data['jkid']=$this->input->post('');
		$this->form_validation->set_rules('jknama','Nama kegiatan','required|min_length[3]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >3 karakter'
			)
		);

		$data['jknama']=$this->input->post('jknama');
		$data['jkpihak']=$this->input->post('jkpihak');
		$data['jkwaktu']=date('Y-m-d',strtotime($this->input->post('jkwaktu')));
		$data['tagid']=$this->input->post('tagid');

		if (!$this->form_validation->run()) {
			$this->session->set_userdata('err',validation_errors());
			$this->session->set_userdata('input',$data);
			redirect('jadwalkegiatan/tambahkegiatan');
		}

		$this->mjkegiatan->buatjkegiatan($data);

		redirect(base_url('jadwalkegiatan'));
	}

	public function dbubahjk(){
		$this->form_validation->set_rules('jknama','Nama kegiatan','required|min_length[3]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >3 karakter'
			)
		);

		$data['jkid']=$this->input->post('jkid');
		$data['jknama']=$this->input->post('jknama');
		$data['jkpihak']=$this->input->post('jkpihak');
		$data['jkwaktu']=$this->input->post('jkwaktu');
		$data['tagid']=$this->input->post('tagid');

		if (!$this->form_validation->run()) {
			$this->session->set_userdata('err',validation_errors());
			$this->session->set_userdata('input',$data);
			redirect('jadwalkegiatan/ubahjkegiatan/'.$data['jkid']);
		}

		$this->mjkegiatan->ubahjkegiatan($data);
		redirect(base_url('jadwalkegiatan'));
	}

	public function dbhapus($jkid){
		$data['jkid'] = $jkid;
		$this->mjkegiatan->hapusjkegiatan($data);
		redirect(base_url('jadwalkegiatan'));
	}
}
