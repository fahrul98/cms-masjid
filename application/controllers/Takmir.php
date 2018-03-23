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
		if ($this->session->userdata('username') and $this->session->userdata('userpass')){
		}else{
			redirect(base_url(''));
		}
		//load model
		$this->load->model('mtakmir');
		$this->load->model('mprofiladmin');
	}

	//view all takmir
	public function index(){
		$data['search'] = "takmir";
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['page'] = "Takmir";
		$data['ctrl'] = "masjid";
		$data['cmtakmir'] = $this->mtakmir->tampiltakmir()->result();
		$data['error'] = $this->session->userdata('err')?$this->session->userdata('err'):'';
		$data['input'] = $this->session->userdata('input')?$this->session->userdata('input'):'';

		$this->load->view('core/core',$data);
		$this->load->view('vtakmir',$data);
		$this->load->view('core/footer',$data);
		//bersih session
		$this->session->set_userdata('err',null);
		$this->session->set_userdata('input',null);
	}

/*
method untuk ke hal tulis post
insert + delete

*/

	//upload gambar
	public function do_upload($data){
	    $config['upload_path']= '../uploads/takmir';
	    $config['allowed_types']= 'gif|jpg|png';
	    $config['max_size']= 5000;
	    // $config['max_width']= 1024;
	    // $config['max_height']= 768;

	    $this->load->library('upload', $config);

	    if (!$this->upload->do_upload('filename')){
	      $data = array('konfirmasi' => $this->upload->display_errors());
	      // print($data['filename']);
				// redirect(base_url('media'));
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
		$data['path']="../uploads/takmir/".$data['mediadir'];
	    if (unlink($data['path'])) {
	      $data['konfirmasi']= $data['mediadir'].' terhapus';
	    }else{
	      // print("gagal");
	      $data['konfirmasi']= $data['mediadir'].' tidak terhapus';
	    }
	    $this->session->set_flashdata('data',$data);
	}

	public function tambahtk(){
		$data['search'] = "takmir";
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['page'] = "Tambah Takmir";
		$data['ctrl'] = "masjid";
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
		$data['filename']= $this->do_upload($this->input->post('filename'));

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
		$data['oldmedia']= $this->input->post('oldmedia');
		$data['newmedia']=$this->input->post('filename');

		if (!$this->form_validation->run()) {
			$this->session->set_userdata('err',validation_errors());
			$this->session->set_userdata('input',$data);
			redirect('takmir/ubahtk/'.$data['tkid']);
		}

		if($_FILES['filename']['name']!="") {
			$data['filename']= $this->do_upload($data['newmedia']);
			$this->hapusmedia($data['oldmedia']);
		}else{
			$data['filename']=$data['oldmedia'];
		}

		//var_dump($_FILES);
		$this->mtakmir->ubahtakmir($data);
		redirect(base_url('takmir'));
		unset($data);
	}

	public function dbhapus($tkid, $mediadir){
		$data['tkid'] = $tkid;
		$this->hapusmedia($mediadir);
		$this->mtakmir->hapustakmir($data);

		redirect(base_url('takmir'));
		unset($data,$tkid);
	}

	public function ubahtk($tkid){
		$data['search'] = "takmir";
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['page'] = "Ubah Takmir";
		$data['ctrl'] = "masjid";
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
