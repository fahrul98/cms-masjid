<?php

class Media extends CI_Controller{
  public function __construct(){
    parent::__construct();
    if ($this->session->userdata('username') and $this->session->userdata('userpass')){
		}else{
			redirect(base_url(''));
		}
    // if (!defined('UPLD')){
    //   define('UPLD', '/uploads');
    // }
    $this->load->helper("file");
    $this->load->model('mmedia');
  }

  public function index(){
    $this->load->model('mprofiladmin');
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
    $data['page'] = "Media";
    // $data['mode'] = "med";
    $data['imgs'] = $this->mmedia->tampilmedia()->result();

		$this->load->view('core/core',$data);
		$this->load->view('vmedia',$data);
    $this->load->view('core/footer',$data);
    unset($data);
  }

  public function do_upload(){
    $config['upload_path']= './uploads';
    $config['allowed_types']= 'gif|jpg|png';
    $config['max_size']= 1000;
    // $config['max_width']= 1024;
    // $config['max_height']= 768;
    // $this->load->library('upload', $config);
    $this->load->library('upload');
    $this->upload->initialize($config);

    if (!$this->upload->do_upload('filename')){
      $data = array('konfirmasi' => $this->upload->display_errors()."<br>".$config['upload_path']);
    }else{
      $data['filename'] = $this->upload->data('file_name');
      $this->dbmbuat($data);

      $data['upload_data']= $this->upload->data();
      $data['konfirmasi']= 'sukses';
      // $this->load->view('upload_success', $data);
    }
    $this->session->set_flashdata('data',$data);
    redirect(base_url('media'));
    unset($data);
  }

  public function dbmbuat($data){
    $data['mdir'] = $data['filename'];
    $this->mmedia->tambahmedia($data);
    unset($data);
  }

  public function dbmhapus(){
    $data['mediaid']=$this->input->get('mediaid');
    $data['mdir']=$this->input->get('mdir');
    // $data['path']=base_url("uploads/".$data['mdir']);
    $data['path']="./uploads/".$data['mdir'];
    if (unlink($data['path'])) {
      $data['konfirmasi']= $data['mdir'].' terhapus';
      $this->mmedia->hapusmedia($data);
    }else{
      // print("gagal");
      $data['konfirmasi']= $data['mdir'].' tidak terhapus';
    }
    $this->session->set_flashdata('data',$data);
    redirect(base_url('media'));
    unset($data);
  }
}
 ?>
