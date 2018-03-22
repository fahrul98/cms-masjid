<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profiladmin extends CI_Controller {

/*
isi :
1. Profiladmin masjid operasi RU
vars:
userid
username
userpass
userfullname
useremail
userurl
usertgldaftar
displayname
mediaid
useralamat
usertelp

*/

	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('username') and $this->session->userdata('userpass')){
		}else{
			redirect(base_url(''));
		}
		//load model
		$this->load->model('mprofiladmin');
	}

	public function index(){
	    $data['page'] = "Profil Admin";
			$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();

			$data['error']=$this->session->userdata('err')?$this->session->userdata('err'):'';
			$data['padmin']=$this->session->userdata('input')?$this->session->userdata('input'):
				array(
					'username' => $data['padmin']->username,
					'userpass' => $this->session->userdata('userpass'),
					'userfullname' => $data['padmin']->userfullname,
					'useremail' => $data['padmin']->useremail,
					'usertgldaftar' => $data['padmin']->usertgldaftar,
					'displayname' =>$data['padmin']->displayname,
					'mediadir' => $data['padmin']->mediadir,
					'useralamat' => $data['padmin']->useralamat,
					'usertelp' => $data['padmin']->usertelp,
					'mediadir' => $data['padmin']->mediadir==""||$data['padmin']->mediadir=="default.png"?"default.png":$data['padmin']->mediadir
				);

			$this->load->view('core/core',$data);
			$this->load->view('vprofiladmin',$data);
			$this->load->view('core/footer',$data);
			$this->session->set_userdata('err',null);
			$this->session->set_userdata('input',null);
	}

	public function dbubahprofiladmin(){
		$this->form_validation->set_rules('username','Username','required|min_length[5]|max_length[12]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=8 karakter',
				'max_length' => '%s harus <=12 karakter'
			)
		);
		$this->form_validation->set_rules('userpass','Password','required|min_length[8]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=8 karakter',
			)
		);
		$this->form_validation->set_rules('userfullname','Nama lengkap','required|min_length[8]|max_length[50]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=8 karakter',
				'max_length' => '%s harus <=50 karakter'
			)
		);
		$this->form_validation->set_rules('useremail','Email','required|valid_email',
			array(
				'required' => '%s harus diisi',
				'valid_email' => '%s tidak valid'
			)
		);
		$this->form_validation->set_rules('displayname','Nama layar','required|min_length[3]|max_length[50]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=8 karakter',
				'max_length' => '%s harus <=50 karakter'
			)
		);
		$this->form_validation->set_rules('useralamat','Alamat','max_length[255]',
			array(
				'max_length' => '%s harus <=255 karakter'
			)
		);
		$this->form_validation->set_rules('usertelp','telepon','max_length[20]',
			array(
				'max_length' => '%s harus <=20 karakter'
			)
		);

		$data['username'] = $this->input->post('username');
		$data['userpass'] = $this->input->post('userpass');
		$data['userfullname'] = $this->input->post('userfullname');
		$data['useremail'] = $this->input->post('useremail');
		// $data['userurl'] = $this->input->post('userurl');
		$data['usertgldaftar'] = $this->input->post('usertgldaftar');
		$data['displayname'] = $this->input->post('displayname');
		$data['mediadir'] = $this->input->post('mediadir');
		$data['useralamat'] = $this->input->post('useralamat');
		$data['usertelp'] = $this->input->post('usertelp');
		$data['oldmedia']= $this->input->post('oldmedia');
		$data['newmedia']=$this->input->post('filename');

		if (!$this->form_validation->run()) {
			$this->session->set_userdata('err',validation_errors());
			$this->session->set_userdata('input',$data);
			redirect('profiladmin');
		}else{
			// $arrsess = array('username' => $q->username,
			// 	'userpass' => $data['userpass'],
			// 	'userfullname' => $q->userfullname
			// );
			if($_FILES['filename']['name']!="") {
				$data['filename']= $this->do_upload($data['newmedia']);
				$this->hapusmedia($data['oldmedia']);
			}else{
				$data['filename']=$data['oldmedia'];
			}

			$this->session->set_userdata('err','Berhasil diubah');

			//re login pas ganti password
			$q = $this->mprofiladmin->adminlogin($data)->row();
			$arrsess = array('username' => $q->username,
				'userpass' => $data['userpass'],
				'userfullname' => $q->userfullname
			);

			$this->session->set_userdata($arrsess);
		}

		$this->mprofiladmin->ubahpadmin($data);
		redirect(base_url('profiladmin'));
		// unset($data);
	}

	//upload gambar
	public function do_upload($data){
	    $config['upload_path']= './uploads/takmir';
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
		$data['path']="./uploads/takmir/".$data['mediadir'];
	    if (unlink($data['path'])) {
	      $data['konfirmasi']= $data['mediadir'].' terhapus';
	    }else{
	      // print("gagal");
	      $data['konfirmasi']= $data['mediadir'].' tidak terhapus';
	    }
	    $this->session->set_flashdata('data',$data);
	}
}
