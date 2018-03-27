<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ustadz extends CI_Controller {

/*
isi :
1. Ustadz. operasi CRUD
vars:
usid
usnama
usnotelp
usalamat
mediaid

*/

	public function __construct(){
		parent::__construct();
		//cek login
		if ($this->session->userdata('username') and $this->session->userdata('userpass')){
		}else{
			redirect(base_url(''));
		}
		//load model
		$this->load->model('mustadz');
		$this->load->model('mprofiladmin');
	}

	//view all ustadz
	public function index(){
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['page'] = "Ustadz";
		$data['ctrl'] = "masjid";
		$data['cmustadz'] = $this->mustadz->tampilustadz()->result();
		$data['error']=$this->session->userdata('err')?$this->session->userdata('err'):'';

		$this->load->view('core/core',$data);
		$this->load->view('vustadz',$data);
		$this->load->view('core/footer',$data);
	}

/*
method untuk ke hal tulis post
insert + delete

*/

//upload gambar
	public function do_upload($data){
	    $config['upload_path']= './uploads/ustadz';
	    $config['allowed_types']= 'gif|jpg|png';
	    $config['max_size']= 5000;
	    // $config['max_width']= 1024;
	    // $config['max_height']= 768;
	    // $this->load->library('upload', $config);
			$this->load->library('upload');
			$this->upload->initialize($config);

	    if (!$this->upload->do_upload('filename')){
	      $data = array('konfirmasi' => $this->upload->display_errors());

	      //print($data['filename']);
	    }else{
	      $data['filename'] = $this->upload->data('file_name');
	      $data['upload_data']= $this->upload->data();
	      $data['konfirmasi']= 'sukses';
	      // $this->load->view('upload_success', $data);
	    }
	    //$this->session->set_flashdata('data',$data);
	    return $data['filename'];
	    unset($data);
	}

	//hapus gambar
	public function hapusmedia($mediadir){
		$data['mediadir']=$mediadir;
		$data['path']="./uploads/ustadz".$data['mediadir'];
	    if (unlink($data['path'])) {
	      $data['konfirmasi']= $data['mediadir'].' terhapus';
	    }else{
	      // print("gagal");
	      $data['konfirmasi']= $data['mediadir'].' tidak terhapus';
	    }
	    $this->session->set_flashdata('data',$data);
	}

	public function tambahust(){
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['page'] = "Tambah Ustadz";
		$data['ctrl'] = "masjid";
		$data['search'] = "ustadz";
		$data['error']=$this->session->userdata('err')?$this->session->userdata('err'):'';
		$data['input']=$this->session->userdata('input')?$this->session->userdata('input'):
			array(
				'usnama' => '',
				'usnotelp' => '',
				'usalamat' => '',
				'mediaid' => ''
			);

		$this->load->view('core/core',$data);
		$this->load->view('vustadz',$data);
		$this->load->view('core/footer',$data);
		//bersih session
		$this->session->set_userdata('err',null);
		$this->session->set_userdata('input',null);
	}

	public function dbtambahust(){
		//ustadz id auto incremented
		$this->form_validation->set_rules('usnama','Nama Ustadz','required|min_length[2]|max_length[50]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=2 karakter',
				'max_length' => '%s harus <=50 karakter'
			)
		);
		$this->form_validation->set_rules('usnotelp','No telp','max_length[50]',
			array(
				'max_length' => '%s harus <=20 karakter'
			)
		);
		$this->form_validation->set_rules('usalamat','Alamat Ustadz','max_length[255]',
			array(
				'max_length' => '%s harus <=255 karakter'
			)
		);
		// $this->form_validation->set_rules('mediaid','Nama Ustadz','max_length[11]',
		// 	array(
		// 		'max_length' => '%s harus <=11 karakter'
		// 	)
		// );

		$data['usnama'] = $this->input->post('usnama');
		$data['usnotelp'] = $this->input->post('usnotelp');
		$data['usalamat'] = $this->input->post('usalamat');
		// $data['filename']= $this->do_upload($this->input->post('filename'));
		// $data['filename']= $this->do_upload($this->input->post('filename'));
		$data['filename']= $this->do_upload('filename');

		if (!$this->form_validation->run()) {
			$this->session->set_userdata('err',validation_errors());
			$this->session->set_userdata('input',$data);
			redirect('ustadz/tambahust');
		}

		$this->mustadz->tambahust(	$data);
		redirect(base_url('ustadz'));
		unset($data);
	}

	public function dbubah(){
		$this->form_validation->set_rules('usnama','Nama Ustadz','required|min_length[2]|max_length[50]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=2 karakter',
				'max_length' => '%s harus <=50 karakter'
			)
		);
		$this->form_validation->set_rules('usnotelp','No telp','max_length[50]',
			array(
				'max_length' => '%s harus <=20 karakter'
			)
		);
		$this->form_validation->set_rules('usalamat','Alamat Ustadz','max_length[255]',
			array(
				'max_length' => '%s harus <=255 karakter'
			)
		);
		// $this->form_validation->set_rules('mediaid','Nama Ustadz','max_length[11]',
		// 	array(
		// 		'max_length' => '%s harus <=11 karakter'
		// 	)
		// );
		//rawan
		$data['usid'] = $this->input->post('usid');
		$data['usnama'] = $this->input->post('usnama');
		$data['usnotelp'] = $this->input->post('usnotelp');
		$data['usalamat'] = $this->input->post('usalamat');
		$data['oldmedia']= $this->input->post('oldmedia');
		$data['newmedia']=$this->input->post('filename');

		if (!$this->form_validation->run()) {
			$this->session->set_userdata('err',validation_errors());
			$this->session->set_userdata('input',$data);
			redirect('ustadz/ubahust'.$data['usid']);
		}

		if($_FILES['filename']['name']!="") {
			$data['filename']= $this->do_upload($data['newmedia']);
			$this->hapusmedia($data['oldmedia']);
		}else{
			$data['filename']=$data['oldmedia'];
		}

		$this->mustadz->ubahust($data);
		redirect(base_url('ustadz'));
		unset($data);
	}

	public function dbhapus($usid,$mediadir = null){
		$data['usid'] = $usid;
		$this->hapusmedia($mediadir);
		$this->mustadz->hapusust($data);

		redirect(base_url('ustadz'));
		unset($data,$usid);
	}

	public function ubahust($usid){
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['page'] = "Ubah Ustadz";
		$data['ctrl'] = "masjid";
		$data['search'] = "ustadz";
		$data['usid'] = $usid;
		$data['ustadz'] = $this->mustadz->tampilustadz($data)->row();
		$data['error']=$this->session->userdata('err')?$this->session->userdata('err'):'';
		$data['input']=$this->session->userdata('input')?$this->session->userdata('input'):
			array(
				'usnama' => '',
				'usnotelp' => '',
				'usalamat' => '',
				'mediaid' => ''
			);

		$this->load->view('core/core',$data);
		$this->load->view('vustadz',$data);
		$this->load->view('core/footer',$data);

		//bersih session
		$this->session->set_userdata('err',null);
		$this->session->set_userdata('input',null);
	}

	public function hapusustadz(){
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['page'] = "Hapus Ustadz";
		// $data['tanya'] = "<script>alert('yakin hapus ?')</script>";
		// $this->mpost->

		$this->load->view('core/core',$data);
		$this->load->view('vustadz',$data);
		$this->load->view('core/footer',$data);
		redirect(base_url('ustadz'));
	}
}
