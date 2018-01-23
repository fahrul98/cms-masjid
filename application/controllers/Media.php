<?php

class Media extends CI_Controller{
  public function __construct(){
    parent::__construct();

    $this->load->model('mmedia');
  }

  public function index(){
    $data['page'] = "Media";
    $data['imgs'] = $this->mmedia->tampilmedia()->result();

		$this->load->view('core/core',$data);
		$this->load->view('vmedia',$data);
  }

  public function do_upload(){
    $config['upload_path']= './uploads/';
    $config['allowed_types']= 'gif|jpg|png';
    $config['max_size']= 1000;
    // $config['max_width']= 1024;
    // $config['max_height']= 768;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('filename')){
      $data = array('error' => $this->upload->display_errors());
      // echo "!suks";
      $data['page'] = "Stats";
  		$this->load->view('core/core',$data);
  		$this->load->view('vmedia',$data);
      // $this->load->view('upload_form', $error);
    }else{
        // echo "suks";
      // redirect(base_url('media/suk'));
      $data['filename'] = $this->upload->data('file_name');
      $this->dbmbuat($data);

      $data['upload_data']= $this->upload->data();
      $data['page'] = "Stats";
      $this->load->view('core/core',$data);
  		$this->load->view('vmedia',$data);
      // $this->load->view('upload_success', $data);
    }
  }

  public function dbmbuat($data){
    $data['mdir'] = $data['filename'];

    $this->mmedia->tambahmedia($data);
  }

}
 ?>
