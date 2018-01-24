<?php

class Pengaturan extends CI_Controller{
  public function __construct(){
    parent::__construct();
  }
  public function index(){
    $data['page'] = "Pengaturan";

		$this->load->view('core/core',$data);
		$this->load->view('vpengaturan',$data);
  }
}
 ?>
