<?php

class Pengaturan extends CI_Controller{
  public function __construct(){
    parent::__construct();
    if ($this->session->userdata('username') and $this->session->userdata('userpass')){
		}else{
			redirect(base_url(''));
		}
    $this->load->model('mprofiladmin');
  }
  public function index(){
		$data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
    $data['page'] = "Pengaturan";

		$this->load->view('core/core',$data);
		$this->load->view('vpengaturan',$data);
    $this->load->view('core/footer',$data);
  }
}
 ?>
